@extends('layouts.app')

@section('content')
<div class="container bg-white rounded-lg p-4">
  <div class="widget-header">
	<h3> Medicines</h3>
  </div>

  <div>
	<div align="right">
	  <a href="{{ route('medicines.create') }}"><button class="btn btn-primary">Add</button></a>
	</div>
	<hr>

	<table class="table table-bordered" id="users-table">
	  <thead>
		<tr>
		  <th>Code</th>
		  <th>Name</th>
		  <th>Stock</th>
		  <th>Added By</th>
		</tr>
		@forelse($medicines as $data)
		<tr>
			<th>{{ $data->codename}}</th>
			<th>{{ $data->name}}</th>
			<th>{{ $data->stock}}</th>
			<th>{{ $data->added_by}}</th>
		</tr>
		@empty
			<tr><td colspan="4">No Data</td></tr>
		@endforelse
	  </thead>
	</table>

  </div>
</div>
<!-- /container --> 
@endsection
