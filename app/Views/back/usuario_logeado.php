<div class="container w-75  my-5 rounded shadow">
    <div class="row aling-items-stretch">
        
            <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg')?>

            </div>
            <?php endif;?>
            <br><br>
            <?php if(session()->perfil_id == 1): ?>

                
            
                <h1 style="text-align: center; color: green;">ADMIN</h1>
                    <img class="center" alt="" width="400px"  src="<?php echo base_url ('assets/img/logo.webp');?>">
            
                    
            <?php elseif(session()->perfil_id == 2): ?>

                
                        <h1 style="text-align: center; color: green;">CLIENTE</h1>
                        <img alt="" class="center" width="400px" src="<?php echo base_url ('assets/img/logo.webp');?>">
              
            <?php endif;?>
        

    </div>

</div>