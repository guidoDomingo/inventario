<div class="content-wrapper">

  <section class="content-header d-flex justify-content-between">
    
    <h1>
      
      Administrar usuarios
    
    </h1>

    <ol class="breadcrumb ">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio /</a></li>
      
      <li class="active" style="margin-left:7px">Administrar usuarios</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border mb-2">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          
          Agregar usuario

        </button>

      </div>

      <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   <th style="width:10px">#</th>
                   <th>Nombre</th>
                   <th>Usuario</th>
                   <th>Foto</th>
                   <th>Perfil</th>
                   <th>Estado</th>
                   <th>Último login</th>
                   <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Usuario Administrador</td>
                    <td>admin</td>
                    <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                    <td>Administrador</td>
                    <td><button class="btn btn-success btn-xs">Activado</button></td>
                    <td>2017-12-11 12:05:32</td>
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

<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  
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
            <h4 class="modal-title">Agregar usuario</h4>
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
                    <i class="fa fa-user"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-key"></i>
                </button>

                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-lock"></i>
                </button> 

                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-users"></i>
                </button>

                <select class="form-control input-lg" name="nuevoPerfil">
                  
                  <option value="">Selecionar perfil</option>

                  <option value="Administrador">Administrador</option>

                  <option value="Especial">Especial</option>

                  <option value="Vendedor">Vendedor</option>

                </select>

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

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>

      </form>

    </div>

  </div>

</div>



