<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if (array_key_exists('enviado', $_GET) && $_GET['enviado']=='true') { ?>
<script type="text/javascript">
window.onload = function(){alert();}</script>
<?php } ?>
<?php if (array_key_exists('cadastro', $_GET) && $_GET['cadastro']=='false') { ?>
<div class="alerta" id="autofade">
	<div class="alert alert-danger" role="alert" style="width:20%;margin: 0 auto;" >
		<img src="img/icon-erro.svg" width="30" style="margin:0 auto;margin-bottom: 10px;">
		<p>E-mail não cadastrado</p>
	</div>
</div>
<?php } ?>
<?php if (array_key_exists('recuperar', $_GET) && $_GET['recuperar']=='true') { ?>
<div class="alerta" id="autofade">
<p> Sua senha foi enviada ao seu E-mail de cadastro.<br>Verifique também a caixa de spam. </p>
</div>
<?php } ?>
<?php if (array_key_exists('duplicado', $_GET) && $_GET['duplicado']=='true') { ?>
<div class="alerta" id="autofade" style="text-align: center;">
<img src="img/icon-erro.svg" width="30" style="margin:0 auto;">
<p>Esse E-mail já consta em nosso cadastro<br>Digite um E-mail diferente.</p>
</div>
<?php } ?>
<script type="text/javascript">
	function alert() {
     Swal.fire(
  'Mensagem enviada!',
  ' ',
  'success'
)
     return false;
}
</script>