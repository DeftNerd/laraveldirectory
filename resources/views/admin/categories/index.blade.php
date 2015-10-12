@extends('app')
@section('content')

<div class='container'>
	<div class='row'>
		<div class='col-md-12'>
                        <div class="panel-footer">
                                <a class="btn btn-info" href="{{ URL::to('/admin/categories/create') }}">Create New</a>
                        </div>

			<table class='table'>
				<tr>
					<th>Weight</th>
					<th>Name</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				@forelse($categories as $category)
				<tr>
					<td>{{$category->weight}}</td>
					<td><strong>{{ $category->name }}</strong><br />{{$category->description}}</td>
					<td><a href='/admin/categories/{{$category->slug}}/edit' class='btn btn-info'>Edit</a></td>
					<td>
						{!! Form::open(['url'=>'/admin/categories/'.$category->slug, 'method'=>'delete']) !!}
							<button type='submit' class='btn btn-warning'>Delete</button>
						{!! Form::close() !!}
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="3">No Categories Found</td>
				</tr>
				@endforelse
			</table>
			<div class="panel-footer">
				<a class="btn btn-info" href="{{ URL::to('/admin/categories/create') }}">Create New</a>
			</div>
		</div>
	</div>
</div>

@stop
