<section class="conteiner-fluid">
  <div class="container-fluid login">
    <br><br><br><br><br><br><br>
<div class="row justify-content-center">
      <div class="col-md-4 col-lg-3">
        <div class="card shadow-lg">
          <div class="card-body">
            <h1 class="supertitulo" id="login">Iniciar Sesión</h1>
            <form>
              <div class="mb-3">
                <label for="username" class="form-label"><p class="supertexto">Usuario:<p></label>
                <input type="text" class="form-control" id="username" placeholder="Ingrese su usuario">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label"><p class="supertexto">Contraseña:<p></label>
                <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña"
                pattern=".{6,8}" title="La contraseña debe tener entre 6 y 8 caracteres">
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-primary btn-block" type="submit">Ingresar</button>
              </div>
              <div class="text-center">
                <button class="btn btn-link btn-sm" type="button">Reestablecer contraseña</button>
                <button class="btn btn-link btn-sm" type="button"><a href="<?php echo base_url('registro');?>">Registrarse</a></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>