<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@extends('master')

@section('content')
<h2>Tambah Program Baru</h2>

<form action="{{route('program.store', ['mahad'=>$mahad_id]) }}" method="post">
  {{csrf_field()}}
  <div class="row">
    <div class="col-sm-6">
      <label for="name" width="20">Nama Program</label>
      <input type="text" name="name" required="required">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <label for="status" width="20">Status</label>
        <select name="status" id="status">
        <option value="2">Sedang Berjalan</option>
        <option value="3">Segera</option>
        <option value="1">Selesai</option>
      </select>
    </div>
  </div>
  <input type="hidden" name="mahad_id" value="{{$mahad_id}}">
  <div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form> 

@endsection 