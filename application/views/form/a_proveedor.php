          <div class="row">
          <div class="col-lg-12">
            <center><h1>Proveedor</h1></center>
            <ol class="breadcrumb">
             
              <li class="active"></i><h4> Agregar Proveedor</h4></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

            <form action="<?php echo base_url().'crud_proveedor/agregar'; ?>" id="mi_form" method="post" role="form">
              <div class="form-group">
                <label>Codigo Proveedor</label>
                <input name="id_proveedor" class="form-control">
              </div>
              <div class="form-group">
                <label>Nombre del Proveedor</label>
                <input name="nombre_provee" class="form-control">
              </div>

               <div class="form-group">
                <label>Telefono</label>
                <input name="telefono_provee" class="form-control">
              </div>

               <div class="form-group">
                <label>Email</label>
                <input name="email_provee" class="form-control">
              </div>

              <div class="form-group">
                <label>Direccion</label>
                <input name="direccion_provee" class="form-control">
              </div>
               <div class="form-group">
                <label>Nit</label>
                <input name="nit" class="form-control">
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" onclick=location="<?php echo base_url().'crud_proveedor'; ?>" class="btn btn-primary">Cancelar</button>
              </div>              


            </form>
   

           </div>
        </div><!-- /.row -->
        <?= validation_errors(); ?>