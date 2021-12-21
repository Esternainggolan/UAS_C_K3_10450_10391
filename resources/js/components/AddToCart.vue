<template>
    <div>
       <button class="btn btn-warning text-center" v-on:click.prevent="addDrugToCart()">
          Tambah ke keranjang
    </button>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                
            }
        },
        props:['productId','userId'],
        methods:{
            async addDrugToCart(){
                //Cek user jika login 
                if(this.userId==0){
                    this.$toastr.e('Anda harus login terlebih dahulu sebelum menambahkan obat ke keranjang!');
                    return;
                }

                //Jika user sudah login
                let response = await axios.post('/cart', {
                    'drug_id':this.productId
                });

                this.$root.$emit('changeInCart', response.data.items);

                console.log(response.data);
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
