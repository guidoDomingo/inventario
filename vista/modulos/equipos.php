<div class="content-wrapper">

  <section class="content-header d-flex justify-content-between">
    
    <h1>
      
      Administrar Equipo
    
    </h1>

    <ol class="breadcrumb ">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio /</a></li>
      
      <li class="active" style="margin-left:7px">Administrar equipo</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border mb-2">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarEquipo">
          
          Agregar equipo

        </button>

      </div>

      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabla de equipo</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped tablas">
                  <thead>
                  <tr>
                   <th style="width:10px">#</th>
                   <th>Nombre</th>
                   <th>Marca</th>
                   <th>Modelo</th>
                   <th>Estado</th>
                   <th>Descripción</th>
                   <th>Stock</th>
                   <th>Código</th>
                   <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $item = null;
                  $valor = null;
                  $respuesta = ControladorEquipo::ctrMostrarEquipo($item,$valor); 

                  foreach ($respuesta as $key => $value) {
                     echo '
                            <tr>
                              <td>'.($key+1).'</td>
                              <td>'.$value['nombre_equipo'].'</td>
                              <td>'.$value['marca'].'</td>
                              <td>'.$value['modelo'].'</td>';

                              if($value["estado"] != 2){

                                echo '<td><button class="btn btn-success btn-xs btnActivar" idEquipo="'.$value["id"].'" estadoEquipo="2">Activado</button></td>';

                              }else{

                                echo '<td><button class="btn btn-danger btn-xs btnActivar" idEquipo="'.$value["id"].'" estadoEquipo="1">Desactivado</button></td>';

                              } 

                              echo '<td>'.$value['descripcion'].'</td>
                              <td>'.$value['stock'].'</td>
                              <td>'.$value['codigo'].'</td>
                              <td>

                                <div class="btn-group">
                                    
                                  <button class="btn btn-warning editarEquipo" idEquipo='.$value['id'].' data-toggle="modal" data-target="#modalEditarEquipo"><i class="fa fa-pencil-alt"></i></button>

                                  <button class="btn btn-danger eliminarEquipo" idEquipo='.$value['id'].' ><i class="fa fa-times"></i></button>

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

<div id="modalAgregarEquipo" class="modal fade" role="dialog">
  
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
            <h4 class="modal-title">Agregar equipo</h4>
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
                <input type="text" class="form-control" placeholder="Nombre equipo" name="nuevo_equipo">
              </div>

            </div>
            <!-- ENTRADA PARA La marca -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Marca" name="nuevo_marca">
              </div>

            </div>
            <!-- ENTRADA PARA MODELO -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Modelo" name="nuevo_modelo">
              </div>

            </div>

            <!-- ENTRADA PARA EL Estado -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <select  class="form-control input-lg" name="nuevo_estado">
                  
                  <option value="">Selecionar estado</option>

                  <option value="1">Buen estado</option>

                  <option value="2">estado crítico</option>

                  <option value="3">mal estado</option>

                </select>
              </div>

            </div>
              <!-- ENTRADA PARA LA CATEGORIA-->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <select  class="form-control input-lg" id="nuevaCategoria" name="nuevo_categoria">
                  
                  <option value="">Selecionar categoria</option>

                  <?php

                  $item = null;
                  $valor = null;
                  $respuesta = ControladorCategoria::ctrMostrarCategoria($item,$valor);

                  foreach ($respuesta as $key => $value) {
                    echo '  
                        <option value='.$value["id"].'>'.$value["nombre_categoria"].'</option>

                         ';
                  }

                  ?>


                </select>
              </div>

            </div>

             <!-- ENTRADA PARA EL PROVEEDOR-->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <select  class="form-control input-lg" name="nuevo_proveedor">
                  
                  <option value="">Selecionar proveedor</option>

                  <?php

                  $item = null;
                  $valor = null;
                  $respuesta = ControladorProveedor::ctrMostrarProveedor($item,$valor);

                  foreach ($respuesta as $key => $value) {
                    echo '  
                        <option value='.$value["id"].'>'.$value["nombre"].'</option>

                         ';
                  }

                  ?>

                </select>
              </div>

            </div>

            <!-- ENTRADA PARA EL DESCRIPCION -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Descripcion" name="nuevo_descripcion">
              </div>

            </div>

            <!-- ENTRADA PARA EL STOCK -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="number" class="form-control" placeholder="Stock" name="nuevo_stock">
              </div>

            </div>
            <!-- ENTRADA PARA EL CODIGO -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Codigo" id="nuevoCodigo" name="nuevo_codigo">
              </div>

            </div>

          </div>

        </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Equipo</button>

        </div>

      </form>

      <?php

      $crearEquipo = new ControladorEquipo();
      $crearEquipo -> ctrGuardarEquipo();


      ?>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR Equipo
======================================-->

<div id="modalEditarEquipo" class="modal fade" role="dialog">
  
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
            <h4 class="modal-title">Editar equipo</h4>
          </div>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              <label for="validation01" class="text-gray">Nombre</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Nombre equipo" id="editar_equipo" name="editar_equipo">
                <input type="hidden" name="idEquipo" id="idEquipo">
              </div>

            </div>
            <!-- ENTRADA PARA La marca -->
            
            <div class="form-group">
              <label for="validation01" class="text-gray">Marca</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Marca" id="editar_marca" name="editar_marca">
              </div>

            </div>
            <!-- ENTRADA PARA MODELO -->
            
            <div class="form-group">
              <label for="validation01" class="text-gray">Modelo</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Modelo" id="editar_modelo" name="editar_modelo">
              </div>

            </div>

            <!-- ENTRADA PARA EL Estado -->
            
            <div class="form-group">
              <label for="validation01" class="text-gray">Estado</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <select  class="form-control input-lg" name="editar_estado" id="editar_estado">
                  
                  <option value="">Selecionar estado</option>

                  <option value="1">Buen estado</option>

                  <option value="2">estado crítico</option>

                  <option value="3">mal estado</option>

                </select>
              </div>

            </div>

            <!-- ENTRADA PARA EL DESCRIPCION -->
            
            <div class="form-group">
              <label for="validation01" class="text-gray">Descripción</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Descripcion" id="editar_descripcion" name="editar_descripcion">
              </div>

            </div>

            <!-- ENTRADA PARA EL STOCK -->
            
            <div class="form-group">
              <label for="validation01" class="text-gray">Stock</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Stock" id="editar_stock" name="editar_stock">
              </div>

            </div>
            <!-- ENTRADA PARA EL CODIGO -->
            
            <div class="form-group">
              <label for="validation01" class="text-gray">Codigo</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Codigo" id="editar_codigo" name="editar_codigo">
              </div>

            </div>

          </div>

        </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Editar Equipo</button>

        </div>

      </form>

      <?php

      $editarEquipo = new ControladorEquipo();
      $editarEquipo -> ctrEditarEquipo();


      ?>

    </div>

  </div>

</div>

      <?php

      $eliminarEquipo = new ControladorEquipo();
      $eliminarEquipo -> ctrBorrarEquipo();


      ?>



