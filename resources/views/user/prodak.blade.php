@extends('layouts.user')
@section('konten') 
    <div id="services" class="section lb">
        <div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h3>Produk NGAROT</h3>
						<div class="row">


<!-- <div id="item_div">
@foreach($data as $datas)
  <div class="items" id="item1">
    <img src="{{asset('/Foto/produk')}}/{{$datas->gambar}}">
    <input type="button" value="Add To CART" onclick="cart('item1')">
    <p>{{$datas->nama_produk}}</p>
    <p>Harga: {{$datas->harga}}</p>
    <input type="hidden" id="item1_name" value="Simple Navy Blue T-Shirt">
    <input type="hidden" id="item1_price" value="$95">
  </div>
  @endforeach
</div> -->
<?php $i=1 ?>
@foreach($data as $datas)
    <div class="col-md  ">
      <div class="card items" style="width: 22rem;">
      <input type="button" value="Add To CART" onclick="cart('item{{$i}}')">
        <img id="img" src="{{asset('/Foto/produk')}}/{{$datas->gambar}}" class="card-img-top" alt="...">
        <p>
        	{{$datas->nama_produk}} <br>
        	{{$datas->harga}} <br>
            {{$datas->pembuat}}
		</p>
        <input type="hidden" id="item{{$i}}_name" value="{{$datas->nama_produk}}">
        <input type="hidden" id="item{{$i}}_id" value="{{$datas->id_produk}}">
        <input type="hidden" id="item{{$i}}_price" value="{{$datas->harga}}">
      </div>
    </div>
    <?php $i++; ?>
@endforeach
                </div><!-- end title -->
            </div>
        </div>
    </div>
</div>
@endsection