<div class="form-group">
  <div class="col-md-3">
    <label for="title">Título do post</label>
  </div>
  <div class="col-md-9">
    <input type="text" name="title" id="title" class="form-control" value="{{ isset($post) ? $post->title : '' }}" placeholder="Título">
  </div>
</div>

<div class="form-group">
  <div class="col-md-3">
    <label for="content">Conteúdo do post</label>
  </div>
  <div class="col-md-9">
    <textarea name="content" id="content" rows="5" class="form-control">{{ isset($post) ? $post->content : '' }}</textarea>
  </div>
</div>

<div class="form-group">
  <div class="col-md-3">
    
  </div>
  <div class="col-md-9">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Enviar" class="btn btn-primary">
  </div>
</div>