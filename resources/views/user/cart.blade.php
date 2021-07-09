@extends('layouts.user')
@section('konten') 

       

<div class="container mb-4">
    <div class="row">
        @if(!$data)
        <h1 style="margin-left:auto; margin-right:auto;">tidak ada produk</h1>
        @else
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Produk</th>

                            <th scope="col" class="text-center">Qty</th>
                            <th scope="col" class="text-right">Harga</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody id="div1">
                    <?php $i =0;?>
                    @foreach($data as $key => $val)
                        <tr>
                            <td id="hapus{{$val['product_id']}}"><img src="{{$val['product_src']}}" width="50px" height="50px" /> </td>
                            <td>{{$val['product_name']}}</td>
                            
                            <td>
                                <input class="form-control qq" id="id_item{{$i}}" type="hidden" value="{{$val['product_id']}}" />
                                <input class="form-control" id="data" type="hidden"  />
                                <input class="form-control qty" id="{{$i}}" type="text" value="1" />
                            </td>
                            
                            <td class="text-right">{{$val['product_price']}}</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger hapus_cart" id="{{$val['product_id']}}"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                       
                        <tr>
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong id="total">0</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light">Continue Shopping</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
@section('js')
<script>
$('document').ready(function(){
    var data = <?php print_r (json_encode($_SESSION['shopping_cart'])); ?>
    // $('.hapus_cart').on('click',function(){
        // y = $('.hapus_cart').attr('id');
        // while (data.indexOf(y) !== -1) {
        // data.splice(data.indexOf(y), 1);
        // }
    // });
    
  $('.qty').on('keyup',function() {
        
        // var data = $('#data').val();
        var total = 0;
        console.log(data);
        for (var i=0; i < Object.keys(data).length; i++) {
            var u = $("#id_item"+i).val();
          
            var qty = $('#'+i).val();
            // console.log(data[u]['product_price']);
            total = total + (qty * data[u]['product_price']);
            // isi += `<option value='`+data['rajaongkir']['results'][i]['province_id']+`'>`+data['rajaongkir']['results'][i]['province']+`</option>`;
        } 
        $('#total').html("<p>"+ total +"</p>");
//     // foreach()
//     // console.log(p[3]['product_price']);
//     // t= JSON.stringify(ti);
//     // t.toString();
//     // String k = t.toString();
//     // String[] y = k.split(",");
//     // var total =0;
    
//     // var filtered = Object.values(p).filter(function (el) {
//     //     return el != null;
//     // });
//     // console.log(p);
//     // var k = Object.keys(p).length;
//     var i =0;
//     var total = 0;
//     console.log(p);
 
//     $.each(p, function(m, v) {
//         // $.each(JSON.parse(m), function(b, z){
//             i++;
//             var u = $("#id_item"+i).val();
//             // console.log(v);
//             var qty = $('#'+i).val();
//             total = total + (qty * p[u]['product_price']);
//         // });
//     });
//     // for(i; i < k; i++){
//     //     // p.splice(i,1);
        
//     //     var u = $("#id_item"+i).val();
//     //     var qty = $('#'+i).val();
//     //     total = total + (qty * p[u]['product_price']);
//     //     // delete p[u];
//     //     // console.log(u);
//     //     // console.log(i);
//     // }
//     // var c = total;

// 	// // [p].forEach((cc) => {
//     // //     ++i;
//     // //     console.log(i);
//     // //     var u = $("#id_item"+i).val();
//     // //     console.log(u);
// 	// // 	var qty = $('#'+i).val();

//     // //     // console.log()
// 	// // 	// total = total + (qty * cc.i.product_price);
// 	// // });
	// console.log(total);
	
  });
// //   location.reload();
// //   var loadUrl = "{{url('/cart')}}";
// //   $("#div1").load(loadUrl);
// //   setTimeout(() => {
//     // $("#div1").load("#div1");
//     //   $('.qq').attr("id");
//     //   $('.qq').val();
//     //   $('.qty').attr();
// //   }, 1000);
});
</script>
@endsection