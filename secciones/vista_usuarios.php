<?php include('../Templates/cabecera.php'); ?>

<style>
  table, th, td{
    border: 1px solid black;
    border-collapse: collapse;
  }

  th, td{
      padding-top: top;
      text-align: center;
  }

  thead,th{
    background-color:#ABB2B9;
    

  }

  header{
    background-color:#A2D9CE;
  }

</style>

<br><br>

<!-- <br><br><br> -->
<div class="col-md-3">
<br><br><br><br>
<center><h2>Control de Usuarios</h2></center>
    <form action="" method="post">
        <div class="card">
            <div class="card-header" style= "background-color:#ABB2B9 ; border: 1px solid black;"> 
                <center><h4>Usuarios <svg xmlns="http://www.w3.org/2000/svg" width="40" height="25" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg> 
                </h4> </center>
            </div> 
            <div class="card-body" style="background-color:lightgrey ; border: 1px solid black;">

            <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre Usuario</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">IdRol</label>
                    <input type="text" class="form-control" name="idrol" id="idrol" aria-describedby="helpId" placeholder="" max="2">
                </div>

                <div class="mb-3">
                    <label for="pass" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="contra" id="pass" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" name="contra1" id="contrasenia1" aria-describedby="helpId" placeholder="">
                </div>

                

                <!-- <div class="btn-group" role="group" aria-label="Button group name">
                    <button type="button" class="btn btn-success">Agregar</button>
                    <button type="button" class="btn btn-warning">Editar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </div> -->
              

                <center><button type="button" class="btn btn-outline-success">REGISTRAR <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save2-fill" viewBox="0 0 16 16">
                <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z"/>
                </svg></button>
                <!-- <div class="alert alert-success">
                    <strong>Usuario Guardado!</strong> 
                </div> -->
                <button type="button" class="btn btn-outline-info">EDITAR <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg></button>

                <!-- <span class="spinner-border spinner-border-sm"></span> -->
                <button type="button" class="btn btn-outline-danger"> ELIMINAR <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                </svg></button></center>

            </div>
        </div>

    </form>


</div>

<div class="col-md-9">
<br><br><br><br>
<center><h2>Registro de Usuarios</h2></center>

       <!-- style= "width:max-content"; -->
    <div class="table-responsive">
        <table class="table" id="tabla" style="width: top;">       
            <thead class="table table-striped" ">
                <tr>
                    <th scope="col" class="text-center"> Nombre Usuario </th>
                    <th scope="col" class="text-center"> Email </th>
                    <th scope="col" class="text-center"> IdRol </th>
                    <th scope="col" class="text-center"> Contraseña </th>
                    <th scope="col" class="text-center"> Acciones </th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td class="text-center"> <button type="button" class="btn btn-outline-primary">Seleccionar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-index-thumb-fill" viewBox="0 0 16 16">
                        <path d="M8.5 1.75v2.716l.047-.002c.312-.012.742-.016 1.051.046.28.056.543.18.738.288.273.152.456.385.56.642l.132-.012c.312-.024.794-.038 1.158.108.37.148.689.487.88.716.075.09.141.175.195.248h.582a2 2 0 0 1 1.99 2.199l-.272 2.715a3.5 3.5 0 0 1-.444 1.389l-1.395 2.441A1.5 1.5 0 0 1 12.42 16H6.118a1.5 1.5 0 0 1-1.342-.83l-1.215-2.43L1.07 8.589a1.517 1.517 0 0 1 2.373-1.852L5 8.293V1.75a1.75 1.75 0 0 1 3.5 0z"/>
                        </svg></button> </td>
                </tr>

            </tbody>
        </table>
    </div>


</div>

<script>
var tabla= document.querySelector("#tabla");

var DataTable = new DataTable(tabla,{
    perPage:6,
    perPageSelect:[6,8,10,15],
    //activar ordenamiento
    sortable:false,
   integer:true,
   nextPrev:true,
   
   labels: {
    placeholder: "Buscar...",
    perPage: "Mostrar {select} Registros",
    noRows: "No hay registros para encontar",
    info: "Mostrando {start} a {end} de {rows} registros",
}

});

</script>

<?php include('../Templates/pie.php'); ?>