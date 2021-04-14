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
        <td>
          <a href="{{$program->id}}">
            {{ ucwords($program->name)}}
            <br>
          </a>
          <sub>reg</sub>
          <sub>jun</sub>
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
        <td method="POST">
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



@endsection