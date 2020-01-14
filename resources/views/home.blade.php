@extends('layout.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <!-- Menu -->
        <h2>Menu</h2>
        <ul>
          <li><a href="{{ route('bloggy.create')}}"><button class="btn btn-info">ADD DATA</button></li>
        </ul>
    </div>
    <div class="col-md-12">
      <!--content/isi -->
        <h2>Content</h2>
        @if($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
        @endif
        <table class="table table-responsive">
          <thead>
            <th>No.</th>
            <th>Judul</th>
            <th>Headline</th>
            <th>isi</th>
            <th>Deskripsi</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Aksi</th>
          </thead>
        
        <tbody>
          @foreach($bloggy as $blog)
          <tr>
            <td>{{ $blog->id }}</td>
            <td>{{ $blog->judul }}</td>
            <td>{{ $blog->headline }}</td>
            <td>{{ $blog->isi }}</td>
            <td>{{ $blog->deskripsi }}</td>
            <td>{{ $blog->created_at->diffForHumans() }}</td>
            <td>{{ $blog->updated_at->diffForHumans() }}</td>
            <td>
              <a href="{{ route('bloggy.edit', $blog->id) }}"><button class="btn btn-success">Edit</button></a>
              <form method="POST" action="{{ route('bloggy.destroy', $blog->id) }}">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-danger" value="delete">
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection