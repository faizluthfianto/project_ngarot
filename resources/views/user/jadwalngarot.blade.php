@extends('layouts.user')
@section('konten') 
<div class="all-page-title" style="background-image:url(user/images/pattern-4.png);">
		<!--Page -->
        
        <!--End Page-->
        <div class="container text-center">
            <h1 id="h">Hitung Mundur Ngarot Lelea</h1>
			<div class="countdown" id="c" style="margin-left:310px">
				<div id="hari">NA</div>
				<div id="jam">NA</div>
				<div id="menit">NA</div>
				<div id="detik">NA</div>
			</div>
        </div>

</div>
    <div id="services" class="section lb">
        <div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<!-- <h3>SEJARAH NGAROT</h3> -->
					
						
						<!-- <p><?php echo strip_tags($data->tgl_selesai); ?></p>
						<p><?php echo strip_tags($data->waktu); ?></p> -->
					</div><!-- end title -->
				</div>
			</div>
		</div>
	</div>
@endsection
@section('js')
<script type="text/javascript">

var countDate = new Date("<?php echo $data->tgl_mulai ?>").getTime();
var countDate1 = new Date("<?php echo $data->tgl_berakhir ?>").getTime();

	
function newYear(){
	// const tomorrow = new Date("<?php echo $data->tgl_berakhir ?>").getTime();
	var now = new Date().getTime();
	// gap2 = tomorrow.setDate(tomorrow + 1);
	// console.log(gap2);
	gap = countDate - now;
	gap1 = countDate1 - now;

	console.log(gap1);

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
		document.getElementById("h").innerHTML = "Ngarot Lelea telah dibuka";
		document.getElementById("c").remove();
	}

	if(gap1 < 0){
		document.getElementById("h").innerHTML = "Comming Soon";
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