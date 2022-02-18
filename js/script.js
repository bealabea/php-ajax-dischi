new Vue({
    el: "#app",
    data: {
        discList: [],
    },
    // chiamo l'api discList.php
    mounted() {
        axios.get("http://localhost:80/php-ajax-dischi/api/discList.php")
      .then((resp) => {
          this.discList = resp.data;
        })
    }
});