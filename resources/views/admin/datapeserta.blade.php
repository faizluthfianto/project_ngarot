@extends('layouts.admin')
@section('title')
<title>Peserta | Ngarot</title>
@endsection
@section('conten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Peserta</h1>
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
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>E-mail</th>
                                        <th>TTL</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No Hp</th>
                                        <th>Foto</th>
                                        <th>Status</th>
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
                                        <td>{{$datas->nama}}</td>
                                        <td>{{$datas->email}}</td>
                                        <td>{{$datas->ttl}}</td>
                                        <td>{{$datas->jenis_kelamin}}</td>
                                        <td>{{$datas->nohp}}</td>
                                        <td>{{$datas->gambar}}</td>
                                        <td>
                                        @if($datas->status == 1)
                                        <span class="badge badge-success">Aktif</span></td>
                                        @else
                                        <span class="badge badge-danger">Pending</span></td>
                                        @endif
                                        <td>
                                            <a class="btn btn-danger"
                                                href="{{url('/hapususer',['id' => $datas->id_user ])}}"><i
                                                    class="fas fa-trash"></i></a>
                                            @if($datas->status == 0)
                                            <a class="btn btn-primary"
                                                href="{{url('/status_acc',['id' => $datas->id_user ])}}"><i class="fas fa-check"></i></a>
                                            @else
                                            <a class="btn btn-danger"
                                                href="{{url('/status_acc',['id' => $datas->id_user ])}}"><i class="fas fa-times"></i></a>
                                            @endif
                                        </td>
                                    </tr>
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



@endsection
