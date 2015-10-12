@extends('layout')
@section('content')

<div class="home" id="home">
  <h1 class="pageTitle">Categories</h1>

  <dl>
  @forelse($categories as $category)
    <dt>
    @if (Auth::check())
      {{ $category->weight }}. 
    @endif
      <a class="post-link" href="/category/{{ $category->slug }}">{{ $category->name }}</a>
    </dt>
    <dd>{{ $category->description }}</dd>
    @if (Auth::check())
    <dd>
      {!! Form::open(['url'=>'/admin/categories/'.$category->slug, 'method'=>'delete']) !!}
      <a href="/admin/categories/{{$category->slug}}/edit" class="button">Edit</a>
      <button type="submit" class="button">Delete</button>
      {!! Form::close() !!}
    </dd>
    @endif
  @empty
    <dt>No Categories Found</dt>
    <dd>Something must have gone wrong.</dd>
  @endforelse
  </dl>
  @if (Auth::check())
    <div>
      <a class="button" href="{{ URL::to('/admin/categories/create') }}">Create New Category</a>
    </div>
  @endif


</div>

@stop
