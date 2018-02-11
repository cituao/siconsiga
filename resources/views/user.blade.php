@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-8">
      <h2 align="center">get_user moodlerooms</h2>
    </div>
  </div>
</div>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-8">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">campo</th>
            <th scope="col">value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>nombre</td>
            <td>{{ $name }}</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>apellido</td>
            <td>Thornton</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>email</td>
            <td>otto.thornton@uao.edu.co</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>  
</div>
@endsection