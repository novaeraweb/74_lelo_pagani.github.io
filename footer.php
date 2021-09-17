<!-- Footer -->

<footer id="footer">
    <div class="inner">
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
            <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>Desenvolvido por: <a href="https://www.novaeraweb.com.br">Nova Era Web</a></li>
        </ul>
    </div>
</footer>

<?php require_once "whatsapp.php"?>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.poptrox.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<script type="text/javascript">
	function validaCaptcha() {
  if(document.querySelector('#g-recaptcha-response').value == '') {
     swal('Valide o reCaptcha!', 'Obrigatório para o envio da mensagem', 'error');return false;
  }
}
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://unpkg.com/sweetalert2@7.12.15/dist/sweetalert2.all.js"></script>

