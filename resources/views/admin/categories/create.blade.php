@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Create New Category</div>

				<div class="panel-body">
					{!! Form::open(array('url' => '/admin/categories', 'method' => 'POST')) !!}
					<div class="row">
						<div class="col-md-3">{!! Form::label('name', 'Name:') !!}</div>
						<div class="col-md-9">{!! Form::text('name') !!}</div>
					</div>
					<div class='row'>
						<div class="col-md-3">{!! Form::label('description', 'Description') !!}</div>
						<div class="col-md-9">{!! Form::text('description', Input::old('description'), ['class'=>'form-control']) !!}</div>
					</div>
						<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-9">
							{!! Form::submit('Create', array('class' => 'btn btn-xs btn-success')) !!}
							<a class="btn btn-xs btn-info" href="{{ URL::to('/admin/categories') }}">Cancel</a>
						</div>
					</div>
					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
