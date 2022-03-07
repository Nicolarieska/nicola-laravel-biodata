@extends('layouts.main')

@section('content')
<section id= "contact" class="contact mb-5">
    <div class = "container">
        <div class ="row mb-4 pt-4">
          <div class = "col text-center">
            <h2> TINGGALKAN PESAN ANDA UNTUK WEB INI :) </h2>
         </div>
        </div>
      
        <div class ="row justify-content-center">
          <div class = "col-lg-4 ">
            <div class="card text-white bg-success mb-3 text-center">
              <div class="card-body">
                <h5 class="card-title">CONTACT US</h5>
              </div>
            </div>
    
              <ul class="list-group">
                <li class="list-group-item"><h1>Address</h1></li>
                <li class="list-group-item"><?= "$perumahan" ?></li>
                <li class="list-group-item"><?= "$kelurahan", ", $kecamatan" ?></li>
                <li class="list-group-item"><?= "$kota", ", $kodepos" ?></li>
                <li class="list-group-item"><?= "$provinsi", ", $negara" ?></li>
              </ul>
    
        </div>
          <div class = "col-lg-4 ">
            <form>
              <div class="form-group">
                <label for="nama">NAMA      : </label>
                <input type="text" class="form-control" id="nama" placeholder="Silahkan isi nama anda">
              </div>
              <br>
              <div class="form-group">
                <label for="email">EMAIL    : </label>
                <input type="text" class="form-control" id="email" placeholder="Silahkan isi email anda">
              </div>
              <br>
              <div class="form-group">
                <label for="telepon">NO TELEPON  : </label>
                <input type="text" class="form-control" id="telepon" placeholder="Silahkan isi nomor telepon anda">
              <br>
              <div class="form-group">
                <label for="pesan">KOMENTAR   : </label>
                <textarea name="pesan" id="pesan" class = "form-control" placeholder="Silahkan isi komentar anda untuk saya"></textarea>
              </div>
              </div>
              <br>
           <div class="form-group">
            <button type = "button" class= "btn btn-success">Kirim Pesan</button>
          </form>
      </div>
    </div>
    </section>
@endsection
