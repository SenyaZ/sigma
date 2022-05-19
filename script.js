

Vue.createApp({
        data() {
            return {
                countProduct: 0,
            };
        },
        methods:{
            plus() {
                this.countProduct += 1;
                localStorage.counter =  this.countProduct;
            },
            setLocalCounter(){
                localStorage.counter = this.countProduct;
            },
            decriment(){
                this.countProduct -= 1;
                localStorage.counter =  this.countProduct;
            }
        },
    mounted(){
            if (localStorage.counter){
                this.countProduct = localStorage.counter;
            }
    }
}).mount('#app');




