        <div class="row">
          <div class="col-lg-12">
            <center><h1> Empleados</h1></center>
            <ol class="breadcrumb">
             
              <li class="active"></i><center><h4> Edicion de Empleados</h4></center></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

            <!-- /.row -->
        <div class="form-group"> <button type="button" onclick=location="<?php echo base_url().'direccion/hrefa_emplea'; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>&nbsp;Agregar</button></div>       
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                      <form action="" id="tabla_sucursal" method="post" role="form">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombre de la Sucursal</th>
                                            <th>Telefono</th>
                                            <th>Direccion</th>
                                            <th>Departamento</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php if(isset($sucursales)){ ;?>
                                            <?php foreach ($sucursales as $sucursal):?>
                                            <tr>
                                            <td><?= $sucursal->nombre_sucursal?></td>   
                                            <td><?= $sucursal->telefono_sucursal?></td> 
                                            <td><?= $sucursal->direccion_sucursal?></td> 
                                            <td><?= $sucursal->departamento?></td>
                                            <td><a href="<?= base_url().'crud/actualizar_sucursal/'.$sucursal->id_sucursal?>">Editar</a></td>
                                            <td><a href="<?= base_url().'crud/eliminar_sucursal/'.$sucursal->id_sucursal?>">Eliminar</a></td> 
                                            </tr>
                                            <?php endforeach ;?>
                                            <?php }; ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->                           
                        </div>
                        <!-- /.panel-body -->
                     </form>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        <?= validation_errors(); ?>
            <!-- /.row -->