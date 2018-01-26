
<section >



<div class="row" >

<div class="col-md-12">

  <div class="box box-primary box-gris">

    <!--
    <div class="box-header with-border my-box-header">
        <h3 class="box-title"><strong>Asiganar Usuario</strong></h3>
    </div>
   -->
   <!--
    <div id="zona_etiquetas_usuarios" style="background-color:white;" >
    Usurio  Agignar:
  
    
    </div>
    -->
    <div class="box-body">

          <div class="col-md-12">
            <div class="form-group">
            <label class="col-sm-2" for="tipo">Usuario asignar*</label>
                <div class="col-sm-6" >         
                  <select id="rol1" name="rol1" class="form-control">

                           @foreach($usuarios as $usuario)
                           <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                           @endforeach
                  </select>    
                </div>

                <div class="col-sm-4" >

                  <button type="button" class="btn btn-xs btn-primary" onclick="asignar_rol({{ $usuario->id }});" >Asignar usuario</button>    
                </div>


            </div>

          </div>
          <hr>

           <div class="col-md-12">
            <div class="form-group">
            <label class="col-sm-2" for="tipo">Usuario a quitar*</label>
                <div class="col-sm-6" >         
                  <select id="rol2" name="rol2" class="form-control">
                           @foreach($usuarios as $usuario)
                           <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                           @endforeach
                  </select>    
                </div>

                <div class="col-sm-4" >         
                  <button type="button" class="btn btn-xs btn-primary" onclick="quitar_usuario({{ $usuario->id }});" >Quitar usuario</button>    
                </div>


            </div>

          </div>
    </div>


  
  </div>                     
</div>





</div> <!--box -->


  <div class="box box-primary box-gris">
 
      <div class="box-header with-border my-box-header">
        <h3 class="box-title"><strong>Editar Informacion Doctor</strong></h3>
      </div><!-- /.box-header -->
      <hr style="border-color:white;" />
      <div id="notificacion_E2" ></div>
      <div class="box-body">
              
        

          <form   action="{{ url('editar_doctor') }}"  method="post" id="f_editar_doctor"  class="formentrada"  >
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                <input type="hidden" name="id_doctor" value="{{ $doctor->id }}"> 

          <div class="col-md-6">
              <div class="form-group">
                    <label class="col-sm-2" for="nombre">Direccion*</label>
                    <div class="col-sm-10" >
                      <input type="text" class="form-control" id="nombres" name="direccion"  value="{{ $doctor->direccion }}"  required   >
                       </div>
              </div><!-- /.form-group -->
          </div><!-- /.col -->
                
          <div class="col-md-6">
              <div class="form-group">
                    <label class="col-sm-2" for="telefono">telefono*</label>
                    <div class="col-sm-10" >
                    <input type="text" class="form-control" id="telefono" name="telefonos" "  value="{{ $doctor->telefono }}" required >
                    </div>
              </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-2" for="celular">celular*</label>
                       
                       <div class="col-sm-10" >
                        <input type="text" class="form-control" id="celular" name="celular"  value="{{ $doctor->celular  }}" required >
                       </div>

                      </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-2" for="cod_vet">cod_vet*</label>
                       
                       <div class="col-sm-10" >
                        <input type="text" class="form-control" id="cod_vet" name="cod_vet"  value="{{ $doctor->cod_vet  }}" required >
                       </div>

                      </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-2" for="cedula">cedula*</label>
                       
                       <div class="col-sm-10" >
                        <input type="text" class="form-control" id="cedula" name="cedula"  value="{{ $doctor->cedula  }}" required >
                       </div>

                      </div><!-- /.form-group -->
          </div><!-- /.col -->


          <div class="box-footer col-xs-12 box-gris ">
                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
          </div>

          </form>

        
                
                    
      </div>
                    
    </div>





</section>