<div class="content-wrapper">

  <section class="content-header d-flex justify-content-between">
    
    <h1>
      
      Administrar plantas
    
    </h1>

    <ol class="breadcrumb ">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio /</a></li>
      
      <li class="active" style="margin-left:7px">Administrar plantas</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border mb-2">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPlanta">
          
          Agregar planta

        </button>

      </div>

      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabla de plantas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped tablas">
                  <thead>
                  <tr>
                   <th style="width:10px">#</th>
                   <th>Nombre</th>
                   <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                   $item = null;
                   $valor = null;
                   $respuesta = ControladorPlanta::ctrMostrarPlanta($item,$valor);

                   foreach ($respuesta as $key => $value) {
                      echo '  

                             <tr>
                              <td>'.($key+1).'</td>
                              <td>'.$value["nombre"].'</td>
                              <td>

                                <div class="btn-group">
                                    
                                  <button class="btn btn-warning editarPlanta" idPlanta='.$value['id'].' data-toggle="modal" data-target="#modalEditarPlanta"><i class="fa fa-pencil-alt"></i></button>

                                  <button class="btn btn-danger eliminarPlanta" idPlanta='.$value['id'].' ><i class="fa fa-times"></i></button>

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
MODAL AGREGAR Categoria
======================================-->

<div id="modalAgregarPlanta" class="modal fade" role="dialog">
  
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
            <h4 class="modal-title">Agregar Planta</h4>
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
                <input type="text" class="form-control" placeholder="Planta" name="nuevo_planta" aria-label="Planta" aria-describedby="basic-addon1">
              </div>

            </div>

          </div>

        </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Planta</button>

        </div>

      </form>

      <?php

      $crearPlanta = new ControladorPlanta();
      $crearPlanta -> ctrGuardarPlanta();


      ?>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PLANTA
======================================-->

<div id="modalEditarPlanta" class="modal fade" role="dialog">
  
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
            <h4 class="modal-title">Editar planta</h4>
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
                <input type="text" class="form-control" id="editar_planta" placeholder="Planta" name="editar_planta" required>
                <input type="hidden" name="idPlanta" id="idPlanta" required>
              </div>

            </div>

          </div>

        </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Editar Planta</button>

        </div>

      </form>

      <?php

      $editarPlanta = new ControladorPlanta();
      $editarPlanta -> ctrEditarPlanta();


      ?>

    </div>

  </div>

</div>

      <?php

      $eliminarPlanta = new ControladorPlanta();
      $eliminarPlanta -> ctrBorrarPlanta();


      ?>




