@extends('layouts.app')
@section('title','Form Data Postingan')

@section('content')
<h1>Edit Postingan</h1>
<form action="{{ route('post.update',$post->id) }}" method="post">
    @method('PUT')
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="title" value="{{ old('title',$post->title) }}" name='title' >
        @error('title')
            <div class="form-text">{{ $message }}</div>
            
        @enderror
        <label for="title">Title</label>
      </div>
      <div class="form-floating">
          <textarea class="form-control" id="description" name='description'  style="height: 100px">{{ old('description',$post->description) }}</textarea>
          @error('description')
            <div class="form-text">{{ $message }}</div>
          @enderror
          <label for="description">Description</label>
      </div>
    
    <div class="mb-3 mt-3">
        <button type="submit" class="btn btn-primary">Update Data</button>
        <a href="{{ route('post.index') }}" class="btn btn-danger">Back To Posting</a>

    </div>
  </form>
@endsection