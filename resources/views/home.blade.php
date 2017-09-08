@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif

          <p><a href="{{ route('posts.create') }}" class="btn btn-default">Criar novo post</a></p>

          @if ($posts->count() > 0)
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Data</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $post)
              <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->user->name }}</td>
                <td>{{ $post->created_at->format('d/m/Y') }}</td>
                <td>
                  <a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">Ver</a>
                  @can('update', $post)
                  <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Editar</a>
                  @endcan

                  @can('delete', $post)
                  <a href="{{ route('posts.delete', $post->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza de que deseja remover este post?')">Remover</a>
                  @endcan
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @else
          <em>Nenhum post</em>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
