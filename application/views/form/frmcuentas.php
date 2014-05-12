        <div class="row">
          <div class="col-lg-12">
            <center><h1> Cuentas Contables</h1></center>
            <ol class="breadcrumb">
             
              <li class="active"></i><center><h4> Edicion de Cuentas Contables</h4></center></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

            <!-- /.row -->
        <div class="form-group"> <button type="button" onclick=location="<?php echo base_url().'direccion/hrefa_cuenta'; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>&nbsp;Nueva</button></div>       
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
                                            <th>Cuenta</th>
                                            <th>Vida Util</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           
                                            <?php foreach ($cuenta as $cuenta):?>
                                            <tr>
                                            <td><?= $cuenta->nombre_cuenta?></td>   
                                            <td><?= $cuenta->vida_util?></td> 
                                          
                                               <td align="center"><button type="button" onclick=location="<?php echo base_url().'crud_cuenta/editar/'.$cuenta->id_cuentacontable; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Editar</button></td>
                                            <td align="center"><button type="button" onclick=location="<?php echo base_url().'crud_cuenta/eliminar/'.$cuenta->id_cuentacontable; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>&nbsp;Eliminar</button></td> 
                                            </tr>
                                            <?php endforeach ;?>
                                          
                                    
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