<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@extends('master')

@section('content')
<h2>Edit Kelas</h2>

<form action="{{route('classroom.update', ['program'=>$classroom->program_id, 'classroom'=>$classroom->id]) }}" method="post">
  {{csrf_field()}}
  {{ method_field('PATCH')}} 

  <div class="row">
    <div class="col-sm-6">
      <label for="name" width="20">Nama Kelas</label>
      <input type="text" name="name" required="required" value="{{ $classroom->name}} ">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <label for="detail" width="20">Detail</label>
      <input type="text" name="detail" required="required" value="{{ $classroom->detail}} ">
    </div>
  </div>

  <div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form> 


@endsection 