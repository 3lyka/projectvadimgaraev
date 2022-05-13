@extends('layouts.main')
@section('content')
<div class="posts" style="margin-top:5% ;">
<div class="container">
    <div class="row">
    <form class="lh-lg" action="{{ route('post.store') }}" method="post">
        @csrf
  <div class="mb-3">
    <label class="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
  </div>
  <div class="mb-3">
    <label class="title">content</label>
    <textarea type="text" name="content" class="form-control" id="content" placeholder="content"></textarea>
  </div>
  <div class="mb-3">
    <label class="title">Image</label>
    <input type="text" name="image" class="form-control" id="image" placeholder="Image">
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
    </div>
</div>
</div>
@endsection