@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Categories</div>

				<div class="panel-body">
					@forelse ($categories as $category)
    				<li><a href="/category/{{ $category->slug}}">{{$category->name}}</a> - {{$category->description }}</li>
					@empty
    				<p>No Categories</p>
					@endforelse
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
