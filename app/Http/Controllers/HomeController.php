<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsStates;
use Illuminate\Support\Facades\Http;



class HomeController extends Controller
{
    public function homePage(UsStates $us_states){
		$states = $us_states::all();
		
		return view('home', compact('states'));
	} 
	
	public function getRestaurants(UsStates $us_states, Request $request){
		$states = $us_states::all();
		$search_loc = $request->get('location');
	
		$url = "https://api.documenu.com/v2/restaurants/search/fields?state=$search_loc";
		
		$response  = $this->apiCall($url);
		
		if(isset($response['status']) && $response['status'] == "Fail")
			return response()->json(['msg'=>"Service Unavailable"]);
		
		$cuis = '';
		$results;
		foreach($response as $key => $val){
			if ($key == 'data'){
				foreach($val as $k => $v){
					foreach($v['cuisines'] as $values){
						$cuis .= $values.", ";
					}
					
					$results[$v['restaurant_id']] =
						[
							//'id' => $v['restaurant_id'],
							'restaurant_name' => $v['restaurant_name'],
							'restaurant_phone' => $v['restaurant_phone'],
							'cuisines' => $cuis,
							'address' => $v['address']['formatted'],
					];
					 
				}	
			}
			
		}
		
		return view('home', compact('states', 'results'));
	}
	public function getMenuList($id){
		
		$url = "https://api.documenu.com/v2/restaurant/$id/menuitems";
		$response  = $this->apiCall($url);
		$results = [];
		$name = "";
		foreach($response['data'] as $key => $value){
			$results[$value['menu_item_name']] = [
				'menu_item_name' => $value['menu_item_name'],
				'menu_item_description' => $value['menu_item_description'],
				'subsection' => $value['subsection'],
				'restaurant_name' => $value['restaurant_name'],
				'restaurant_id' => $value['restaurant_id'],
				'address' => $value['address']['formatted']
			];
			
			$name = $value['restaurant_name'];
		}
		
		return view('menu', compact('results', 'name'));
	}
	
	public function apiCall($url){
		$key = "87e980a2c054c78fedbd644417956bdf";
		try	{
	
			$response = Http::get($url, [
				
				'key' => '87e980a2c054c78fedbd644417956bdf',
			]);
			
			//$res = json_decode($response->statusCode(), true);
			
			$data = json_decode($response->body(), true);
			
			return $data;
		} catch(Exception $e){
			$data['status'] = "Fail";
			return $data;
		}
	}
}
