const { createApp } = Vue
createApp({
    data() {
        return {
            url: 'api.php',
            error: '',
            dischi: []
        }
    },
    mounted() {
        axios
            .get(this.url)
            .then((result) => {
                console.log(result);
                this.dischi = result.data;
            }).catch((err) => {
                console.log(err.message);
                this.error = err.message;

            })
    }
}).mount('#app')