<?php include('../Templates/cabecera.php'); ?>
<?php include('../secciones/contactos.php'); ?>

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


<br><br><br>

<div class="col-md-3">
<br><br><br><br>
<center><h2>Control de Contactos</h2></center>
    <form action="" method="post">
        <div class="card">
            <div class="card-header" style= "background-color:#ABB2B9 ; border: 1px solid black;">
                <center><h4>Contactos <svg xmlns="http://www.w3.org/2000/svg" width="25" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                    </svg>
                </h4></center>
            </div>
            <div class="card-body" style= "background-color:#ABB2B9; border: 1px solid black;">

            <div class="mb-3">
                    <label for="nombre" class="form-label"> Nombre </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                    <label for="" class="form-label">Email Secundario</label>
                    <input type="email" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre (Contacto de emergencia)</label>
                    <input type="text" class="form-control" name="text" id="text" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Email (Contacto de emergencia)</label>
                    <input type="email" class="form-control" name="contrasenia" id="contrasenia" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Teléfono (Contacto de emergencia)</label>
                    <input type="tel" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="">
                </div><br>

                

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
<center><h2>Registros de Contactos</h2></center>

       <!-- style= "width:max-content"; -->
    <div class="table-responsive">
        <table class="table" id="tabla" style="width:top";>       
            <thead class="table table-striped" ">
                <tr>
                    <th scope="col" class="text-center"> Nombre </th>
                    <th scope="col" class="text-center"> Email </th>
                    <th scope="col" class="text-center"> Teléfono </th>
                    <th scope="col" class="text-center"> Nombre (Contacto emergencia) </th>
                    <th scope="col" class="text-center"> Email (Contacto emergencia) </th>
                    <th scope="col" class="text-center"> Teléfono (Contacto emergencia) </th>
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