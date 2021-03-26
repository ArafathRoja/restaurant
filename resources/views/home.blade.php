@extends('layouts')
@section('content')
@if(isset($msg) && $msg != '')
	<h4 style="color:red">{{$msg}}</h4>
@endif
	<div class="container">
		<div class="row mt-5">
			<form method="POST" id="loc_form" class="col-12" action="{{ url('/get-list') }}">
				@csrf
				<div class="input-group mb-3 ">
				  <!--<input type="text" class="form-control form-control-lg" placeholder="Enter Location">-->
				  <select class="form-control form-control-lg" name="location">
					<option>Select Location</option>
					@foreach($states as $state)
						<option value="{{$state->state_code}}">{{$state->state_name}}</option>
					@endforeach
					
				  </select>
				  <div class="input-group-append">
					<button class="btn btn-success search" type="submit">Go</button>
				  </div>
				</div>
			</form>
		</div>
		@if(isset($results))		
			<div class="row mt-5">
				<div class="card">
					<div class="card-header text-white" style="background: #632435;">
						LIST OF RESTAURANTS
					</div>
					<div class="card-body">
						<table class="table table-bordered" id="add_tbl">
							<thead>
								<th>Id</th>								
								<th>Restaurant Name</th>			
								<th>Restaurant Phone</th>			
								<th>Cuisines</th>			
								<th>Address</th>			
								<th>Action</th>			
							</thead>
							<tbody>
							@if(isset($results) && empty($results) == false)
								@foreach($results as $key => $val)
								
									<?php $records = $val; ?>
									<tr>
										<td>{{$key}}</td>
									@foreach($records as $k => $value)
										<td>{{$value}}</td>
									@endforeach
										<td><a href="{{ url('/get-menu/'.$key) }}" id="{{$key}}" class="btn btn-info mt-2">View Menu</a></td>
									</tr>
								@endforeach
							@else
								<tr style="color:red;">Sorry, No Results Found</tr>
							@endif
							</tbody>
						</table>
					</div>
				</div>
			</div>
		@endif
	</div>
	<script> 
		var baseUrl = "<?php echo url('/'); ?>";
		$(document).ready(function(){
			$('#add_tbl').DataTable();
			
		});
	</script>
@endsection