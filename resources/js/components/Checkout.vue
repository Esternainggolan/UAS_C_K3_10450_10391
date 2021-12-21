<template>
    <div>
    <div class="container checkoutBox">
    <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    <div class="box">
                        <h3 class="box-title">Keranjang obat anda</h3>
                        <div class="plan-selection" v-for="item in items" :key="item.id"> 
                            <div class="plan-data" v-if="item.nama">
                                <input id="question1" name="question" type="radio" class="with-font" value="sel" />
                                <label for="question1">{{item.nama}}</label>
                                <p class="plan-text">
                                    Jumlah : {{item.jumlah}}
                                </p>
                                <span class="plan-price">
                                    Harga : Rp {{item.harga}}
                                </span>
                            </div>
                        </div>
                        <div>
                    </div> 
                    </div>
                                 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    <div class="widget">
                        <h4 class="widget-title">Rincian Pesanan</h4>
                        <div class="summary-block" v-for="summaryItem in items" :key="summaryItem.id">
                            <div class="summary-content" v-if="summaryItem.nama">
                                <div class="summary-head"><h5 class="summary-title">
                                    {{summaryItem.nama}}
                                    </h5></div>
                                <div class="summary-price">
                                    <p class="summary-text">                             
                                        Rp {{summaryItem.total}}
                                    </p>
                                    <span class="summary-small-text pull-right">
                                        J {{summaryItem.jumlah}} x 
                                        H {{summaryItem.harga}}
                                    </span>
                                </div>
                            </div>
                        </div> 
                        <div class="summary-block">
                            <div class="summary-content">
                               <div class="summary-head"> <h5 class="summary-title">Total</h5></div>
                                <div class="summary-price">
                                    <p class="summary-text">Rp {{items.jumlahTotal}}
                                    </p>
                                    <span class="summary-small-text pull-right"></span>
                                </div>
                           
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
    </div>
    </div>
</template>
<script>

    export default {
        data(){
            return{

                items: []
                // firstName: '',
                // lastName: '',
                // email: '',
                // phone: '',
                // address: '',
                // city: '',
                // state: '',
                // zipCode: '',
                // country: '',
                // cardType: '',
                // expirationMonth: '',
                // expirationYear: '',
                // cvv: '',
                // cardNumber: ''
            }
        },
        methods:{
            async getCartItems(){
                let response = await axios.get('/checkout/get/items');
                this.items = response.data;
                console.log(this.items);
            }
            // async getUserAddress(){
            //     if(this.firstName !='' && this.address !='' && this.cardNumber && this.cvv !='')
            //     {
            //          let response = await axios.post('/process/user/payment', {
            //             'firstName': this.firstName,
            //             'lastName': this.lastName,
            //             'email': this.email,
            //             'phone': this.phone,
            //             'address': this.address,
            //             'city': this.city,
            //             'state': this.state,
            //             'zipCode': this.zipCode,
            //             'country': this.country,
            //             'cardType': this.cardType,
            //             'expirationMonth': this.expirationMonth,
            //             'expirationYear': this.expirationYear,
            //             'cvv': this.cvv,
            //             'cardNumber': this.cardNumber,
            //         });

            //         console.log(response.data);
            //     }
            //     else{
            //         this.$toastr.e('Data diri belum lengkap !');
            //         return;
            //     }
            // }
        },
        created(){
            this.getCartItems();
        }
    }
    
</script>


