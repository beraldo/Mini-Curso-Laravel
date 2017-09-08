@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <h1>Posts</h1>

    @if ($posts->count() > 0)
    @foreach ($posts as $post)
    <div>
      <h3><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h3>
      <p>{{ $post->content }}</p>
      <p><em>Por: {{ $post->user->name }},
         em {{ $post->created_at->format('d/m/Y') }}
         | Última atualização {{ $post->updated_at->format('d/m/Y') }}</em></p>
    </div>
    @endforeach
    @else
    <em>Nenhum post</em>
    @endif
  </div>
</div>
@endsection
