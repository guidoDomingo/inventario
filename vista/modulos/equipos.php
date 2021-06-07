<div class="content-wrapper">

  <section class="content-header d-flex justify-content-between">
    
    <h1>
      
      Administrar equipos
    
    </h1>

    <ol class="breadcrumb ">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio /</a></li>
      
      <li class="active" style="margin-left:7px">Administrar equipos</li>
    
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
                <h3 class="card-title">Tabla de equipos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   <th style="width:10px">#</th>
                   <th>Nombre</th>
                   <th>Marca</th>
                   <th>Modelo</th>
                   <th>Estado</th>
                   <th>Descripción</th>
                   <th>Stock</th>
                   <th>Codigo</th>
                   <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Escaner Alambrico</td>
                    <td>Unitech</td>
                    <td>BJTR</td>
                    <td>Buen estado</td>
                    <td>Comprado de Computex</td>
                    <td>30</td>
                    <td>000010</td>
                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning"><i class="fa fa-pencil-alt"></i></button>

                        <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                      </div>  

                    </td>
                  </tr>
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
MODAL AGREGAR USUARIO
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

              <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">
              
              <div class="input-group">
              
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-th"></i>
                </button>

                <select class="form-control input-lg" name="nuevaCategoria">
                  
                  <option value="">Selecionar categoría</option>

                  <option value="Taladros">Taladros</option>

                  <option value="Andamios">Andamios</option>

                  <option value="Equipos para construcción">Equipos para construcción</option>

                </select>

              </div>

            </div>

                <!-- ENTRADA PARA EL CÓDIGO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-code"></i>
                </button>

                <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar código" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-user"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1">
              </div>

            </div>

               <!-- ENTRADA PARA EL MARCA -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-ring"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Marca" aria-label="Username" aria-describedby="basic-addon1">
              </div>

            </div>

               <!-- ENTRADA PARA EL MODELO -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fab fa-buromobelexperte"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Modelo" aria-label="Username" aria-describedby="basic-addon1">
              </div>

            </div>

               <!-- ENTRADA PARA EL Estado -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-fan"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Estado" aria-label="Username" aria-describedby="basic-addon1">
              </div>

            </div>

               <!-- ENTRADA PARA EL DESCRIPCION -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-pills"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Descripción" aria-label="Username" aria-describedby="basic-addon1">
              </div>

            </div>

               <!-- ENTRADA PARA EL STOCK -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-list-ol"></i>
                  </button>
                </div>
                <input type="number" class="form-control" placeholder="Stock" aria-label="Username" aria-describedby="basic-addon1">
              </div>

            </div>


            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" id="nuevaFoto" name="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 200 MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px">

            </div>
            

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar proveedor</button>

        </div>

      </form>

    </div>

  </div>

</div>



