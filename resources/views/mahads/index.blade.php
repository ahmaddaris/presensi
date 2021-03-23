<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@extends('master')
@section('content')

  <table class='table'>
    <thead>
    <tr>
      <th width="4">No</th>
      <th >Nama Program</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
 
    </thead>
    <tbody>
      @php
          $i = 0;
      @endphp
      @foreach ($programs as $program)
      <tr>
        <td>
          @php
            $i++;
            echo $i;
          @endphp
        </td>
        <td>{{ ucwords($program->name)}}<br>
          <sub>tag1</sub>
          <sub>tag2</sub>
        </td>
        <td>
        @switch($program->status)
            @case('sedang berjalan')
            <div class="progress-bar bg-success" style="width:67%" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100">67%</div></td>                
                @break
            @case('segera')
            <span class="badge badge-warning">{{$program->status}}</span></td>
                
                @break
            @default
            <span class="badge badge-secondary">{{$program->status}}</span></td>
                
        @endswitch
        <td>
          <form action="{{ route('program.destroy', $program->id) }}" method="POST">
            <a class="btn btn-outline-info btn-sm" href="">Show</a>
            <a class="btn btn-outline-primary btn-sm" href="">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody> 
  </table>
<a href="{{$program->mahad_id ?? ''}}/program/tambah" class="btn btn-info" role="button">
  <i class="bi bi-plus"></i>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
  </svg> Tambah Program
</a>



@endsection