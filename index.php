
<!doctype html>
<html lang="en">



<head>
  <title>LOGIN</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="css/estilos.css"> -->
  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>

body{
  background-image: url("img/inicio3.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
}

.formulario{
  background: rgba(0, 0, 0, .4);
  padding: 40px;
  border-radius: 30px;
  box-shadow: 0 0 30px rgba(0, -0, -0, -0.568);
  color: white;
}
.form-control{
   background: rgba(0, 0, 0, .8);
   border-style: none;
   transition: 0.5s ease-in;
   box-shadow: none;
}

.form-control:focus{
    background: white;
    box-shadow: none;
    outline: none;
}

.form-control:placeholder{
  color: white;
}

.ingresar{
  background: #222A3F;
  padding: 10px;
  font-size: 16px;
  font-weight: 700!important;
  color: white;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.568);
  transition: 0.5s ease-in;
}

.ingresar:hover{
  color: white;
}

.olvide{
  color: white;
  text-decoration-style: none;
  text-decoration-line: none;
}

.olvide:hover{
  color: white;
  text-decoration-style: none;
  text-decoration-line: none;
  cursor: pointer;
}




</style>

</head>

<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" 
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>


<div class="container">
  <div class="row justify-content-center pt-5 mt-5 m-1">
    <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
      <form action="secciones/index.php" method="post" class="needs-validation">
        <div class="form-group text-center pt-3">
          <h1 class="text-light">INICIAR SESIÓN</h1>
        </div>
        <div class="form-group mx-sm-4  pt-3">
          <label for="" class="form-label">Usuario <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
          </svg></label>
          <input type="text"   name="usuario" id="usuario"class="form-control" placeholder="Ingrese su Usuario" required>
          <div class="valid-feedback">Valido</div>
          <div class="invalid-feedback">Por favor rellene este campo.</div>
        </div>

        <div class="form-group mx-sm-4 pt-4">
          <label for="" class="form-label">Contraseña <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
          </svg></label>
          <input type="password" name="contrasenia" id="contrasenia" class="form-control" placeholder= "Ingrese su Contraseña" required>
          <div class="valid-feedback">Valido</div>
          <div class="invalid-feedback">Por favor rellene este campo.</div>
        </div>
        <div class="form-group mx-sm-4 pt-5 text-center">
          <input type="submit" class="btn btn-block ingresar" value="INGRESAR">
        </div>
        <div class="form-group  mx-sm-4 text-center pt-5">
          <span class=""><a href="#" class="olvide">¿Olvido su contraseña?</a></span>
        </div>
        <div class="form-group">
         <span><a href="" class="olvide"></a></span>
        </div>
      </form>
    </div>
  </div>
</div>






















  <!-- <div class="container">
     <div class="row">
      <div class="col-md-4">

      </div>
      <div class="col-md-4">
        <br>
        <form action="secciones/index.php" method="post">
          <div class="card">
          <div class="card-header">
              Inicio de Sesion
          </div>
          <div class="card-body">
            

          <div class="mb-3">
            <label for="" class="form-label">Usuario</label>
            <input type="text"
              class="form-control" 
              name="usuario" 
              id="usuario" 
              aria-describedby="helpId" placeholder="Usuario">

            <small id="helpId" class="form-text text-muted">Escriba su Usuario</small>

          </div>
          <div class="mb-3">
            <label for="" class="form-label">Contraseña</label>
            <input type="password" 
              class="form-control" 
              name="contrasenia" 
              id="contrasenia" 
              aria-describedby="helpId" placeholder="Contraseña">
            <small id="helpId" class="form-text text-muted">Escriba su Contraseña</small> 
          </div>

          <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
          </div>

          </form>
      </div>
  </div> -->

  <header>
    <!-- place navbar here -->
  </header>
  <main>
    
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script> -->
</body>

</html>

