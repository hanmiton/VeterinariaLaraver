


<section class="content" >

 <div class="col-md-12">

  <div class="box box-primary  box-gris">
 
    <div class="box-header with-border my-box-header">
      <h3 class="box-title"><strong>Nuevo Perfil</strong></h3>
    </div><!-- /.box-header -->
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <hr style="border-color:white;" />
 
    <div class="box-body">
              
      <form   action="{{ url('/crear_doctor') }}"  method="post" id="f_crear_Doctor" class="formentrada" >
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 

          <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-2" for="Especialidad">Especialidad</label>
                    <div class="col-sm-10" >
                      <input type="text" class="form-control" id="nombres" name="Especialidad"  required   >
                       </div>
                  </div><!-- /.form-group -->

           

          </div><!-- /.col -->

          <script type="text/javascript">
            
            var dia = selectdocuomentebyname('lues');

            var dia = 1;
          </script>

         
                         <label class="col-sm-2" for="Especialidad">Martes</label>
                      <div class="col-sm-10" >
                      <input type="checkbox" class="form-control" id="nombres" name="lues"  required   >
                       </div>
              @if (true)
                  <div class="form-group">
                   
                    
                  </div>
                  
        <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-2" for="lini">lunes  hora inicio</label>
                    <div class="col-sm-10" >
                    <input type="time" class="form-control" id="lini" name="lini" " required >
                    </div>
                  </div><!-- /.form-group -->

        </div><!-- /.col -->
           <div class="form-group">
                    <label class="col-sm-2" for="lini">lunes hora fin</label>
                    <div class="col-sm-10" >
                    <input type="time" class="form-control" id="lfin" name="lfin" " required >
                    </div>
                  </div><!-- /.form-group -->

        </div><!-- /.col -->
           

            @endif

              @if (false)
                  <div class="form-group">
                    <label class="col-sm-2" for="Especialidad">Miercoles</label>
                    <div class="col-sm-10" >
                      <input type="checkbox" class="form-control" id="nombres" name="lues"  required   >
                       </div>
                  </div>
                  
        <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-2" for="lini">lini</label>
                    <div class="col-sm-10" >
                    <input type="date" class="form-control" id="lini" name="lini" " required >
                    </div>
                  </div><!-- /.form-group -->

        </div><!-- /.col -->
           
           

            @endif
              @if (false)
                  <div class="form-group">
                    <label class="col-sm-2" for="Especialidad">Jueves</label>
                    <div class="col-sm-10" >
                      <input type="checkbox" class="form-control" id="nombres" name="lues"  required   >
                       </div>
                  </div>
                  
        <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-2" for="lini">lini</label>
                    <div class="col-sm-10" >
                    <input type="date" class="form-control" id="lini" name="lini" " required >
                    </div>
                  </div><!-- /.form-group -->

        </div><!-- /.col -->
           
           

            @endif
              @if (false)
                  <div class="form-group">
                    <label class="col-sm-2" for="Especialidad">Viernes</label>
                    <div class="col-sm-10" >
                      <input type="checkbox" class="form-control" id="nombres" name="lues"  required   >
                       </div>
                  </div>
                  
        <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-2" for="lini">lini</label>
                    <div class="col-sm-10" >
                    <input type="date" class="form-control" id="lini" name="lini" " required >
                    </div>
                  </div><!-- /.form-group -->

        </div><!-- /.col -->
           
           

            @endif
              @if (false)
                  <div class="form-group">
                    <label class="col-sm-2" for="Especialidad">SAbado</label>
                    <div class="col-sm-10" >
                      <input type="checkbox" class="form-control" id="nombres" name="lues"  required   >
                       </div>
                  </div>
                  
        <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-2" for="lini">lini</label>
                    <div class="col-sm-10" >
                    <input type="date" class="form-control" id="lini" name="lini" " required >
                    </div>
                  </div><!-- /.form-group -->

        </div><!-- /.col -->
           
           

            @endif

            
              @if (false)
                  <div class="form-group">
                    <label class="col-sm-2" for="Especialidad">Domingo</label>
                    <div class="col-sm-10" >
                      <input type="checkbox" class="form-control" id="nombres" name="lues"  required   >
                       </div>
                  </div>
                  
        <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-2" for="lini">lini</label>
                    <div class="col-sm-10" >
                    <input type="date" class="form-control" id="lini" name="lini" " required >
                    </div>
                  </div><!-- /.form-group -->

        </div><!-- /.col -->
           
           

            @endif



           <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-2" for="Especialidad">Enfermedades</label>
                    <div class="col-sm-10" >
                      <input type="text" class="form-control" id="nombres" name="Especialidad"  required   >
                       </div>
                  </div><!-- /.form-group -->

           

          </div><!-- /.col -->

        

        <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-2" for="lfin">lfin*</label>
                    <div class="col-sm-10" >
                    <input type="text" class="form-control" id="lfin" name="lfin" " required >
                    </div>
                  </div><!-- /.form-group -->

        </div>

        <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-2" for="mini">mini*</label>
                       
                       <div class="col-sm-10" >
                        <input type="text" class="form-control" id="mini" name="mini" required >
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
                         
                         <select id="doctor_sel" name="doctor_sel" class="form-control" required>
                             @foreach($doctores as $doctor)
                             <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
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


