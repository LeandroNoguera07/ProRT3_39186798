<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
  ?>

  <nav class="navbar navbar-expand-lg bg-body-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('inicio')?>"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if(session()->perfil_id == 1): ?>
      <div class="btn btn-secondary active btnUser btn-sm">
      <a href="" style="color: black; text-transform: uppercase;">admin: <?php echo session('nombre'); ?></a>


    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio">
            <!-- logo marca de la empresa -->
          <img src="assets/img/logo.webp" style="width: 30px; height: auto;" alt="Logo">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quienessomos">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acercade">Acerca de</a>
        </li>
        <li><a class="nav-link" href="<?php echo base_url('/logout');?>">Cerrar Sesion</a></li>
      </ul>


      </div><!---->
      <?php elseif(session()->perfil_id == 2): ?>
        <div class="btn btn-info active btnUser btn-sm">
        <a href="" style="color: black; text-transform: uppercase;">cliente: <?php echo session('nombre'); ?></a>
        </div>
        <!-- NAVBAR  PARA CLIENTES-->

        <a href="#" class="navbar-brand"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link fs-5 active " aria-current="page" href='inicio'>Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href='quienessomos'>Quienes Somos</a>
            </li>
            <li><a class="nav-link fs-5" href='acercade'>Acerca de</a></li>
            <li><a class="nav-link fs-5" href="<?php echo base_url('/logout');?>">Cerrar Sesion</a></li>
          </ul>
        </div>
        <!----->

      <?php else:?>
        <a href="#" class="navbar-brand"></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link fs-5 active " aria-current="page" href='inicio'>Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href='quienessomos'>Quienes Somos</a>
            </li>
            <li><a class="nav-link fs-5" href='acercade'>Acerca de</a></li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sesion
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item fs-5" href='registro'>Registrarse</a></li>
                <li><a class="dropdown-item fs-5" href='login'>Login</a></li>
                <li><hr class="dropdown-divider"></li>
                
              </ul>
            </li>
          
          </ul>
        </div>
          
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      <?php endif;?>
    </div>
  </div>
</nav>