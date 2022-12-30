@extends('layouts.app')
@section('title','Form Data Postingan')

@section('content')
<h1>Add Posting</h1>
<form action="{{ route('post.store') }}" method="post">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="title" value="{{ old('title') }}" name='title' placeholder="Leave a comment here" >
        @error('title')
            <div class="form-text">{{ $message }}</div>
            
        @enderror
        <label for="title">Title</label>
      </div>
      <div class="form-floating mb-3">
          <textarea class="form-control" id="description" name='description' style="height: 100px" placeholder="Leave a comment here">{{ old('description') }}</textarea>
          @error('description')
            <div class="form-text">{{ $message }}</div>
          @enderror
          <label for="description">Description</label>
      </div>
          
    <div class="mb-3 mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('post.index') }}"  class="btn btn-danger">Back To Posting</a>
    </div>
  </form>
@endsection