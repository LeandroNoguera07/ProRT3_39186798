<div class="container w-75  my-5  rounded shadow">
    <div class="row aling-items-stretch">
        <div class="col fondo d-none d-lg-block rounded-start" style="background-image: url('assets/img/logo.webp'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
        
        </div>

        <div class="col bg-white p-5 rounded-end">
            
            <h2 class="fw-bold text-center pt-5 mb-5">Bienvenido</h2>

            <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg')?>
                </div>
            <?php endif;?>

            <!--LOGIN--->

            <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
                <div class="mb-4">
                    <label for="email" class="form-label">Correo electronico</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass">
                </div>
                <div class="mb-4 form-check">                    
                    <input type="checkbox" class="form-check-input" name="connected">
                    <label for="connected" class="form-check-label">Mantenerme conectado</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                    <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
                </div>
                <div class="my-3">
                    <span>No tienes cuenta? <a href="<?php echo base_url('/registro'); ?>">Registrate</a></span> <br>
                    <span><a href="#">Recuperar Password</a></span>
                </div>
            </form>
            

        </div>

    </div>
</div> 