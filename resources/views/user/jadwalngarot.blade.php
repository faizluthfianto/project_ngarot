@extends('layouts.user')
@section('konten') 
<div class="all-page-title" style="background-image:url(user/images/pattern-4.png);">
		<!--Page -->
        
        <!--End Page-->
        <div class="container text-center">
            <h1>JADWAL NGAROT</h1>
        </div>
    </div><!-- end section -->

    <div id="services" class="section lb">
        <div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<!-- <h3>SEJARAH NGAROT</h3> -->
						<p>{{$data->tanggal_mulai}}</p>
						<!-- <p><?php echo strip_tags($data->tanggal_selesai); ?></p>
						<p><?php echo strip_tags($data->waktu); ?></p> -->
					</div><!-- end title -->
				</div>
			</div>
		</div>
	</div>
@endsection