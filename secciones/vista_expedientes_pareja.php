<?php include('../Templates/cabecera.php'); ?>

<style>
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


<div class="col-md-3">
<br><br><br><br>
<center><h2>Control de Expedientes</h2></center>
    <form action="" method="post">
        <div class="card">
            <div class="card-header" style= "background-color:#ABB2B9 ; border: 1px solid black;">
                <center><h4>(1er Paciente) Pareja<svg xmlns="http://www.w3.org/2000/svg" width="40" height="25" fill="currentColor" class="bi bi-file-medical-fill" viewBox="0 0 16 16">
                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8.5 4.5v.634l.549-.317a.5.5 0 1 1 .5.866L9 6l.549.317a.5.5 0 1 1-.5.866L8.5 6.866V7.5a.5.5 0 0 1-1 0v-.634l-.549.317a.5.5 0 1 1-.5-.866L7 6l-.549-.317a.5.5 0 0 1 .5-.866l.549.317V4.5a.5.5 0 1 1 1 0zM5.5 9h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zm0 2h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
                </svg> </h4></center>
            </div>
            <div class="card-body" style="background-color:lightgrey ; border: 1px solid black;">
                <div class="mb-3">
                    <label for="" class="form-label">Número expediente</label>
                    <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="Numero Expediente">
                </div>

                <label for="" class="form-label"> Estado: </label>
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btncheck1" autocomplete="off">
                    <label class="btn btn-outline-success" for="btncheck1">Activo</label>


                    <input type="radio" class="btn-check" name="btnradio" id="btncheck3" autocomplete="off">
                    <label class="btn btn-outline-danger" for="btncheck3">Inactivo</label>
                </div>
                <br><br>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
                </div>

                <!-- <label class="custom-control custom-radio"> Sexo <br>
                    <input type="radio" name="sexo" id="Masculino" value="checkedValue" class="custom-control-input"> Masculino <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
                    </svg><br>
                    <input type="radio" name="sexo" id="Femenino" value="checkedValue" class="custom-control-input"> Femenino <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z"/>
                    </svg>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"></span>
                </label> -->

                <!-- <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                <label class="custom-control-label" for="customRadio">Masculino</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                <label class="custom-control-label" for="customRadio2">Femenino</label>
                </div> -->
            
                <label class="custom-control custom-radio"> Sexo <br>
             <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="Sexo" value="Masculino" >Masculino <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
                    </svg>
                <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="Sexo" value="Femenino">Femenino <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z"/>
                    </svg>
                <label class="form-check-label" for="radio2"></label>
                </div>
             </label><br><br>
               
                


                <div class="mb-3">
                    <label for="nombre" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Edad</label>
                    <input type="number" class="form-control" name="edad" id="edad" aria-describedby="helpId" placeholder="Indique edad">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Nivel educativo</label>
                    <select class="form-select form-select" name="" id="">
                        <option selected>Seleccione uno</option>
                        <option value="">Primaria</option>
                        <option value="">Secundaria</option>
                        <option value="">Técnica</option>
                        <option value="">Universitaria</option>
                    </select>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="nivel" value="nivel">
                    <label class="form-check-label" for="">Completa</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="nivel" value="nivel">
                    <label class="form-check-label" for="">Incompleta</label>
                </div>
                <br><br>

                

                <div class="mb-3">
                    <label for="nombre" class="form-label">Ocupación / Profesión</label>
                    <input type="text" class="form-control" name="escuela" id="escuela" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Nacionalidad</label>
                    <select class="form-select form-select" name="" id="">
                        <option selected>Seleccione uno</option>
                        <option value="">Afganistán</option>
                        <option value="">Alemania</option>
                        <option value="">arabia Saudita</option>
                        <option value="">Argentina</option>
                        <option value="">Australia</option>
                        <option value="">Austria</option>
                        <option value="">Belgica</option>
                        <option value="">Bolivia</option>
                        <option value="">Brasil</option>
                        <option value="">Camboya</option>
                        <option value="">Camerun</option>
                        <option value="">Canadá</option>
                        <option value="">Chile</option>
                        <option value="">China</option>
                        <option value="">Colombia</option>
                        <option value="">Corea</option>
                        <option value="">Costa Rica</option>
                        <option value="">Cuba</option>
                        <option value="">Dinamarca</option>
                        <option value="">Ecuador</option>
                        <option value="">Egipto</option>
                        <option value="">El Salvador</option>
                        <option value="">Escocia</option>
                        <option value="">España</option>
                        <option value="">Estados Unidos</option>
                        <option value="">Estonia</option>
                        <option value="">Etiopia</option>
                        <option value="">Filipinas</option>
                        <option value="">Finlandia</option>
                        <option value="">Francia</option>
                        <option value="">Gales</option>
                        <option value="">Grecia</option>
                        <option value="">Guatemala</option>
                        <option value="">Haití</option>
                        <option value="">Holanda</option>
                        <option value="">Honduras</option>
                        <option value="">Indonesia</option>
                        <option value="">Inglaterra</option>
                        <option value="">Irak</option>
                        <option value="">Irán</option>
                        <option value="">Irlanda</option>
                        <option value="">Israel</option>
                        <option value="">Italia</option>
                        <option value="">Japón</option>
                        <option value="">Jordania</option>
                        <option value="">Laos</option>
                        <option value="">Letonia</option>
                        <option value="">Lituania</option>
                        <option value="">Malasia</option>
                        <option value="">Marruecos</option>
                        <option value="">México</option>
                        <option value="">Nicaragua</option>
                        <option value="">Noruega</option>
                        <option value="">Nueva Zelanda</option>
                        <option value="">Panamá</option>
                        <option value="">Paraguay</option>
                        <option value="">Perú</option>
                        <option value="">Polonia</option>
                        <option value="">Portugal</option>
                        <option value="">Puerto Rico</option>
                        <option value="">Republica Dominicana</option>
                        <option value="">Rumania</option>
                        <option value="">Rusia</option>
                        <option value="">Suecia</option>
                        <option value="">Suiza</option>
                        <option value="">Tailandia</option>
                        <option value="">Taiwán</option>
                        <option value="">Turquía</option>
                        <option value="">Ucrania</option>
                        <option value="">Uruguay</option>
                        <option value="">Venezuela</option>
                        <option value="">Vietnam</option>
                    </select>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Dirección</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>


                <div class="mb-3">
                    <label for="nombre" class="form-label">Fecha de Evaluacion / Intervención</label>
                    <input type="date" class="form-control" name="nombre" id="Estado" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Motivo del informe</label>
                    <input type="text" class="form-control" name="escuela" id="escuela" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Resumen del informe</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Procedimientos utilizados</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Historia Familiar breve dentro del contexto familiar y social</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Validez de los resultados del informe</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Observaciones</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Resultados</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Recomendaciones</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Impresión diagnóstica y pronóstico</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div><br><br>

                <div class="card-header" style= "background-color:#ABB2B9 ; border: 1px solid black;">
                    <h4>(2do Paciente) Pareja<svg xmlns="http://www.w3.org/2000/svg" width="40" height="25" fill="currentColor" class="bi bi-file-medical-fill" viewBox="0 0 16 16">
                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8.5 4.5v.634l.549-.317a.5.5 0 1 1 .5.866L9 6l.549.317a.5.5 0 1 1-.5.866L8.5 6.866V7.5a.5.5 0 0 1-1 0v-.634l-.549.317a.5.5 0 1 1-.5-.866L7 6l-.549-.317a.5.5 0 0 1 .5-.866l.549.317V4.5a.5.5 0 1 1 1 0zM5.5 9h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zm0 2h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
                    </svg> </h4>
                </div><br>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
                </div>

                <label class="custom-control custom-radio"> Sexo <br>
             <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="Sexo" value="Masculino" >Masculino <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
                    </svg>
                <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="Sexo" value="Femenino">Femenino <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z"/>
                    </svg>
                <label class="form-check-label" for="radio2"></label>
                </div>
             </label><br><br>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Edad</label>
                    <input type="number" class="form-control" name="edad" id="edad" aria-describedby="helpId" placeholder="Indique edad">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Nivel educativo</label>
                    <select class="form-select form-select" name="" id="">
                        <option selected>Seleccione uno</option>
                        <option value="">Primaria</option>
                        <option value="">Secundaria</option>
                        <option value="">Técnica</option>
                        <option value="">Universitaria</option>
                    </select>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="nivel" value="nivel">
                    <label class="form-check-label" for="">Completa</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="nivel" value="nivel">
                    <label class="form-check-label" for="">Incompleta</label>
                </div>
                <br><br>

                

                <div class="mb-3">
                    <label for="nombre" class="form-label">Ocupación / Profesión</label>
                    <input type="text" class="form-control" name="escuela" id="escuela" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Nacionalidad</label>
                    <select class="form-select form-select" name="" id="">
                        <option selected>Seleccione uno</option>
                        <option value="">Afganistán</option>
                        <option value="">Alemania</option>
                        <option value="">arabia Saudita</option>
                        <option value="">Argentina</option>
                        <option value="">Australia</option>
                        <option value="">Austria</option>
                        <option value="">Belgica</option>
                        <option value="">Bolivia</option>
                        <option value="">Brasil</option>
                        <option value="">Camboya</option>
                        <option value="">Camerun</option>
                        <option value="">Canadá</option>
                        <option value="">Chile</option>
                        <option value="">China</option>
                        <option value="">Colombia</option>
                        <option value="">Corea</option>
                        <option value="">Costa Rica</option>
                        <option value="">Cuba</option>
                        <option value="">Dinamarca</option>
                        <option value="">Ecuador</option>
                        <option value="">Egipto</option>
                        <option value="">El Salvador</option>
                        <option value="">Escocia</option>
                        <option value="">España</option>
                        <option value="">Estados Unidos</option>
                        <option value="">Estonia</option>
                        <option value="">Etiopia</option>
                        <option value="">Filipinas</option>
                        <option value="">Finlandia</option>
                        <option value="">Francia</option>
                        <option value="">Gales</option>
                        <option value="">Grecia</option>
                        <option value="">Guatemala</option>
                        <option value="">Haití</option>
                        <option value="">Holanda</option>
                        <option value="">Honduras</option>
                        <option value="">Indonesia</option>
                        <option value="">Inglaterra</option>
                        <option value="">Irak</option>
                        <option value="">Irán</option>
                        <option value="">Irlanda</option>
                        <option value="">Israel</option>
                        <option value="">Italia</option>
                        <option value="">Japón</option>
                        <option value="">Jordania</option>
                        <option value="">Laos</option>
                        <option value="">Letonia</option>
                        <option value="">Lituania</option>
                        <option value="">Malasia</option>
                        <option value="">Marruecos</option>
                        <option value="">México</option>
                        <option value="">Nicaragua</option>
                        <option value="">Noruega</option>
                        <option value="">Nueva Zelanda</option>
                        <option value="">Panamá</option>
                        <option value="">Paraguay</option>
                        <option value="">Perú</option>
                        <option value="">Polonia</option>
                        <option value="">Portugal</option>
                        <option value="">Puerto Rico</option>
                        <option value="">Republica Dominicana</option>
                        <option value="">Rumania</option>
                        <option value="">Rusia</option>
                        <option value="">Suecia</option>
                        <option value="">Suiza</option>
                        <option value="">Tailandia</option>
                        <option value="">Taiwán</option>
                        <option value="">Turquía</option>
                        <option value="">Ucrania</option>
                        <option value="">Uruguay</option>
                        <option value="">Venezuela</option>
                        <option value="">Vietnam</option>
                    </select>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Dirección</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>


                <div class="mb-3">
                    <label for="nombre" class="form-label">Fecha de Evaluacion / Intervención</label>
                    <input type="date" class="form-control" name="nombre" id="Estado" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Motivo del informe</label>
                    <input type="text" class="form-control" name="escuela" id="escuela" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Resumen del informe</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Procedimientos utilizados</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Historia Familiar breve dentro del contexto familiar y social</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Validez de los resultados del informe</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Observaciones</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Resultados</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Recomendaciones</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Impresión diagnóstica y pronóstico</label>
                  <textarea class="form-control" name="" id="" rows="3"></textarea>
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
<center><h2>Registros de expedientes parejas</h2></center>

    <div class="table-responsive">
        <table  class="table" id="tabla" style="width:top";>
            <thead class="table table-striped">
                <tr>
                    <th scope="col" class="text-center"> N° Exp </th>
                    <th scope="col" class="text-center"> Estado </th>
                    <th scope="col" class="text-center"> Nombre </th>
                    <th scope="col" class="text-center"> Sexo </th>
                    <th scope="col" class="text-center"> Fecha nacimiento </th>
                    <th scope="col" class="text-center"> Edad </th>
                    <th scope="col" class="text-center"> Nivel educativo </th>
                    <th scope="col" class="text-center"> Ocupación/Profesión </th>
                    <th scope="col" class="text-center"> Nacionalidad </th>
                    <th scope="col" class="text-center"> Residencia </th>
                    <th scope="col" class="text-center"> Fecha Evaluación/Intervención </th>
                    <th scope="col" class="text-center"> Motivo del informe </th>
                    <th scope="col" class="text-center"> Resumen del informe </th>
                    <th scope="col" class="text-center"> Procedimientos utilizados </th>
                    <th scope="col" class="text-center"> Historia familiar </th>
                    <th scope="col" class="text-center"> Validez de los resultados </th>
                    <th scope="col" class="text-center"> Observaciones </th>
                    <th scope="col" class="text-center"> Resultados </th>
                    <th scope="col" class="text-center"> Recomendaciones </th>
                    <th scope="col" class="text-center"> Impresión diagnóstica y pronóstico </th>
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