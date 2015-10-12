@extends('app')
@section('content')

<div class='container'>
	{!! Form::open(array('url' => 'admin/links', 'method' => 'POST')) !!}
	@if(count($errors))
	<div role='alert' class='alert alert-danger'>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{!! $error !!}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<div class='row'>
		<div class='col-md-12'>
			<div class="form-group">
        {!! Form::label('Category') !!} <br />
        {!! Form::select('category_slug', $categories) !!}
      </div>
                        <div class='form-group'>
                                {!! Form::label('weight', 'Weight') !!}
                                {!! Form::number('weight', Input::old('weight'), ['class'=>'form-control']) !!}
                        </div>

			<div class='form-group'>
				<!-- `Name` Field -->
				{!! Form::label('name', 'Name') !!}
				{!! Form::text('name', Input::old('name'), ['class'=>'form-control']) !!}
			</div>
			<div class='form-group'>
				<!-- `Url` Field -->
				{!! Form::label('url', 'Url') !!}
				{!! Form::text('url', Input::old('url'), ['class'=>'form-control']) !!}
			</div>
			<div class='form-group'>
				<!-- `Description` Field -->
				{!! Form::label('description', 'Description') !!}
				{!! Form::text('description', Input::old('description'), ['class'=>'form-control']) !!}
			</div>
		</div>
		<div class='col-md-12 text-right'>
			<!-- Form actions -->
			<a href='{!! URL::previous() !!}' class='btn btn-default'>Cancel</a>
			<button type='submit' class='btn btn-default'>Submit</button>
		</div>
	</div>
	{!! Form::close() !!}
</div>
@stop
