<template>
    <div>
       <li class="nav-item">
            <a data-scroll-nav="0" href="/checkout" class="btn btn-warning btn-sm">
            Cart {{itemCount}}
            </a>
        </li>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                itemCount: '',
            }
        },
        mounted() {
            this.$root.$on('changeInCart', (items) => {
                this.itemCount = items;
            });
        },
        methods:{
            async getCartItemsOnPageLoad(){
                  let response = await axios.post('/cart');
                  this.itemCount= response.data.items;
                 // alert(this.itemCount);
            }
        },
        created(){
            this.getCartItemsOnPageLoad();
        }
    }
</script>
