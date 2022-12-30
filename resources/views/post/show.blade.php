@extends('layouts.app')
@section('title','Detail  Postingan')

@section('content')
<h1>detail postingan ID : {{ $post->id }}</h1>



<table class="table table-hover">
    <tbody>
        <tr>
          <td width="50px" >Title</td>
          <td >{{ $post->title }}</td>
        </tr>
        <tr>
          <td width="50px" >Description</td>
          <td >{{ $post->description }}</td>
        </tr>
      </tbody>
</table>
<a href="{{ route('post.index') }}" class="btn btn-primary">Kembali Ke Posting</a>
    
@endsection