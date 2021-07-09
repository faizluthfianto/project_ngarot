<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="csrf-token" content="{{ csrf_token() }}">  
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>ADAT NGAROT LELEA</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('user/style.css')}}">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/versions.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/custom.css')}}">
<style>
  .pending{
            position: absolute;
            left: 15px;
            top: 15px;
            background: #ec4138;
            margin: 0;
            border-radius: 30%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            padding-left: 5px;
            color: #ffffff;
            font-size: 12px;
        }

#mycart
{
	display:none;
	background-color:white;
	width:800px;
	margin-left:100px;
}
#mycart .cart_items
{
	border-bottom:1px dashed silver;
	padding:20px;
	padding-left:10px;
}
#mycart .cart_items img
{
	width:70px;
	height:50px;
	float:left;
}
#mycart .cart_items p
{
	margin:0px;
	font-size:17px;
	color:green;
}
h1
{
	margin-top:100px;
	color:green;
	text-align:center;
}
#item_div
{
	float:left;
	margin-left:170px;
}

.items:hover input[type="button"]
{
	display:block;
}
.items input[type="button"]
{
	display:none;
	background:none;
	background-color:#3ADF00;
	width:300px;
	height:50px;
	border:none;
	font-size:20px;
	color:white;
	position:absolute;
	top:150px;
	left:25px;
	cursor:pointer;
}

ul.dropdown-cart{
    min-width:250px;
    border: 2px solid #343434;
    padding: 2px;
    margin: 7px;
    margin-top: 11px;
	max-height: 250px;
	overflow-x: hidden;
	overflow-y: scroll;
}
ul.dropdown-cart li .item{
    display:block;
    padding:3px 10px;
    margin: 3px 0;
    
}
ul.dropdown-cart li .item:hover{
    background-color:#c3c5c5;
    
}
ul.dropdown-cart li .item:after{
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
}

ul.dropdown-cart li .item-left{
    float:left;
}
ul.dropdown-cart li .item-left img,
ul.dropdown-cart li .item-left span.item-info{
    float:left;
}
ul.dropdown-cart li .item-left span.item-info{
    margin-left:10px;   
}
ul.dropdown-cart li .item-left span.item-info span{
    display:block;
}
ul.dropdown-cart li .item-right{
    float:right;
}
ul.dropdown-cart li .item-right button{
    margin-top:14px;
	margin-left:40px;
}   

</style>
	
	<script src="{{ asset('user/js/modernizr.custom.79639.js')}}"></script>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script type="text/javascript">

$(function lep(){
	// $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });

  $.ajax({
	type:'POST',
	url:'/itemproduk',
	headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
	data:{
	  total_cart_items:"totalitems"
	},
	success:function(response) {
		// console.log(response);
		$('#total_items').html('<div>' + response + '</div');
	//   document.getElementById("total_items").value=response;
	}
  }).then(function(){
    setTimeout(lep, 1000)
	
});
  
});


    

function cart(id)
{
  var ele=document.getElementById(id);
  console.log(id);
  var img_src=$('#img').attr("src");
  var name=document.getElementById(id+"_name").value;
  var id_produk=document.getElementById(id+"_id").value;
  var price=document.getElementById(id+"_price").value;
  

//   console.log(name);

  $.ajax({

	type:'POST',
	url:'/itemproduk',
	headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
	data:{
	//   "_token": "{{ csrf_token() }}",
	  id_item:id_produk,
	  item_src:img_src,
	  item_name:name,
	  item_price:price
	},
	success:function(response) {
		// console.log(response);
		$('#total_items').html('<div>' + response + '</div');
	//   document.getElementById("total_items").value=response;
	}
  });

}

function show_cart()
{
  $.ajax({
  type:'post',
  url:'/itemproduk',
  headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
  data:{
	showcart:"cart"
  },
  success:function(response) {
	//   console.log(response);
	document.getElementById("list").innerHTML=response;
	// $("#mycart").slideToggle();
  }
 });

}


// function hapus_cart(id, e)
// {
//   var i=document.getElementById(id);
// //   var coba=$('.pp').attr("id");
//   var o = document.getElementById(id+"_id").value;

//   console.log(o);

//   $.ajax({

// 	type:'POST',
// 	url:'/itemproduk',
// 	headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             },
// 	data:{
// 	//   "_token": "{{ csrf_token() }}",
// 	  hapuscart:"hapus",
// 	  id_cart:coba
// 	},
// 	success:function(response) {
		
// 		e.preventDefault(); $('#remove'+coba).parent('li').remove();
// 		$('#hapus'+coba).parent('tr').remove();
// 		// $('#total_items').html('<div>' + response + '</div');
// 	//   document.getElementById("total_items").value=response;
// 	}
//   });

// }


$(document).on('click', '.hapus_cart', function(e){
//   var product_id = $(this).attr("id");
  var coba=$(this).attr("id");
//   console.log(coba);
//   var action = 'remove';
  $.ajax({

	type:'POST',
	url:'/itemproduk',
	headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
	data:{
	//   "_token": "{{ csrf_token() }}",
	hapuscart:"hapus",
	id_cart:coba
	},
	success:function(response) {

		
		
		window.location.reload();
		// e.preventDefault(); $('#remove'+coba).parent('li').remove();
		// $('#hapus'+coba).parent('tr').remove();
		// console.log(response.length);
		// for( var i = 0; i < response.length; i++){ 
		// 	var u = $("#id_item"+i).val();
		// 	if ( response[i] === u) { 

		// 		response.splice(i, 1); 
		// 	}

		// }
		// $('#data').val(response);
		// $(window).on('load', function(){
		// 	y = $('.hapus_cart').attr('id');
		// 	while (response.indexOf(y) !== -1) {
		// 	response.splice(response.indexOf(y), 1);
		// 	}
		
		// });
		
		
		// console.log(response)
		// var j = coba;
        // delete response[coba];
		// $('#total_items').html('<div>' + response + '</div');
	//   document.getElementById("total_items").value=response;
	}
  }).then(function(){
    setTimeout(this, 1000)
	
});
 });
</script>

@yield('js')
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="seo_version">

	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-wrapper">
			<div class="loader-new">
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
			</div>
			<div class="text">LOADING...</div>
		</div>
	</div>
	<!-- END LOADER -->

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<!-- <img src="images/logo-seo.png" alt="" /> -->
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-seo" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-seo">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="{{url('')}}/">Terkini</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Profil Ngarot </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{url('')}}/sejarahngarot">Sejarah Ngarot</a>
								<a class="dropdown-item" href="{{url('')}}/syaratngarot">Persyaratan Ngarot</a>
								<a class="dropdown-item" href="{{url('')}}/jadwalngarot">Jadwal Ngarot</a>
								<a class="dropdown-item" href="{{url('')}}/daftarngarot">Daftar Ngarot</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Profil Desa Ngarot </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{url('')}}/sejarahdesa">Sejarah Desa Lelea</a>
								<a class="dropdown-item" href="{{url('')}}/alattradisional">Alat Tradisional</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Peserta Ngarot </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{url('')}}/gadisngarot">Gadis Ngarot</a>
								<a class="dropdown-item" href="{{url('')}}/bujangngarot">Bujang Ngarot</a>
							</div>
						</li>
						<!-- <li class="nav-item"><a class="nav-link" href="../nyobaloginadmin/produk.php">Produk</a></li> -->
						<li class="nav-item"><a class="nav-link" href="{{url('')}}/prodak">Produk</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="#" onclick="show_cart();"   data-toggle="dropdown"><i class="fa fa-shopping-cart"></i><span class="pending" id="total_items" style="margin-left:20px"></span></a>
							<!-- <div class="dropdown-menu" aria-labelledby="dropdown-a"> -->
							<ul class='dropdown-menu dropdown-cart'  role='menu'>
							<div id="list"></div>
							<li class='dropdown-divider'></li><li><a class='text-xs-center' href="{{url('')}}/cart">View Cart</a></li>
							</ul>
								<!-- <a class="dropdown-item" href="{{url('')}}/gadisngarot">Gadis Ngarot</a>
								<a class="dropdown-item" href="{{url('')}}/bujangngarot">Bujang Ngarot</a> -->
							<!-- </div> -->
						</li>
						
						<li class="nav-item"><a class="nav-link" href="{{url('')}}/login">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
    
    @yield('konten')

	
	<footer class="footer">
        <div class="container">
            <div class="row">
                
				
				

                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="widget clearfix">
						<div class="widget-title">
							<h3>Alamat</h3>
						</div>
						<p>Desa Lelea blok Lelea Rt 01 Rw 01 kecamatan lelea kabupaten indaramyu jawabarat indonesia.</p>
						
						
                        <div class="widget-title">
                            <h3>Social</h3>
                        </div>
                        <ul class="footer-links social-md">
                            <li><a class="fb btn-a" title="Facebook" data-tippy-animation="scale" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="gi btn-a" title="Github" data-tippy-animation="scale" href="#"><i class="fa fa-github"></i> </a></li>
                            <li><a class="tw btn-a" title="Twitter" data-tippy-animation="scale" href="#"><i class="fa fa-twitter"></i> </a></li>
                            <li><a class="dr btn-a" title="Dribbble" data-tippy-animation="scale" href="#"><i class="fa fa-dribbble"></i> </a></li>
                            <li><a class="pi btn-a" title="Pinterest" data-tippy-animation="scale" href="#"><i class="fa fa-pinterest"></i> </a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
				<div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">adatngarotlelea@gmail.com</a></li>
                            <li><a href="#">www.adatngarotlelea.com</a></li>
                            <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                            <li>+61 3 8376 6284</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->
	
    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">Sistem Informasi dan Management Adat Ngarot Desa Lelea Indramayu</p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('user/js/all.js')}}"></script>
    <!-- ALL PLUGINS -->
	<script src="{{ asset('user/js/tippy.all.min.js')}}"></script>
    <script src="{{ asset('user/js/custom.js')}}"></script>
	
	<script src="{{ asset('user/js/jquery.ba-cond.min.js')}}"></script>
	<script src="{{ asset('user/js/jquery.slitslider.js')}}"></script>
	<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();
			
			});
		</script>
		
		<script>
			tippy('.btn-a')
		</script>



</body>
</html>