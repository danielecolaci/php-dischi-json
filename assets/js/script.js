const { createApp } = Vue
createApp({
    data() {
        return {
            url: 'api.php',
            error: '',
            dischi: [],
            discoSelect: null
        }
    },
    methods: {
        openDisco(disco) {
            console.log('Disco', disco);
            this.discoSelect = disco;
            console.log('discoselect', this.discoSelect);
            document.querySelector('.modale').classList.add('active');
        },
        closeDisco() {
            this.discoSelect = null;
            document.querySelector('.modale').classList.remove('active');
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