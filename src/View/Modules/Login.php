<?php $loginController = new LoginController(); ?>

<div class="col-lg-4 mx-auto mt-5 mb-5">
	<form method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" name= "usuarios_email_l" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted">Ingrese su correo electronico</small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Contraseña</label>
      <input type="password" name="usuarios_password_l" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary btn-block">Ingresar</button>

    <?php $loginController->validationLogin(); ?>
  </form>
</div>

