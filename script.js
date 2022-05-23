Vue.createApp({
    data() {
        return {
            counter: 0,
        }
    },
    methods: {
        plus(){
            this.counter++;
            localStorage.counter = this.counter
        },
        minus(){
            this.counter--;
            localStorage.counter = this.counter
        },
        reset(){
            this.counter = 0;
            localStorage.counter = this.counter
        }
    },
    mounted(){
        if(localStorage.counter){
            this.counter = localStorage.counter
        }
    }

}).mount('#app')
