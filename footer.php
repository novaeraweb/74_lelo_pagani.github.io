<!-- Footer -->

<footer id="footer">
    <div class="inner">
        <ul class="icons">
            <li><a href="https://www.facebook.com/lelopagani" class="icon brands fa-facebook" target="_blank" rel="noopener" rel="noreferrer"><span class="label">Facebook</span></a></li>
            <li><a href="https://www.instagram.com/lelopagani/" class="icon brands fa-instagram" target="_blank" rel="noopener" rel="noreferrer"><span class="label">Instagram</span></a></li>
            <li><a href="https://www.twitter.com/lelopagani" class="icon brands fa-twitter" target="_blank" rel="noopener" rel="noreferrer"><span class="label">Twitter</span></a></li>
            <li><a href="mailto:contato@lelopagani.com.br" class="icon solid fa-envelope" target="_blank" rel="noopener" rel="noreferrer"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>Desenvolvido por: <a href="https://www.novaeraweb.com.br" target="_blank" rel="noopener" rel="noreferrer">Nova Era Web</a></li>
        </ul>
    </div>
</footer>

<?php require_once "whatsapp.php"?>

<!-- Scripts -->
<!-- <script src="assets/js/jquery.min.js"></script> -->
<script src="assets/js/jquery-3.6.0.js"></script>
<script src="assets/js/jquery.poptrox.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/lightbox.min.js" type="text/javascript"></script>
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