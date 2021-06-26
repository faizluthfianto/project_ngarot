@extends('layouts.user')
@section('konten') 
<div class="all-page-title" style="background-image:url(user/images/pattern-4.png);">
		<!--Page -->
        
        <!--End Page-->
        <div class="container text-center">
            <h1>DAFTAR NGAROT</h1>
        </div>
    </div><!-- end section -->

    <form action="/action_page.php" style="margin: 50px">
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="nama" class="form-control" id="nama">
  </div>
  <div class="form-group">
    <label for="password">Kata sandi:</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="form-group">
    <label for="ttl">Tempat Tanggal Lahir</label>
    <input type="ttl" class="form-control" id="ttl">
  </div>
  <div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <input type="jenis_kelamin" class="form-control" id="jenis_kelamin">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat Sesuai KTP:</label>
    <input type="alamat" class="form-control" id="alamat">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection