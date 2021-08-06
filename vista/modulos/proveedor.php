<div class="content-wrapper">

  <section class="content-header d-flex justify-content-between">
    
    <h1>
      
      Administrar proveedor
    
    </h1>

    <ol class="breadcrumb ">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio /</a></li>
      
      <li class="active" style="margin-left:7px">Administrar proveedor</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border mb-2">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProveedor">
          
          Agregar Proveedor

        </button>

      </div>

      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabla de proveedor</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped tablas">
                  <thead>
                  <tr>
                   <th style="width:10px">#</th>
                   <th>Nombre</th>
                   <th>Teléfono</th>
                   <th>País</th>
                   <th>Ruc</th>
                   <th>Correo</th>
                   <th>Dirección</th>
                   <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $item = null;
                  $valor = null;
                  $respuesta = ControladorProveedor::ctrMostrarProveedor($item,$valor); 

                  foreach ($respuesta as $key => $value) {
                     echo '
                            <tr>
                              <td>'.($key+1).'</td>
                              <td>'.$value['nombre'].'</td>
                              <td>'.$value['telefono'].'</td>
                              <td>'.$value['pais'].'</td>
                              <td>'.$value['ruc'].'</td>
                              <td>'.$value['correo'].'</td>
                              <td>'.$value['direccion'].'</td>
                              <td>

                                <div class="btn-group">
                                    
                                  <button class="btn btn-warning editarProveedor" idProveedor='.$value['id'].' data-toggle="modal" data-target="#modalEditarProveedor"><i class="fa fa-pencil-alt"></i></button>

                                  <button class="btn btn-danger eliminarProveedor" idProveedor='.$value['id'].' ><i class="fa fa-times"></i></button>

                                </div>  

                              </td>
                            </tr>
                          ';
                   } 

                  ?>  
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
      </div>
            <!-- /.card -->
      

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR PROVEEDOR
======================================-->

<div id="modalAgregarProveedor" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header d-flex justify-content-between" style="background:#3c8dbc; color:white">
          <div>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div>
            <h4 class="modal-title">Agregar proveedor</h4>
          </div>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Nombre proveedor" name="nuevo_proveedor">
              </div>

            </div>
            <!-- ENTRADA PARA EL telefono -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Telefono" name="nuevo_telefono">
              </div>

            </div>
            <!-- ENTRADA PARA PAIS -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Pais" name="nuevo_pais">
              </div>

            </div>

            <!-- ENTRADA PARA EL RUC -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Ruc" name="nuevo_ruc">
              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Correo" name="nuevo_correo">
              </div>

            </div>

            <!-- ENTRADA PARA EL DIRECCION -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Direccion" name="nuevo_direccion">
              </div>

            </div>

          </div>

        </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Proveedor</button>

        </div>

      </form>

      <?php

      $crearProveedor = new ControladorProveedor();
      $crearProveedor -> ctrGuardarProveedor();


      ?>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PROVEEDOR
======================================-->

<div id="modalEditarProveedor" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header d-flex justify-content-between" style="background:#3c8dbc; color:white">
          <div>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div>
            <h4 class="modal-title">Editar proveedor</h4>
          </div>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Nombre proveedor" id="editar_proveedor" name="editar_proveedor">
                <input type="hidden" name="idProveedor" id="idProveedor">
              </div>

            </div>
            <!-- ENTRADA PARA EL telefono -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Telefono" id="editar_telefono" name="editar_telefono">
              </div>

            </div>
            <!-- ENTRADA PARA PAIS -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Pais" id="editar_pais" name="editar_pais">
              </div>

            </div>

            <!-- ENTRADA PARA EL RUC -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Ruc" id="editar_ruc" name="editar_ruc">
              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Correo" id="editar_correo" name="editar_correo">
              </div>

            </div>

            <!-- ENTRADA PARA EL DIRECCION -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Direccion" id="editar_direccion" name="editar_direccion">
              </div>

            </div>

          </div>

        </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Editar Proveedor</button>

        </div>

      </form>

      <?php

      $editarProveedor = new ControladorProveedor();
      $editarProveedor -> ctrEditarProveedor();


      ?>

    </div>

  </div>

</div>

      <?php

      $eliminarProveedor = new ControladorProveedor();
      $eliminarProveedor -> ctrBorrarProveedor();


      ?>



