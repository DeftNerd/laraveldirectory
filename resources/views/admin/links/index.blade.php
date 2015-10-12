@extends('app')
@section('content')

<div class='container'>
	<div class='row'>
		<div class='col-md-12'>
                        <div class="panel-footer">
                                <a class="btn btn-info" href="{{ URL::to('/admin/links/create') }}">Create New</a>
                        </div>

			<table class='table'>
				<tr>
					<th>Category</th>
					<th>Weight</th>
					<th>Name</th>
					<th>Url</th>
					<th>Description</th>
					<th></th>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
				</tr>
				@forelse($links as $link)
				<tr>
					<td>{{ $link->category->name }}</td>
					<td>{{ $link->weight }}</td>
					<td>{{ $link->name }}</td>
					<td><a href='/admin/links/{{$link->slug}}/edit' class='btn btn-default'>Edit</a></td>
					<td>
						{!! Form::open(['url'=>'/admin/links/'.$link->slug, 'method'=>'delete']) !!}
							<button type='submit' class='btn btn-default'>Delete</button>
						{!! Form::close() !!}
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="6">No Links Found</td>
				</tr>
				@endforelse
			</table>
			<div class="panel-footer">
				<a class="btn btn-info" href="{{ URL::to('/admin/links/create') }}">Create New</a>
			</div>
		</div>
	</div>
</div>

@stop
