<?php include('../Templates/cabecera.php'); ?>

<style>

/* body{
    background-color:lightgrey;

} */



  table, th, td{
    border: 1px solid black;
    border-collapse: collapse;
  }

  th, td{
      padding-top: top;
  }

  td{
text-align: top;

  }

  thead,th{
    background-color:#ABB2B9;

  }


</style>



<div class="col-md-3" >
<br><br><br><br>
<center><h2>Control de Pacientes</h2></center>
    <form action="" method="post">
        <div class="card" >
            <div class="card-header" style= "background-color:#ABB2B9 ; border: 1px solid black;" >
                <center><h4>Paciente Menor de Edad<svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                </svg> </h4></center>
            </div>
            <div class="card-body"  style="background-color:lightgrey ; border: 1px solid black;" >

            <div class="mb-3">
                    <label for="" class="form-label">Número Expediente</label>
                    <input type="Number" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                </div>
            
            <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Cédula</label>
                    <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                </div>

                <label for="" class="form-label"> Estado del Paciente: </label>
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btncheck1" autocomplete="off">
                    <label class="btn btn-outline-success" for="btncheck1">Activo</label>


                    <input type="radio" class="btn-check" name="btnradio" id="btncheck3" autocomplete="off">
                    <label class="btn btn-outline-danger" for="btncheck3">Inactivo</label>
                </div>
                <br><br>

                <div class="mb-3">
                    <label for="" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="edad" class="form-label">Edad </label>
                    <input type="number" class="form-control" name="edad" id="edad" aria-describedby="helpId" placeholder="">
                </div>


                <div class="mb-3">
                  <label for="" class="form-label">Dirección</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Ocupación</label>
                    <input type="text" class="form-control" name="escuela" id="escuela" aria-describedby="helpId" placeholder="">
                </div>

                <!-- <div class="mb-3">
                    <label for="" class="form-label">Como me Contacto?</label>
                    <select class="form-select form-select-lg" name="" id="">
                        <option selected>Seleccione uno</option>
                        <option value="">Redes Sociales</option>
                        <option value="">Recomendación</option>
                        <option value="">Página Web</option>
                        <option value="">Personal</option>
                    </select>
                </div> -->

                <div class="mb-3">
                    <label for="nombre" class="form-label">Fecha de Ingreso</label>
                    <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="">
                </div>

                

                <div class="mb-3">
                  <label for="" class="form-label">Notas</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                
                <center><button type="button" class="btn btn-outline-success">GUARDAR <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save2-fill" viewBox="0 0 16 16">
                <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z"/>
                </svg></button>

                <button type="button" class="btn btn-outline-primary">EDITAR <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg></button>

                <button type="button" class="btn btn-outline-danger"> ELIMINAR <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                </svg></button></center>
                


            </div>
        </div>

    </form>


</div>

<div class="col-md-9">
<br><br><br><br>
<center><h2>Registros de Pacientes menores de edad</h2></center>

       <!-- style= "width:max-content"; -->
    <div class="table-responsive">
        <table class="table" id="tabla" style="width: top";>       
            <thead class="table table-striped">
                <tr>
                    <th scope="col" class="text-center"> N° Exp </th>
                    <th scope="col" class="text-center"> Nombre </th>
                    <th scope="col" class="text-center"> Apellidos </th>
                    <th scope="col" class="text-center"> Cédula </th>
                    <th scope="col" class="text-center"> Estado </th>
                    <th scope="col" class="text-center"> Teléfono </th>
                    <th scope="col" class="text-center"> Fecha Nacimiento </th>
                    <th scope="col" class="text-center"> Edad </th>
                    <th scope="col" class="text-center"> Dirección </th>
                    <th scope="col" class="text-center"> Ocupación </th>
                    <!-- <th scope="col"> Contacto </th> -->
                    <th scope="col" class="text-center"> Fecha Ingreso </th>
                    <th scope="col" class="text-center"> Notas </th>
                    <th scope="col" class="text-center"> Acciones </th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <!-- <td>  </td> -->
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