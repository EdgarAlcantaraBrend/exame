<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Fotos cobro</title>
  </head>
  <body style="background-color: #87d899;">
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <strong><h2>BONO</h2></strong>
            <div class="card" style="background-color: #87d899;">
                <div class="card-body" >
                    <form method="post" onsubmit="return calcular()" id="bono">
                    <h3>Datos del Empleado</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="sueldo">Sueldo</label>
                                <input type="number" class="form-control" id="sueldo" name="sueldo">
                            </div>
                            <div class="col-sm-6">
                                <label for="edad">Edad</label>
                                <input type="number" class="form-control" id="edad" name="edad">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="sexo">Sexo</label>
                                <select name="sexo" id="sexo" class="form-control">
                                    <option disabled="">Selecciona una opcion</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="nacionalidad">Nacionalidad</label>
                                <select name="nacionalidad" id="nacionalidad" class="form-control">
                                    <option disabled="">Selecciona una opcion</option>
                                    <option value="nacional">Nacional</option>
                                    <option value="extranjero">Exranjero</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <strong><h5>Cursos</h5></strong>
                            </div>
                            <div class="col">
                                <strong><h5>Antiguedad</h5></strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                            
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" name="cursos" id="php" value="php"> 
                                        <label for="php">PHP</label>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" name="cursos" id="java" value="java"> 
                                        <label for="java">Java</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" name="cursos" id="asp" value="asp"> 
                                        <label for="asp">ASP Net</label>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" name="cursos" id="oracle" value="oracle"> 
                                        <label for="oracle">Oracle</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" name="cursos" id="vb" value="vb"> 
                                        <label for="vb">VB Net</label>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" name="cursos" id="bd" value="bd"> 
                                        <label for="bd">Introduccion a BD</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-4">
                            
                                <div class="row">
                                    <div class="col">
                                        <input type="radio" name="antiguedad" id="1a5" value="1a5"> 
                                        <label for="1a5">1 a 5 años </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="radio" name="antiguedad" id="6a10" value="6a10"> 
                                        <label for="6a10">6 a 10 años</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="radio" name="antiguedad" id="10" value="10"> 
                                        <label for="10">Mas de 10</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6"></div>
                                    <div class="col">
                                        <button class="btn btn-primary btn-block">Calcular</button>
                                        <span class="btn btn-warning btn-block" onclick="limpiarFormulario()">Nuevo Cálculo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" style="margin-top: -29px;">
                                <label for="">Bono:</label>
                                <input type="text" id="cantidadPagar" class="form-control" readonly>
                                <div id="res"></div>
                            </div>
                            <div class="col-sm-6"></div>
                            <div class="col text-center" style="margin-top: -35px;">
                                        <button class="btn btn-dark  btn-block" id="salir">Salir</button>
                                    </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
  </body>
</html>
<script>



    function calcular(){
    

    //sueldo
    let sueldo = parseInt($('#sueldo').val());
    if (sueldo < 1) {
        swal("La cantidad debe ser mayor a cero");
        return false;
    }

    //edad
    let edad = parseInt($('#edad').val());
    if (edad < 1) {
        swal("debes agregar tu edad");
        return false;
    }

    //sexo
    let sexo = $('#sexo').val();
    if (sexo == "") {
        swal("Debes seleccionar el sexo");
        return false;
    }


    //nacionalidad
    let nacionalidad = $('#nacionalidad').val();
    if (nacionalidad == "") {
        swal("Debes seleccionar una nacionalidad");
        return false;
    }


    //obtenemos el valor del radio 
    let antiguedad = $('input:radio[name=antiguedad]:checked').val();
    if (antiguedad == undefined) {
        swal("Debes seleccionar la antiguedad");
        return false;
    }

    let php = 0;
    php = document.getElementById("php").checked;
    if(php==true){
        php= 20*3;
    }
    
    let java = 0;
    java = document.getElementById("java").checked;
    if(java==true){
        java= 35*3;
    }
    
    let asp = 0;
    asp = document.getElementById("asp").checked;
    if(asp==true){
        asp= 40*3;
    }
    
    let oracle = 0;
    oracle = document.getElementById("oracle").checked;
    if(oracle==true){
        oracle= 60*3;
    }
    
    let vb = 0;
    vb = document.getElementById("vb").checked;
    if(vb==true){
        vb= 55*3;
    }
    
    let bd = 0;
    bd = document.getElementById("bd").checked;
    if(bd==true){
        bd= 15*3;
    }

    let curso = php + java + asp + oracle + vb + bd;


    //calculamos el resultado
    obtenerResultado = calcularPrecio(sueldo, sexo, nacionalidad, antiguedad,edad,curso);
    $('#cantidadPagar').val("La cantidad a pagar es $" + obtenerResultado);
    return false;
}   







function calcularPrecio(sueldo, sexo, nacionalidad, antiguedad,edad,curso) {
    let resultado = 0;
    if(edad < 45){//menor de 45
        if(nacionalidad == "nacional"){
            if (sexo == "femenino") {
                switch (antiguedad) {
                    case "1a5":
                        resultado = sueldo * 0.23;
                        resultado = resultado + curso;
                        break;
                    case "6a10":
                        resultado = sueldo * 0.28;
                        resultado = resultado + curso;
                        break;
                    case "10":
                        
                        resultado = sueldo * 0.33;
                        resultado = resultado + curso;
                        break;
                }
            } else if(sexo == 'masculino'){
                switch(antiguedad){
                    case "1a5":
                        
                        resultado = sueldo * 0.20;
                        resultado = resultado + curso;
                        break;
                    case "6a10":
                        
                        resultado = sueldo * 0.25;
                        resultado = resultado + curso;
                        break;
                    case "10":
                        resultado = sueldo * 0.30;
                        resultado = resultado + curso;
                        break;
                }
            }
        }else if(nacionalidad == "extranjero"){
            if (sexo == "femenino") {
                switch (antiguedad) {
                    case "1a5":
                        
                        resultado = sueldo * 0.18;
                        resultado = resultado + curso;
                        break;
                    case "6a10":
                        
                        resultado = sueldo * 0.23;
                        resultado = resultado + curso;
                        break;
                    case "10":
                        
                        resultado = sueldo * 0.28;
                        resultado = resultado + curso;
                        break;
                }
            } else if(sexo == 'masculino'){
                switch(antiguedad){
                    case "1a5":
                        
                        resultado = sueldo * 0.15;
                        resultado = resultado + curso;
                        break;
                    case "6a10":
                        
                        resultado = sueldo * 0.20;
                        resultado = resultado + curso;
                        break;
                    case "10":
                        
                        resultado = sueldo * 0.25;
                        resultado = resultado + curso;
                        break;
                }
            }
        }
    }else{//mayor a 45
        if(nacionalidad == "nacional"){
            if (sexo == "femenino") {
                switch (antiguedad) {
                    case "1a5":
                        resultado = sueldo * 0.25;
                        resultado = resultado + curso;
                        break;
                    case "6a10":
                        resultado = sueldo * 0.30;
                        resultado = resultado + curso;
                        break;
                    case "10":
                        resultado = sueldo * 0.35;
                        resultado = resultado + curso;
                        break;
                }
            } else if(sexo == 'masculino'){
                switch(antiguedad){
                    case "1a5":
                        resultado = sueldo * 0.22;
                        resultado = resultado + curso;
                        break;
                    case "6a10":
                        resultado = sueldo * 0.27;
                        resultado = resultado + curso;
                        break;
                    case "10":
                            resultado = sueldo * 0.32;
                            resultado = resultado + curso;
                        break;
                }
            }
        }else if(nacionalidad == "extranjero"){
            if (sexo == "femenino") {
                switch (antiguedad) {
                    case "1a5":
                        resultado = sueldo * 0.20;
                        resultado = resultado + curso;
                        break;
                    case "6a10":
                        resultado = sueldo * 0.25;
                        resultado = resultado + curso;
                        break;
                    case "10":
                        resultado = sueldo * 0.30;
                        resultado = resultado + curso;
                        break;
                }
            } else if(sexo == 'masculino'){
                switch(antiguedad){
                    case "1a5":
                        resultado = sueldo * 0.17;
                        resultado = resultado + curso;
                        break;
                    case "6a10":
                        resultado = sueldo * 0.22;
                        resultado = resultado + curso;
                        break;
                    case "10":
                            resultado = sueldo * 0.27;
                            resultado = resultado + curso;
                        break;
                }
            }
        }
    }

    return resultado;
}

function limpiarFormulario(){
    $('#bono')[0].reset();
}

</script>
