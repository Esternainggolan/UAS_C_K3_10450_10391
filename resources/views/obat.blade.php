@extends('layouts.frontend')
@section('styles')
@section('content')

    <!--====== SLIDER PART ENDS ======-->
   
    <!--====== DISCOUNT PRODUCT PART START ======-->
    
    
    
    <!--====== DISCOUNT PRODUCT PART ENDS ======-->
   
    <!--====== PRODUCT PART START ======-->
    
    <section id="product" class="product-area pt-100 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-furniture" role="tabpanel" aria-labelledby="v-pills-furniture-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    @if(isset($drugs))
                                    @foreach($drugs as $drug)
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="{{$drug->image_nama}}" alt="Product"
                                                height="320px"></a>
                                                <!-- <div class="product-discount-tag">
                                                    <p></p>
                                                </div> -->
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">{{$drug->nama}}</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">Rp {{$drug->harga}}</span>
                                                <span class="discount-price">Rp {{$drug->biaya}}</span>
                                                <hr>
                                                <!-- Stop user untuk menambahkan ke keranjang -->
                                                <add-to-cart-button product-id="{{$drug->id}}"
                                                user-id="{{auth()->user()->id ?? 0}}"/>
                                            </div>
                                            
                                            
                                        </div> <!-- single product items -->
                                    </div>
                                    @endforeach
                                    @endif
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        
                    </div> <!-- tab content --> 
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PRODUCT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    
    <section id="footer" class="footer-area">
        <div class="container">
            <div class="footer-widget pt-75 pb-120">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-7">
                        <div class="footer-logo mt-40">
                            <a href="#">
                                <img src="assets/images/allcure.png" alt="Logo">
                            </a>
                            <p class="mt-10">Allcure adalah toko obat terpercaya di seluruh dunia yang kini hadir di Indonesia</p>
                            <ul class="footer-social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-7">
                        <div class="footer-info mt-50">
                            <h5 class="f-title">Info Kontak</h5>
                            <ul>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Nomor Hp : </span>
                                        <div class="footer-info-content">
                                            <p>+62895614610359</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Email :</span>
                                        <div class="footer-info-content">
                                            <p>hengky123@gmail.com</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
        
        </div> <!-- container -->
    </section>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
@endsection
@section('scripts')
@endsection
    
    
    
    
    
    
    
    
    
    
    

