@extends('layouts')
@section('content')
<div class="container">
	<div class="row mt-5">
		<div class="navbar" style="color:red;"><h2><b> Restaurant Name: {{ $name}}</h2></div>
		<div class="card card-body">
			@foreach($results as $key => $value)			
			<div class="card p-2">
				<div class="card-header" style="background: #632435;"><h3 class="text-white">  {{ $key }} </h3></div>
				<div class="card-body">
					<div class="row">
						<div class="col-2">
							<ul>
								<li>Menu :</li>
								<li>Item Desc :</li>
								<li>Address:</li>
							</ul>
						</div>
						<div class="col-10">
							<h4>Menu : {{ $value['menu_item_name'] }}</h4>
							<p><b>Item Desc :</b> {{ $value['menu_item_description'] }}</p>
							<p><b>Address:</b> {{ $value['address'] }}</p>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		
		
	</div>
</div>

@endsection