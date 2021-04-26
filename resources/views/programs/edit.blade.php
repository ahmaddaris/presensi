<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@extends('master')

@section('content')
<h2>Edit Program</h2>
<form action="{{route('program.update', ['mahad'=>$program->mahad_id, 'program'=>$program->id])}}" method="post">
  {{ method_field('PATCH')}} 
  {{csrf_field()}}
    <div class="row">
      <div class="col-sm-6">
        <label for="email">Nama Program</label>
        <input type="text" name="name" placeholder="Name" value="{{$program->name}}">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <label for="status">Status</label>
          <select name="status" id="status">
          <option value="1" @if($program->status == 'sedang berjalan') selected @endif)>Sedang Berjalan</option>
          <option value="2" @if($program->status == 'segera') selected @endif)>Segera</option>
          <option value="3" @if($program->status == 'selesai') selected @endif)>Selesai</option>
        </select>
      </div>
    </div>
    <div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form> 

@endsection