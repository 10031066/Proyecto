<br><input class="btn btn-primary btn-xs" type="submit" value="Cambiar contraseña" value="Mostrar" onclick="mostrar()"><br> <br>            
            <HR>
            <div class="panel panel-default" id='oculto' style='display:none;'>
              <div class="panel-body">
			<form action="#" method="POST">
                <div class="col-md-12">
                   <label for="email1" class="col-lg-6 control-label">Contraseña actual: </label>
                   <div class="col-lg-6">
                   <input type="password" class="form-control" name="antigua">
                </div>
              </div>

                <div class="col-md-12">
                   <label for="email1" class="col-lg-6 control-label">Nueva contraseña: </label>
                   <div class="col-lg-6">
                   <input type="password" class="form-control" name="email1">
                </div>
              </div>

              <div class="col-md-12">
                  <label for="email2" class="col-lg-6 control-label">Confirmar contraseña: </label>
                <div class="col-lg-6">
                  <input type="password" class="form-control" name="email2">
                </div>
              </div>
              
              <input class="btn btn-primary btn-xs" type="submit" value="Guardar" value="Ocultar" onclick="ocultar()">
			</form>
              </div>
            </div>