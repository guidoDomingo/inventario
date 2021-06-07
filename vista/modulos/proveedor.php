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
          
          Agregar proveedor

        </button>

      </div>

      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabla de proveedor</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   <th style="width:10px">#</th>
                   <th>Nombre</th>
                   <th>Telefono</th>
                   <th>Pais</th>
                   <th>Ruc</th>
                   <th>Correo</th>
                   <th>Dirección</th>
                   <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Usuario Administrador</td>
                    <td>Telefono</td>
                    <td>Pais</td>
                    <td>Ruc</td>
                    <td>Correo</td>
                    <td>Dirección</td>
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
                    <i class="fa fa-user"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1">
              </div>

            </div>

               <!-- ENTRADA PARA EL TELEFONO -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-phone-volume"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Telefono" aria-label="Username" aria-describedby="basic-addon1">
              </div>

            </div>

               <!-- ENTRADA PARA EL PAIS -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-globe-asia"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Pais" aria-label="Username" aria-describedby="basic-addon1">
              </div>

            </div>

               <!-- ENTRADA PARA EL RUC -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-truck"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Ruc" aria-label="Username" aria-describedby="basic-addon1">
              </div>

            </div>

               <!-- ENTRADA PARA EL CORREO -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-mail-bulk"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Correo" aria-label="Username" aria-describedby="basic-addon1">
              </div>

            </div>

               <!-- ENTRADA PARA EL DIRECCIÓN -->
            
            <div class="form-group">
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-route"></i>
                  </button>
                </div>
                <input type="text" class="form-control" placeholder="Dirección" aria-label="Username" aria-describedby="basic-addon1">
              </div>

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



