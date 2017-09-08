@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->content }}</p>

    <p>Criado por: {{ $post->user->name }}</p>

    <p>Em: {{ $post->created_at->format('d/m/Y') }}</p>
    
    <p>Atualizado Em: {{ $post->updated_at->format('d/m/Y') }}</p>

  </div>
</div>
@endsection
