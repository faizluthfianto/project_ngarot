@extends('layouts.peserta')
@section('title')
<title>Peserta</title>
@endsection
@section('conten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Peserta</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                <div style="display:none;" id="j">
                    <H4 class="text-center">Comming Soon</H4>
                </div>
                <div class="container text-center" id="h" style="display:block;">
                    <h4>Hitung Mundur Pendaftaran</h4>
                    <div class="countdown" style="margin-left:150px">
                        <div id="hari">NA</div>
                        <div id="jam">NA</div>
                        <div id="menit">NA</div>
                        <div id="detik">NA</div>
                    </div>
                </div>
                <div style="display:none;" id="c"> 
                    @if(Session::has('gagal'))
                    <div class="alert alert-warning ml-3">
                        <div class="container">
                        <div class="alert-icon">
                            <i class="fa fa-exclamation"> Peringatan</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="fa fa-times"></i></span>
                        </button>
                        
                        {{ Session::get('gagal') }}
                        
                        </div>
                    </div>
                    @endif
                    @if($data->peserta == 0)
                    <a href="{{url('/daftar')}}" class="btn btn-block btn-outline-primary btn-lg" onclick="return confirm('Apakah anda yakin ?');">Daftar Peserta</a>
                    @else
                    <h1 style="text-align:center;">Anda Sudah Terdaftar</h1>
                    @endif
                </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </section>
   
</div>
@endsection
@section('script')
<script type="text/javascript">

var countDate = new Date("<?php echo $date->tgl_daftar ?>").getTime();
var countDate1 = new Date("<?php echo $date->tgl_selesai ?>").getTime();

	
function newYear(){
	const t = new Date("<?php echo $date->tgl_daftar ?>");
	gap2 = t.setDate(t.getDate() - 3);
	var now = new Date().getTime();
    if(now < gap2){
        document.getElementById("c").style.display = "none";
        document.getElementById("h").style.display = "none";
        document.getElementById("j").style.display = "block";
    }
	// console.log(gap2);
	gap = countDate - now;
	gap1 = countDate1 - now;

	// console.log(gap1);

	var detik = 1000;
	var menit = detik * 60;
	var jam = menit * 60;
	var hari = jam * 24;

	var h = Math.floor(gap / (hari));
	var j = Math.floor( (gap % (hari)) / (jam) );
	var m = Math.floor( (gap % (jam))  / (menit) );
	var d = Math.floor( (gap % (menit))  / (detik) );

	document.getElementById('hari').innerText = h;
	document.getElementById('jam').innerText = j;
	document.getElementById('menit').innerText = m;
	document.getElementById('detik').innerText = d;

	if(gap < 0 ){
		document.getElementById("h").style.display = "none";
		document.getElementById("c").style.display = "block";
	}

	if(gap1 < 0){
		// document.getElementById("h").innerHTML = "Comming Soon";
        document.getElementById("c").style.display = "none";
        document.getElementById("h").style.display = "none";
        document.getElementById("j").style.display = "block";
	}

	// elseif(gap2 < 0){
	// 	document.getElementById("h").innerHTML = "Comming Soon";
	// }
}

setInterval( function(){
	newYear();
}, 1000);

</script>
@endsection