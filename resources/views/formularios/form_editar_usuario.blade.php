
<section >



<div class="row" >

<div class="col-md-12">

  <div class="box box-primary box-gris">
    <div class="box-header with-border my-box-header">
        <h3 class="box-title"><strong>Asignar rol</strong></h3>
    </div><!-- /.box-header -->
   
    <div id="zona_etiquetas_roles" style="background-color:white;" >
    Roles asignados:
    @foreach($usuario->getRoles() as $rl)
      <span class="label label-warning" style="margin-left:10px;">{{ $rl }} </span> 
    @endforeach
    
    
    </div>
    <div class="box-body">

       
          <div class="col-md-12">
            <div class="form-group">
            <label class="col-sm-2" for="tipo">Rol a asignar*</label>
                <div class="col-sm-6" >         
                  <select id="rol1" name="rol1" class="form-control">

                           @foreach($roles as $rol)
                           <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                           @endforeach
                  </select>    
                </div>

                <div class="col-sm-4" >
                

                  <div class="box-footer col-xs-12 box-gris ">
                    <a href="/asignar_rol/{{ $usuario->id }}/{{ $rol->id }}" class="btn btn-xs btn-primary" onclick="cargar_formulario(1);">Agregar rol</a>
                  </div>

            </div>

          </div>
       
          <hr>

           <div class="col-md-12">
            <div class="form-group">
            <label class="col-sm-2" for="tipo">Rol a quitar*</label>
                <div class="col-sm-6" >         
                  <select id="rol2" name="rol2" class="form-control">
                           @foreach($roles as $rol)
                           <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                           @endforeach
                  </select>    
                </div>

              
                <div class="box-footer col-xs-12 box-gris ">
                    <a href="/quitar_rol/{{ $usuario->id }}/{{ $rol->id }}" class="btn btn-xs btn-primary" onclick="cargar_formulario(1);">Agregar rol</a>
                  </div>

            </div>

          </div>
    </div>

  </div> <!--box -->


  <div class="box box-primary box-gris">
 
      <div class="box-header with-border my-box-header">
        <h3 class="box-title"><strong>Editar Informacion Usuario</strong></h3>
      </div><!-- /.box-header -->
      <hr style="border-color:white;" />
      <div id="notificacion_E2" ></div>
      <div class="box-body">
              
        

          <form   action="{{ url('editar_usuario') }}"  method="post" id="f_editar_usuario"  class="formentrada"  >
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                <input type="hidden" name="id_usuario" value="{{ $usuario->id }}"> 

          <div class="col-md-6">
              <div class="form-group">
                    <label class="col-sm-2" for="nombre">Nombres*</label>
                    <div class="col-sm-10" >
                      <input type="text" class="form-control" id="nombres" name="nombres"  value="{{ $usuario->name }}"  required   >
                       </div>
              </div><!-- /.form-group -->
          </div><!-- /.col -->
                
          <div class="col-md-6">
              <div class="form-group">
                    <label class="col-sm-2" for="apellido">Apellido*</label>
                    <div class="col-sm-10" >
                    <input type="text" class="form-control" id="apellidos" name="apellidos" "  value="{{ $usuario->apellidos }}" required >
                    </div>
              </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-2" for="celular">Telefono*</label>
                       
                       <div class="col-sm-10" >
                        <input type="text" class="form-control" id="telefono" name="telefono"  value="{{ $usuario->telefono  }}" required >
                       </div>

                      </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="box-footer col-xs-12 box-gris ">
                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
          </div>

          </form>

        
                
                    
      </div>
                    
    </div>







  <div class="box box-primary   box-gris" style="margin-bottom: 200px;">
    <div class="box-header with-border my-box-header">
        <h3 class="box-title"><strong>Acceso al sistema</strong></h3>
    </div><!-- /.box-header -->
    <div id="notificacion_E3" ></div>
    <div class="box-body">


                  <div class="box-header with-border my-box-header col-md-12" style="margin-bottom:15px;margin-top: 15px;">
                    <h3 class="box-title">Datos de acceso</h3>
                  </div>
       

                <form   action="{{ url('editar_acceso') }}"  method="post" id="f_editar_acceso"  class="formentrada"  >
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                <input type="hidden" name="id_usuario" value="{{ $usuario->id }}"> 

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-2" for="email">eMail*</label>
                    <div class="col-sm-10" >
                    <input type="email" class="form-control" id="email" name="email"  value="{{ $usuario->email  }}"  required >
                    </div>

                    </div><!-- /.form-group -->

                  </div><!-- /.col -->

                  <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-2" for="email">Nuevo Password*</label>
                    <div class="col-sm-10" >
                    <input type="password" class="form-control" id="password" name="password"  required >
                    </div>

                    </div><!-- /.form-group -->

                  </div><!-- /.col -->


                    <div class=" col-xs-12 box-gris ">
                                        <button type="submit" class="btn btn-primary">Actualizar Acceso</button>
                    </div>

                   </form>

         </div>

  </div>
  </div>                     
</div>
</section>