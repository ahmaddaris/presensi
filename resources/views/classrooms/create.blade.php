<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@extends('master')

@section('content')

<form action="{{route('classroom.store', ['program'=>$program_id]) }}" method="post">
  {{csrf_field()}}
  <div class="row">
    <div class="col-sm-6">
      <label for="name" width="20">Nama Kelas</label>
      <input type="text" name="name" required="required">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <label for="detail" width="20">Detail</label>
      <input type="text" name="detail" required="required">
    </div>
  </div>

  <div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  <input type="hidden" name="program_id" value="{{$program_id}}">
</form> 


@endsection 