<!-- ------Esto funciona, dejar comentado por si rompemos todo
<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2 class="supertitulo">Registro de usuario</h2>
        <form>
          <div class="row">
            <div class="col-md-6">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" id="nombre" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="text" id="apellido" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label for="usuario" class="form-label">Usuario</label>
              <input type="text" id="usuario" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" id="password" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label for="provincia" class="form-label">Provincia</label>
              <select id="provincia" class="form-select" required>
                <option value="">Seleccione una provincia</option>
                opciones de provincia
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="ciudad" class="form-label">Ciudad</label>
              <select id="ciudad" class="form-select" required>
                <option value="">Seleccione una ciudad</option>
                 opciones de ciudad 
              </select>
            </div>
            <div class="col-md-6">
              <label for="domicilio" class="form-label">Domicilio</label>
              <input type="text" id="domicilio" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="dni" class="form-label">DNI</label>
              <input type="text" id="dni" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
              <input type="date" id="fecha_nacimiento" class="form-control" required>
            </div>
          </div>
          <button type="submit" class="btn btn-success btn-lg btn-comprar supertitulo focus">Registrarse</button>
        </form>
      </div>
    </div>
  </div>
</section>
-->

<section class="container-fluid">
  <div class="container registro">
    <br><br><br><br>
    <div class="row justify-content-center mx-auto">
      <div class="col-md-8">
        <h2 class="supertitulo" id="login">Registro de Usuario</h2>
        <br><br><br>
        <form>
          <div class="registro-row">
            <div class="col-md-6">
              <label for="nombre" class="registro-label">Nombre</label>
              <input type="text" id="nombre" class="form-control registro-input" required onblur="this.value = this.value.toUpperCase()">
            </div>
          </div>
          <div class="registro-row">
            <div class="col-md-6">
              <label for="apellido" class="registro-label">Apellido</label>
              <input type="text" id="apellido" class="form-control registro-input" required onblur="this.value = this.value.toUpperCase()">
            </div>
          </div>
          <div class="registro-row">
            <div class="col-md-6">
              <label for="email" class="registro-label">Correo electrónico</label>
              <input type="email" id="email" class="form-control registro-input" required
              pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Por favor, ingrese un correo electrónico válido">
            </div>
          </div>
          <div class="registro-row">
            <div class="col-md-6">
              <label for="usuario" class="registro-label">Nombre de usuario</label>
              <input type="text" id="usuario" class="form-control registro-input" required>
            </div>
          </div>
          <div class="registro-row">
            <div class="col-md-6">
              <label for="password" class="registro-label">Contraseña</label>
              <input type="password" id="password" class="form-control registro-input" required
              pattern=".{6,8}" title="La contraseña debe tener entre 6 y 8 caracteres">
            </div>
          </div>
          <div class="registro-row">
            <div class="col-md-6">
              <label for="provincia" class="registro-label">Provincia</label>
              <input type="text" id="provincia" class="form-control registro-input" required>
            </div>
          </div>
          <div class="registro-row">
            <div class="col-md-6">
              <label for="ciudad" class="registro-label">Ciudad</label>
              <input type="text" id="ciudad" class="form-control registro-input" required>
            </div>
            </div>
            <div class="registro-row">
              <div class="col-md-6">
                <label for="domicilio" class="registro-label">Domicilio</label>
                <input type="text" id="domicilio" class="form-control registro-input" required>
              </div>
            </div>
            <div class="registro-row">
              <div class="col-md-6">
                <label for="dni" class="registro-label">DNI</label>
                <input type="text" id="dni" class="form-control registro-input" required>
              </div>
              </div>
              <div class="registro-row">
                <div class="col-md-6">
                  <label for="fecha_nacimiento" class="registro-label">Fecha de nacimiento</label>
                  <input type="date" id="fecha_nacimiento" class="form-control registro-input" required>
                </div>
              </div>
              <br><br>
              <button type="submit" class="btn btn-success btn-lg btn-comprar supertitulo focus">Registrarse</button>
              <button type="reset" class="btn btn-danger btn-lg btn-comprar supertitulo focus">Cancelar</button>
        </form>
        <br><br>
      </div>
    </div>
  </div>
</section>