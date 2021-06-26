@extends('layouts.admin')
@section('title')
<title>Produk | Ngarot</title>
@endsection
@section('conten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Produk</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addproduk"><i class="fas fa-plus"></i>Tambah produk</button>

                            <br><br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Produk</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        <th>Pembuat</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                    $n=1;
                ?>
                                    @foreach ($data as $datas)
                                    <tr>
                                        <td>{{$n++}}</td>
                                        <td>{{$datas->nama_produk}}</td>
                                        <td>{{$datas->harga}}</td>
                                        <td>{{$datas->deskripsi}}</td>
                                        <td>{{$datas->pembuat}}</td>
                                        <td>{{$datas->gambar}}</td>
                                        <td>
                                            <a class="btn btn-danger"
                                                href="{{url('/hapusproduk',['id' => $datas->id_produk ])}}"><i
                                                    class="fas fa-trash"></i></a>
                                            <a class="btn btn-primary" style="color: white" data-toggle="modal"
                                                data-target="#editproduk{{$datas->id_produk}}"><i
                                                    class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="editproduk{{$datas->id_produk}}" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h4 class="modal-title w-100 font-weight-bold">Edit Produk</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body mx-3">
                                                    @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                    <form action="{{url('/editproduk')}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id_produk" value="{{$datas->id_produk}}">
                                                        <div class="form-group">
                                                            <label for="nama">Nama Produk </label>
                                                            <input type="text" name="nama_produk" class="form-control"
                                                                id="nama" value="{{$datas->nama_produk}}"
                                                                placeholder="Nama Produk">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ket">Deskripsi</label>
                                                            <textarea class="form-control textarea" name="deskripsi" id="ket"
                                                                rows="5">{{$datas->deskripsi}}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="harga">Harga </label>
                                                            <input type="text" name="harga" class="form-control"
                                                                id="harga" value="{{$datas->harga}}"
                                                                placeholder="Harga">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pembuat">Pembuat </label>
                                                            <input type="text" name="pembuat" class="form-control"
                                                                id="pembuat" value="{{$datas->pembuat}}"
                                                                placeholder="Pembuat">
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
                                                            <br>
                                                            <img src="{{url('')}}/Foto/produk/{{$datas->gambar}}" class="img-fluid" width="50 px"
                                                                height="50 px">
                                                        </div>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <button class="btn btn-primary" name="submit"
                                                        type="submit">Simpan</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" id="addproduk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Tambah Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{url('/addproduk')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Produk </label>
                        <input type="text" name="nama_produk" class="form-control"
                            id="nama" value=""
                            placeholder="Nama Produk">
                    </div>
                    <div class="form-group">
                        <label for="ket">Deskripsi</label>
                        <textarea class="form-control textarea" name="deskripsi" id="ket"
                            rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga </label>
                        <input type="text" name="harga" class="form-control"
                            id="harga" value=""
                            placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <label for="pembuat">Pembuat </label>
                        <input type="text" name="pembuat" class="form-control"
                            id="pembuat" value=""
                            placeholder="pembuat">
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
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-primary" name="submit" type="submit">Simpan</button>
            </div>
        </div>
        </form>
    </div>
</div>


@endsection
