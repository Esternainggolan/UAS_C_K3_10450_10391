<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drugs;
use App\Models\Carts;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(!$request->get('drug_id')){
            return [
                'message'=>'Keranjang telah diperbaharui',
                'items' => Carts::where('user_id',auth()->user()->id)->sum('jumlah'),
            ];
        }
        
        //Ambil detail obat
        $drug = Drugs::where('id',$request->get('drug_id'))->first();
        
        $drugFoundInCart = Carts::where('drug_id',$request->get('drug_id'))->pluck('id');
        //check user cart items
       

        if($drugFoundInCart->isEmpty()){
             //Tambah obat ke keranjang
            $cart = Carts::create([
                'drug_id'=> $drug->id,
                'jumlah'=> 1,
                'harga' => $drug->harga,
                'user_id' => auth()->user()->id,
            ]);
        }else{
             //Inkremen jumlah obat
             $cart = Carts::where('drug_id',$request->get('drug_id'))
             ->increment('jumlah');
        }

        if($cart){
        {
            return [
                'message'=>'Keranjang telah diperbaharui',
                'items' => Carts::where('user_id',auth()->user()->id)->sum('jumlah')
            ];
        }
        dd($drug);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCartItemsForCheckout(){
        $cartItems = Carts::with('drug')->where('user_id', auth()->user()->id)->get();
        $finalData = [];
        $jumlahTotal = 0;
        if(isset($cartItems))
        {
            foreach($cartItems as $cartItem)
            {
                if($cartItem->drug)
                {
                    //$finalData[$cartItem->drug_id]['id'] = $cartDrug->id;
                    foreach($cartItem->drug as $cartDrug){
                        if($cartDrug->id == $cartItem->drug_id){
                            $finalData[$cartItem->drug_id]['nama'] = $cartDrug->id;
                            $finalData[$cartItem->drug_id]['nama'] = $cartDrug->nama;
                            $finalData[$cartItem->drug_id]['jumlah'] = $cartItem->jumlah;
                            $finalData[$cartItem->drug_id]['harga'] = $cartItem->harga;
                            $finalData[$cartItem->drug_id]['total'] = $cartItem->harga * $cartItem->jumlah;
                            $jumlahTotal += $cartItem->harga * $cartItem->jumlah;
                            $finalData['jumlahTotal'] = $jumlahTotal;
                        }
                            
                    }
              
                }
            }
        
        }
        return response()->json($finalData);
        //return 123;
    }

    public function processPayment(Request $request){
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $address = $request->get('address');
        $city = $request->get('city');
        $state = $request->get('state');
        $zipCode = $request->get('zipCode');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $country = $request->get('country');
        $cardType = $request->get('cardType');
        $expirationMonth = $request->get('expirationMonth');
        $expirationYear = $request->get('expirationYear');
        $cvv = $request->get('cvv');
        $cardNumber = $request->get('cardNumber');
        $amount = $request->get('amount');
        $orders = $request->get('order');
        $ordersArray = [];
       
    }

    function flush(Request $request){
        $r=$request->session()->flush();
        return redirect('/login');
    }
}
