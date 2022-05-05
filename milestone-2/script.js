//debug
console.log('Js Ok!')

const app = new Vue({
    el: '#app',
    data() {
        return {
            disks: [],
        }
    },
    mounted() {
        axios
            .get("http://localhost/php-ajax-dischi/milestone-2/apiDisk.php").then((response) => {
                this.disks = response.data;
                console.log(this.disks);
            })
            .catch((error) => {
                console.log(error);
            });
    }
}); 