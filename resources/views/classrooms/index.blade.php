<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@extends('master')
@section('content')
<h2>kelas {{$program->name }} </h2>
  <table class='table'>
    <thead>
    <tr>
      @foreach ($header as $item)
          <th>{{ $item }}</th>
      @endforeach
    </tr>
    </thead>
    <tbody>
      @php
          $i = 0;
      @endphp
      @foreach ($classrooms as $classroom)
      <tr>
        <td>
          @php
            $i++;
            echo $i;
          @endphp
        </td>
        <td>
          <a href="{{ route('classroom.show', ['program'=>$program->id, 'classroom'=>$classroom->id]) }}">
            {{ ucwords($classroom->name)}}
            <br>
          </a>
          <sub>nahwu</sub>
          <sub>dasar</sub>
          <sub>pagi</sub>
        </td>
        <td>
          {{$classroom->detail}}
        <td>
          <a class="btn btn-outline-primary btn-sm" href="{{ route('classroom.edit',  ['program'=>$program->id, 'classroom'=>$classroom->id]) }}">Edit</a>
          <form action="{{route('classroom.destroy', ['program'=>$program->id, 'classroom'=>$classroom->id])}}" method="POST" onsubmit="return confirm('Apakah Anda yakin mau menghapus data?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
<a href="{{ route('classroom.create', ['program' => $program->id]) }}" class="btn btn-info" role="button">
  <i class="bi bi-plus"></i>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
  </svg>Tambah Kelas
</a>

@endsection