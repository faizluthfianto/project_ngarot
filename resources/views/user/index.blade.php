@extends('layouts.user')
@section('konten')
    <div id="slider" class="sl-slider-wrapper">

		<div class="sl-slider">
		
			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-1"></div>
					<h2>TRADISI ADAT NGAROT DESA LELEA INDRAMAYU</h2>
				</div>
			</div>
			
			<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-2"></div>
					<h2>TRADISI ADAT NGAROT DESA LELEA INDRAMAYU</h2>
				</div>
			</div>
			
			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-3"></div>
					<h2>TRADISI ADAT NGAROT DESA LELEA INDRAMAYU</h2>
				</div>
			</div>
			
			<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-4"></div>
					<h2>TRADISI ADAT NGAROT DESA LELEA INDRAMAYU</h2>
				</div>
			</div>
		</div><!-- /sl-slider -->

		<nav id="nav-dots" class="nav-dots">
			<span class="nav-dot-current"></span>
			<span></span>
			<span></span>
			<span></span>
		</nav>

	</div><!-- /slider-wrapper -->


    <div id="services" class="section lb">
        <div class="container-fluid">
			<div class="container">
				<div class="section-title text-center">
					<h3>Terkini Dari Adat Ngarot Lelea</h3>
					<p class="lead">informasi terbaru tentang tradisi adat ngarot desa lelea indramayu.</p>
				</div><!-- end title -->
			</div>
            <div class="row text-center">
				<div class="owl-services-seo owl-carousel owl-theme">
					<div class="text-center">
						<div class="service-widget">
							<div class="post-media wow fadeIn">
								<img src="images/ronaldo.jpg" alt="" class="img-fluid img-rounded">
							</div>
							<h3>PEDAGANG</h3>
							<p>Sudah banyak pedagang yang datang ke desa lelea untuk mengisi kemeriahan adat ngarot lelea.</p>
						</div><!-- end service -->
					</div><!-- end col -->

					<div class="text-center">
						<div class="service-widget">
							<div class="post-media wow fadeIn">
								<img src="images/seo_02.png" alt="" class="img-fluid img-rounded">
							</div>
							<h3>Gadis Ngarot dan Bujang Ngarot</h3>
							<p>sudah banyak dari peserta adat ngarot yang sedang mencari perlengkapan adat ngarot. mulai dari baju, bunga, dan lain lain. </p>
						</div><!-- end service -->
					</div><!-- end col -->

					<div class="text-center">
						<div class="service-widget">
							<div class="post-media wow fadeIn">
								<img src="images/seo_03.png" alt="" class="img-fluid img-rounded">
							</div>
							<h3>Balai Desa lelea</h3>
							<p>satu minggu sebelum acara ngarot, balai desa lelea sudah di renovasi sesuai tradisi adat ngarot.</p>
						</div><!-- end service -->
					</div><!-- end col -->
					
					<div class="text-center">
						<div class="service-widget">
							<div class="post-media wow fadeIn">
								<img src="images/seo_04.png" alt="" class="img-fluid img-rounded">
							</div>
							<h3>Website Development</h3>
							<p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
						</div><!-- end service -->
					</div><!-- end col -->

					<div class="text-center">
						<div class="service-widget">
							<div class="post-media wow fadeIn">
								<img src="images/seo_05.png" alt="" class="img-fluid img-rounded">
							</div>
							<h3>Reporting</h3>
							<p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
						</div><!-- end service -->
					</div><!-- end col -->

					<div class="text-center">
						<div class="service-widget">
							<div class="post-media wow fadeIn">
								<img src="images/seo_06.png" alt="" class="img-fluid img-rounded">
							</div>
							<h3>Social Media Marketing</h3>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis accumsan.</p>
						</div><!-- end service -->
					</div><!-- end col -->
				</div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    
    
    <div id="testimonials" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Panitia pelaksanaan</h3>
                <p class="lead">Orang-Orang yang ikut andil dalam pelaksanaan adat ngarot lelea yag dilaksanakan setiap tahun nya!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
					@foreach($data as $datas)
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="{{asset('Foto/panitia/').'/'.$datas->foto}}" alt="" class="">
                                <h4>{{$datas->nama}}</h4>
                            </div>
							<!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i>{{$datas->jabatan}}<i class="fa fa-quote-right"></i></h3>
                                <p>{{$datas->deskripsi}}</p>
                            </div>
                        </div>
                        <!-- end testimonial -->
@endforeach
                      
                        
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

@endsection