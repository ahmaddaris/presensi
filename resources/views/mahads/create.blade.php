<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@extends('master')

@section('content')

  <form action="/mahad/{{ $mahad_id }}/program/store" method="post">
    {{csrf_field()}}
    <div class="row">
      <div class="col-sm-6">
        <label for="email" width="20">Nama Program</label>
        <input type="text" name="name" required="required">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <label for="status" width="20">Status</label>
          <select name="status" id="status">
          <option value="1">Sedang Berjalan</option>
          <option value="2">Segera</option>
          <option value="3">Selesai</option>
        </select>
      </div>
    </div>
    <div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form> 

  </form>


@endsection