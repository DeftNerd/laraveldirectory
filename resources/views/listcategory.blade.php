@extends('layout')
@section('content')

<div class="home" id="home">
  <h3 class="postTitle">{{ $category->name }}</h3>
  <p class="meta"><a class="button" href="/">Back to the index</a></p>

  <dl>
  @forelse($links as $link)
    <dt>
    @if (Auth::check())
      {{ $link->weight }}. 
    @endif
      <a class="post-link" href="{{ $link->url }}">{{ $link->name }}</a>
    </dt>
    <dd>{{ $link->description }}</dd>
    @if (Auth::check())
    <dd>
      {!! Form::open(['url'=>'/admin/links/'.$link->slug, 'method'=>'delete']) !!}
      <a href="/admin/links/{{$link->slug}}/edit" class="button">Edit</a>
      <button type="submit" class="button">Delete</button>
      {!! Form::close() !!}
    </dd>
    @endif
  @empty
    <dt>No Links Found</dt>
    <dd>Please submit some!</dd>
  @endforelse
  </dl>

  @if (Auth::check())
    <div>
      <a class="button" href="{{ URL::to('/admin/links/create') }}">Create New Link</a>
    </div>
  @endif

  <p class="meta"><a class="button" href="/">Back to the index</a></p>

</div>

@stop
