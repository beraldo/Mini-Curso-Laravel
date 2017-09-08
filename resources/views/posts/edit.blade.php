@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <h1>Editar Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="post" class="form-horizontal">
      @include('posts._forms.fields')
    </form>
  </div>
</div>
@endsection
