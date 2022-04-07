@extends('layouts.main')

@section('content')
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <img src="img/nicola.jpg" width ="25%" class="rounded-circle  img-thumbnail">
      <h1><?= "$nama" ?></h1>
      <h6>Selamat Datang, {{ $nama }}</h6>
    </div>
  </div>
@endsection

