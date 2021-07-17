@extends('layouts.admin')
@section('title')
<title>Jadwal | Ngarot</title>
@endsection
@section('conten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Penjadwalan Ngarot</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row ">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                       <form action="{{url('set_jadwal')}}" method="POST">
                           @csrf
                           <div class="card-body">
                           <div class="form-group">
                            <label>Jadwal Ngarot</label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="tgl" class="form-control float-right" id="reservation">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                            <label>Jadwal Pendaftaran</label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="tgl1" class="form-control float-right" id="reservation1">
                                </div>
                                <!-- /.input group -->
                            </div>
                            
                            <button type="submit">coba</button>
                       </form>
                        <!-- /.card-header -->
                           </div>

                        <!-- form start -->
                      
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
<script>
$(function() {
  $('#reservation').daterangepicker({
    timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'YYYY-MM-DD hh:mmA'
      }
  });
  $('#reservation1').daterangepicker({
    timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'YYYY-MM-DD hh:mmA'
      }
  });
});
</script>
@endsection
