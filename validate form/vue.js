Vue.createApp({
    data() {
        return {
            name:"",
            surname:"",
            gender:"male",
            bgColor:"blue",
            errors: "",
        }
    },
    methods: {
        checkBg(){
            if(this.bgColor === "blue" && this.gender === "male"){
                this.bgColor = "pink"
                this.gender = "male"
            }
            else if(this.bgColor === "pink" && this.gender === "female"){
                this.bgColor = "blue"
                this.gender = "female"
            }
        }
    }

}).mount('#app')
