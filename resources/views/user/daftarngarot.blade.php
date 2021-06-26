@extends('layouts.user')
@section('konten') 
<div class="all-page-title" style="background-image:url(user/images/pattern-4.png);">
		<!--Page -->
        
        <!--End Page-->
        <div class="container text-center">
            <h1>DAFTAR NGAROT</h1>
        </div>
    </div><!-- end section -->

    <form action="{{url('daftarpeserta')}}" method="POST" enctype="multipart/form-data" style="margin: 50px">
    @csrf
    <input type="hidden" name="level" value="peserta">
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" class="form-control" id="nama">
  </div>
  <div class="form-group">
    <label for="email">E-mail :</label>
    <input type="text" name="email" class="form-control" id="nama">
  </div>
  <div class="form-group">
    <label for="password">Kata sandi:</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <div class="form-group">
    <label for="ttl">Tempat Tanggal Lahir</label>
    <input type="text" name="ttl" class="form-control" id="ttl">
  </div>
  <div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <input type="text" name="jk" class="form-control" id="jenis_kelamin">
  </div>
  <div class="form-group">
    <label for="nohp">No Hp :</label>
    <input type="text" name="nohp" class="form-control" id="nohp">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat Sesuai KTP:</label>
    <input type="text" name="alamat" class="form-control" id="alamat">
  </div>
  <div class="form-group">
      <label for="exampleInputFile">Gambar</label>
      <div class="input-group">
          <div class="custom-file">
              <input type="file" name="gambar" class="custom-file-input"
                  id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
      </div>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection