@extends('layouts.main')

@section('content')
<table class="table table-primary table-bordered border-dark">
    <thead>
      <tr>
        <th scope="col" colspan="3">BIODATA NICOLA</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">NAMA :</th>
        <td><?= "$nama" ?></td>
      </tr>
      <tr>
        <th scope="row">TTL :</th>
        <td><?= "$ttl" ?></td>
      </tr>
      <tr>
        <th scope="row">JENIS KELAMIN :</th>
        <td><?= "$jk" ?></td>
      </tr>
      <tr>
        <th scope="row">GOLONGAN DARAH :</th>
        <td><?= "$goldar" ?></td>
      </tr>
      <tr>
        <th scope="row">ALAMAT :</th>
        <td><?= "$alamat" ?></td>
      </tr>
      <tr>
        <th scope="row">PEKERJAAN :</th>
        <td><?= "$pekerjaan" ?></td>
      </tr>
    </tbody>
</table>
    <table class="table table-primary table-bordered border-dark">
    <thead>
        <tr>
            <br><br>
          <th scope="col" colspan="3">PENDIDIKAN</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">TK :</th>
          <td><?= "$tk" ?></td>
        </tr>
        <tr>
          <th scope="row">SD :</th>
          <td><?= "$sd" ?></td>
        </tr>
        <tr>
          <th scope="row">SMP :</th>
          <td><?= "$smp" ?></td>
        </tr>
        <tr>
          <th scope="row">SMA :</th>
          <td><?= "$sma" ?></td>
        </tr>
        <tr>
          <th scope="row">KULIAH :</th>
          <td><?= "$kuliah" ?></td>
        </tr>
      </tbody>
  </table>
@endsection
