<?php

namespace App\Http\Controllers;
use App\M_panitia;
use App\M_sejarah;
use App\M_jadwal;
use App\M_user;
use App\M_produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $data = M_panitia::all();
        return view ('user.index',compact('data'));
    }

    public function viewsejarah(){
        $data = M_sejarah::where('id_sejarah',1)->first();
        return view ('user.sejarahngarot', compact('data'));
    }

    public function viewsyarat(){
        $data = M_sejarah::where('id_sejarah',3)->first();
        return view ('user.syaratngarot', compact('data'));
    }

    public function viewjadwal(){
        $data = M_jadwal::where('id_jadwal',1)->first();
        // dd($data);
        return view ('user.jadwalngarot',compact('data'));
    }

    public function viewdaftar(){
        return view ('user.daftarngarot');
    }

    public function viewsjdesa(){
        return view ('user.sejarahdesa');
    }

    public function viewalat(){
        return view ('user.alat');
    }

    public function viewgadis(){
        return view ('user.gadisngarot');
    }

    public function viewbujang(){
        return view ('user.bujangngarot');
    }

    public function daftar_peserta(Request $request){
        $data = new M_user;
        $data->nama = $request->nama;
        $data->level = $request->level;
        $data->email = $request->email;
        $data->ttl = $request->ttl;
        $data->jenis_kelamin = $request->jk;
        $data->password =bcrypt($request->password);
        $data->nohp = $request->nohp;
        $data->status = 0;
        $data->alamat = $request->alamat;
        if($request->hasFile('gambar')) {
            // File::delete('Foto/'. $data->image);
            $image = $request->file('gambar');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('Foto'), $filename);
            $data->gambar = $request->file('gambar')->getClientOriginalName();
        }
        $data->save();
        return redirect('/');
    }

    public function prodak(){
        $data = M_produk::orderBy('id_produk')->get();
        return view('user.prodak',compact('data'));
    }

    public function item_produk(Request $request){
        session_start();
        // $i = 0;
        // $x = 0;
        // dd($_SESSION['name']);
    if(isset($_POST['total_cart_items']))
    {
        // dd($_SESSION['shopping_cart']);
        if(isset($_SESSION['shopping_cart'])){
            echo count($_SESSION['shopping_cart']);
        }else{
            echo 0;
        }
        exit();
    }

    if(isset($_POST['item_src']))
    {
    $product_id[] = $_POST["id_item"];
    $product_name[] = $_POST["item_name"];
    $product_price[] = $_POST["item_price"];
    $product_src[] = $_POST['item_src'];
    for($i = 0; $i <count($product_id); $i++)
    {
    //     $cart_product_id = array_keys($_SESSION["shopping_cart"]);
        // in_array($product_id[$count], $cart_product_id);
        // if(in_array($product_id[$i], $cart_product_id)){
        //     $_SESSION["shopping_cart"][$product_id[$i]]['product_quantity']++;
        // }
        // else
        // {
        $item_array = array(
            'product_id'               =>     $product_id[$i],  
            'product_name'             =>     $product_name[$i],
            'product_price'            =>     $product_price[$i],
            'product_src'              =>     $product_src[$i]
            // 'product_quantity'         =>     1
        );
        $_SESSION["shopping_cart"][$product_id[$i]] = $item_array;
    }


        // $_SESSION['id_item'][]=$_POST['id_item'];
        // $_SESSION['name'][]=$_POST['item_name'];
        // $_SESSION['price'][]=$_POST['item_price'];
        // $_SESSION['src'][]=$_POST['item_src'];
        // echo count($_SESSION['name']);
        echo count($_SESSION['shopping_cart']);
        exit();
    }

    if(isset($_POST['showcart']))
    {
        foreach($_SESSION['shopping_cart'] as $key => $val){
            $data= "id".$val['product_id']."";
            echo "<li ><span class='item' id='remove".$val['product_id']."'><span class='item-left'><img src='".$val['product_src']."' alt='' width='50px' height='50px'/> <span class='item-info'><span>".$val['product_name']."</span><span>".$val['product_price']."</span></span><span class='item-right'><input type='button' class='btn btn-danger hapus_cart' value='Hapus' id='". $val["product_id"]."'></span></span> </li>";
        }
        // for($i;$i<count($_SESSION['name']);$i++)
        // {
        // echo "<li ><span class='item' id='remove'".$i."''><span class='item-left'><img src='".$_SESSION['src'][$i]."' alt='' width='50px' height='50px'/> <span class='item-info'><span>".$_SESSION['name'][$i]."</span><span>".$_SESSION['price'][$i]."</span></span><span class='item-right'><input type='button' class='btn btn-danger pp' value='Hapus' id='".$_SESSION['id_item'][$i]."' onclick='hapus_cart(".$_SESSION['id_item'][$i].", event)'></span></span> </li>";
        // }
        // die;
        exit();	
    }

    if(isset($_POST['hapuscart']))
    {   
        
        // dd($_POST["id_cart"]);
        // echo $_SESSION['name'][0];
        // $id = $_POST['id_cart'];
        // for($x; $x<count($_SESSION['name']);$i++){
        
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["product_id"] == $_POST["id_cart"])
            {
            unset($_SESSION["shopping_cart"][$_POST["id_cart"]]);
            print_r (json_encode($_SESSION['shopping_cart']));
            }
        }
        
        // }
        // $_SESSION['src'][]
        // $item_id = $_GET["item_id"];
        // session_start();
        // if (!empty($_SESSION["incart"])) {
        //     foreach ($_SESSION["incart"] as $select => $val) {
        //         if($val["item_id"] == $item_id)
        //         {
        //             unset($_SESSION["incart"][$select]);
        //         }
        //     }
        // }
       
        // die;
        exit();	
    }

        
    }

    public function cart(){
        session_start();
        if($_SESSION['shopping_cart'] != null){
            $data = $_SESSION['shopping_cart'];
        }
        // dd(json_encode($data));
        return view('user.cart',compact('data'));
    }

    public function checkout(){
        if(!Session::get('loginuser')){
            return redirect('/login');
        } else {
            session_start();
            $data = $_SESSION['shopping_cart'];
            return view('user.checkout',compact('data'));
        }
    }
}



    
       
        
            
           
                
                

            
        
    
   
    
    
