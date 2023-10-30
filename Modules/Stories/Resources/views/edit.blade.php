@extends('layouts.template')
@section('title')
Story
@endsection
@section('content')
<form action="{{url('stories/update/'.$stories->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-12 col-md-12">
      <div class="card card-primary">
        <div class="card-header bg-white">
          <h4>Story</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" id="title" value="{{$stories->title}}" name="title" placeholder="Enter Title">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Slug</label>
                <input type="text" class="form-control" value="{{$stories->slug}}" id="slug" name="slug" placeholder="Enter slug">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="editor">{{$stories->description}}</textarea>
              </div>
            </div>
          </div>
          
          
        </div>
        <div class="card-footer text-end">
          <button class="btn btn-primary mr-1" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection
@section('js')
<script>
$(document).ready(function() {
InitEditor();
});
$("#title").keyup(function() {
var Text = $(this).val();
Text = Text.toLowerCase();
Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
$("#slug").val(Text);
});
</script>
@endsection