@extends('layouts.app')
@section('title','Semua Data Postingan')

@section('content')
<h1>Data Postingan</h1>
<a href="{{ route('post.create') }}" class="btn btn-primary"> Tambah Postingan</a>
<table class="table table-hover">
    <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($posts as $item)
        <tr>
          <td scope="row">{{ $item->id }}</td>
          <td>{{ $item->title }}</td>
          <td>{{ Str::words($item->description, 5,'..')}}</td>
          <td> 
            <a href="{{ route('post.edit',$item->id) }}" class="btn btn-warning">Edite</a> 
            <a href="{{ route('post.show',$item->id) }}" class="btn btn-info">Detail</a> 
            <form action="{{ route('post.destroy',$item->id) }}"   method="post">
              @method('DELETE')
              @csrf
              <button class="btn btn-danger">Hapus</button> 
            </form>

          </td>
        </tr>
        @empty
        <tr>
          <td colspan="4" >Data tidak ada</td>
          
        </tr>
        @endforelse
    </tbody>
</table>

    
@endsection