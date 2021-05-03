Vue.config.devtools = true;

var app = new Vue ({
    el: '#root',
    data: {
        dischi: [],
    },
    mounted() {
        axios.get('dist/php/database.php')
        .then((response) => {
            this.dischi = (response.data.response);
        });
    },
});