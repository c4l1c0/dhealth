@extends('layouts.app')

@section('content')
<div class="container bg-white rounded-lg p-5">
	<div class="me-5 mb-4 d-inline-flex">
		<h3 class="p-2"> Recipe</h3>
	</div>

	<div class="mx-md-4">
	<div align="right">
	  <a href="{{ route('recipes.create') }}"><button class="btn btn-primary">Add</button></a>
	</div>
	<hr>

	<table class="table table-bordered" id="users-table">
	  <thead>
		<tr>
		  <th>Name</th>
		  <th>Data</th>
		  <th>Added By</th>
		  <th>Actions</th>
		</tr>
		@forelse($recipes as $data)
		<tr>
			<td>{{ $data->name}}</td>
			<td>{{ $data->name}}</td>
			<td>{{ $data->createdBy->name}}</td>
			<td>
				<div class="d-sm-inline-flex">
	  			<a href="{{ route('recipes.edit', $data) }}"><button class="me-2 btn btn-primary bi-pen-fill"></button></a>
				{!! Form::open(array('route' => ['recipes.destroy', $data], 'method' => 'DELETE')) !!}
				{!! Form::button('<i class="bi-trash-fill"></i>', ['class'=> 'btn btn-danger']) !!}
				{!! Form::close() !!}
				</div>
			</td>
		</tr>
		@empty
			<tr><td colspan="4">No Data</td></tr>
		@endforelse
	  </thead>
	</table>
	<div class="d-flex justify-content-center">
		{!! $recipes->links() !!}
	</div>

  </div>
</div>
<!-- /container --> 
@endsection
