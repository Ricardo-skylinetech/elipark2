<style>
    .mi-contenedor {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 80vh;
        padding-right: 0.75rem;
        padding-left: 0.75rem;
        margin-right: auto;
        margin-left: auto;
    }

    h1{
        font-size: 3.5rem !important;
    }

    h2{
        margin-top: 1rem !important;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="mi-contenedor">
        <!-- Contenedor con los cambios que deseas -->
        <h1>Bienvenido a tu plataforma.</h1>
        <img src="<?= base_url();?>public/img/logo_elipark_transparent.png" width="40%" alt="Descripción de la imagen">
        <h2>Recuerda para nosotros tú eres lo más importante.</h2>
    </div>
</div>
<!-- /.container-fluid -->
<?php $this->load->view('templates/footer'); ?>
<script>
    $(document).ready(function() {
        $('.loading').fadeOut('slow');
    });
</script>
</body>

</html>