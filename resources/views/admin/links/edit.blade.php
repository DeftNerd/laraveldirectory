@extends('app')
@section('content')

<div class='container'>
	{!! Form::open(['url' => '/admin/links/'.@$link->slug, 'method' =>'put', 'class'=>'form', 'role'=>'form']) !!}

	@if(count($errors))
	<div role='alert' class='alert alert-danger'>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<div class='row'>
		<div class='col-md-12'>

			<div class="form-group">
				{!! Form::label('Category') !!} <br />
				{!! Form::select('category_slug', $categories, $category_slug) !!}
			</div>
                        <div class='form-group'>
                                {!! Form::label('weight', 'Weight') !!}
                                {!! Form::number('weight', $link->weight, ['class'=>'form-control']) !!}
                        </div>
			<div class='form-group'>
				<!-- `Name` Field -->
				{!! Form::label('name', 'Name') !!}
				{!! Form::text('name', $link->name, ['class'=>'form-control']) !!}
			</div>
			<div class='form-group'>
				<!-- `Url` Field -->
				{!! Form::label('url', 'Url') !!}
				{!! Form::text('url', $link->url, ['class'=>'form-control']) !!}
			</div>
			<div class='form-group'>
				<!-- `Description` Field -->
				{!! Form::label('description', 'Description') !!}
				{!! Form::text('description', $link->description, ['class'=>'form-control']) !!}
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
