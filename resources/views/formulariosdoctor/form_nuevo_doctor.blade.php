


<section class="content" >

 <div class="col-md-12">

  <div class="box box-primary  box-gris">
 
    <div class="box-header with-border my-box-header">
      <h3 class="box-title"><strong>Nuevo Doctor</strong></h3>
    </div><!-- /.box-header -->
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <hr style="border-color:white;" />
 
    <div class="box-body">
              
      <form   action="{{ url('/crear_doctor') }}"  method="post" id="f_crear_Doctor" class="formentrada" >
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 

          <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-2" for="direccion">Direccion</label>
                    <div class="col-sm-10" >
                      <input type="text" class="form-control" id="nombres" name="direccion"  required   >
                       </div>
                  </div><!-- /.form-group -->

           

          </div><!-- /.col -->

                
        <div class="col-md-6">
                  <div class="form-group">
									  <label class="col-sm-2" for="telefono">Telefono</label>
                    <div class="col-sm-10" >
										<input type="text" class="form-control" id="telefono" name="telefono" " required >
                    </div>
									</div><!-- /.form-group -->

				</div><!-- /.col -->

        <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-2" for="celular">celular*</label>
                    <div class="col-sm-10" >
                    <input type="text" class="form-control" id="celular" name="celular" " required >
                    </div>
                  </div><!-- /.form-group -->

        </div>

        <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-2" for="celular">cod_vet*</label>
                       
                       <div class="col-sm-10" >
                        <input type="text" class="form-control" id="cod_vet" name="cod_vet" required >
                       </div>

                      </div><!-- /.form-group -->

        </div><!-- /.col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-2" for="cedula">cedula*</label>
                    <div class="col-sm-10" >
                    <input type="cedula" class="form-control" id="cedula" name="cedula"  required >
                    </div>

                    </div><!-- /.form-group -->

                  </div><!-- /.col -->

                  <div class="col-sm-10" >
                         
                         <select id="user_sel" name="user_sel" class="form-control" required>
                             @foreach($users as $user)
                             <option value="{{ $user->id }}">{{ $user->name }}</option>
                             @endforeach
                       </select>
                         
                    </div>

                    <div class="box-footer col-xs-12 box-gris ">
                                        <button type="submit" class="btn btn-primary">Crear Nuevo Doctor</button>
                    </div>


                   </form>
                    
                    </div>
                    
                    </div>
                       
                    </div>
</section>


