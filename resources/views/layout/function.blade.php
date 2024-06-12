<script>
    function callMenu(target) {
        const daftarMenu = document.getElementById("daftar-menu").querySelectorAll("a");
        var lastWord = target;

        daftarMenu.forEach(function(menu) {
            console.log(menu.id);
            if (lastWord === menu.id) {
                menu.classList.add("active");
                console.log("lastWord: " + lastWord)
            }
        });
    }
</script>
