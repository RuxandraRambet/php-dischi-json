const { createApp } = Vue;

createApp({
    data() {
        return {
            discs: [],
            apiUrl: 'server.php',
        };
    },
    methods: {
        getDiscs() {
            axios.get(this.apiUrl).then((response) => {
                console.log(response);
                this.discs = response.data;
            });
        }
    },
    created() {
        this.getDiscs();
    }

}).mount('#app');