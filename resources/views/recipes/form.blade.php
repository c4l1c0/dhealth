@extends('layouts.app');

@section('content');
@if(!isset($data))
	{{!! Form::open(array('route' => 'medicines.store')) !!}}
@else
	{{!! Form::model($data, ['route' => ['medicines.update', $data->id], 'method' => 'put']) !!}}
@endif

<div class="container bg-white rounded-lg p-5">
	<div class="me-5 mb-4">
		<h3>Add Medicines</h3>
	</div>

	<div class="mx-md-4">
		<div class="form-group">
			<div class="mb-3 row">
				{!! Form::label('codename', 'Codename', ['class'=>'col-sm-2 col-form-label']) !!}
				<div class="col-md-8">
					{!! Form::text('codename', null, ['class'=>'form-control']) !!}
					{!! $errors->first('codename', '<p class="help-block text-danger">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="mb-3 row">
				{!! Form::label('name', 'Name', ['class'=>'col-sm-2 col-form-label']) !!}
				<div class="col-md-8">
					{!! Form::text('name', null, ['class'=>'form-control']) !!}
					{!! $errors->first('name', '<p class="help-block text-danger">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="mb-3 row">
				{!! Form::label('stock', 'Stock', ['class'=>'col-sm-2 col-form-label']) !!}
				<div class="col-sm-2">
					{!! Form::number('stock', null, ['class'=>'form-control', 'step' => '0.01']) !!}
					{!! $errors->first('stock', '<p class="help-block text-danger">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="mb-3 row">
				{!! Form::label('additional_data', 'Additional Data', ['class'=>'col-sm-2 col-form-label']) !!}
				<div class="col-sm-8">
					{!! Form::text('additional_data', null, ['class'=>'form-control']) !!}
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-10" style="text-align: right">
				{!! Form::submit('Save', ['class'=> 'btn btn-primary']) !!}
			</div>
		</div>

		{!! Form::close() !!}

	</div>
</div>
<!-- /container --> 

@endsection
