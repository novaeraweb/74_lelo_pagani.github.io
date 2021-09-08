<?php if (array_key_exists('inserido', $_GET) && $_GET['inserido']=='true') { ?>
<!-- <div class="sucesso" id="autofade"></div> -->
    <div class="modal-dialog" id="autofade">
        <div class="modal-card">
            <div class="modal-card-img"> <img src="assets/img/icon-check.svg" alt=""></div>
            <div class="modal-card-title">
                <p>Successo!</p>
            </div>
            <div class="modal-card-text">
                <p>Conteúdo inserido com sucesso.</p>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (array_key_exists('editado', $_GET) && $_GET['editado']=='true') { ?>
    <div class="modal-dialog" id="autofade">
        <div class="modal-card">
            <div class="modal-card-img"> <img src="assets/img/icon-check.svg" alt=""></div>
            <div class="modal-card-title">
                <p>Successo!</p>
            </div>
            <div class="modal-card-text">
                <p>Conteúdo editado com sucesso.</p>
            </div>
        </div>
    </div>
<?php } ?>

<script>
  setTimeout(function() {
$('#autofade').fadeOut('slow');}, 5000);
</script>