<div class="container my-5 rounded shadow ">
    <div class="row ">
        <div class="col bg-white p-5 rounded-start">
            <h2 class="fw-bold text-center pt-5 mb-5">Registrarse</h2>

            <?php $validation = \Config\Services::validation(); ?>
            <form method="post" action="<?php echo base_url('/enviar-form') ?>">
                <?=csrf_field();?>
                    <?=csrf_field();?>
                    <?php if(!empty (session()->getFlashdata('fail'))):?>
                        <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
                        <?php endif?>
                            <?php if(!empty (session()->getFlashdata('success'))):?>
                                <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
                                <?php endif?>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre"  aria-label="Nombre">
                    <!-- Error -->
                    <?php if($validation->getError('nombre')) {?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('nombre'); ?>
                        </div> 
                    <?php }?>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Apellido" name="apellido" aria-label="Apellido">
                    <!-- Error -->
                    <?php if($validation->getError('apellido')) {?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('apellido'); ?>
                        </div> 
                    <?php }?>

                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"></label>
                <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Correo electrónico" name="email" aria-describedby="emailHelp">
                        <!-- Error -->
                    <?php if($validation->getError('email')) {?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('email'); ?>
                        </div> 
                    <?php }?>

                <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
            </div>
            <div class="col">
                    <input type="text" class="form-control" placeholder="Usuario" name="usuario" aria-label="Usuario">
                        <!-- Error -->
                    <?php if($validation->getError('usuario')) {?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('usuario'); ?>
                        </div> 
                    <?php }?>

                </div>
            <div class="mb-0">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="password" class="form-control"  placeholder="Contraseña" name="pass" id="exampleInputPassword1">
                        <!-- Error -->
                    <?php if($validation->getError('pass')) {?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('pass'); ?>
                        </div> 
                    <?php }?>

                <div id="passwordHelpBlock" class="form-text">
            Tu contraseña debe tener entre 8 y 20 caracteres, contener letras y números, y no debe contener espacios, caracteres especiales ni emoji.
                </div>
            </div>
            
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Acepto terminos y condiciones</label>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Registrarse</button>
            </form>
        </div>
        <div class="col fondo d-none d-lg-block rounded-end" style="background-image: url('assets/img/logo.webp'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
        
        </div>
        
    </div>
    
</div>