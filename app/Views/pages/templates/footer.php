    
    <footer>
        <p class="">Todos os direitos reservados</p>
    </footer>
    <script src="<?php echo INCLUDE_PATH_FULL; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_FULL; ?>js/ajax.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
        
        $(function() {
            $('.menu-icon i').click(function() {
                $('.menu-mobile').slideToggle();
            })

            let sucesso = document.getElementById('infoCadsuccess');
            if (sucesso || campoVazio || erro) {
                setInterval(function() {
                    sucesso.style.display = 'none'
                },3000)
            }
        })
        
    </script>
</body>
</html>