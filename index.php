<?php

include 'models/my_patient.php';

$patient_model = new my_patient();

$patients = $patient_model->list_all();

if($_GET['item'] == 1) {

    $patients = $patient_model->list_all_mayores();
}

if($_GET['item'] == 2) {

    $patients = $patient_model->list_all_grupos();
}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>El País Test</title>
    <meta name="description" content="El País programming test">
    <meta name="author" content="assistrx-dw">
        <!-- scripts at the bottom! -->
<!-- <script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet"  media="(min-width: 320px) and (max-width: 360px)" href="public/css/media-query.css" />  
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="public/js/script.js"></script>
<script type="text/javascript">
    var device = navigator.userAgent
    if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
    {
        $('.row .col-xs-4#edad').css('display','none');
        $('.row .col-xs-4#list_edad').css('display','none');

    }
</script>
</head>
<body>

    <div class="container">

        <h1>Patient Listing</h1>

        <p>
            <form enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" />
                <label for="patient_filter">Filter by Name</label>
                <input type="text" id="filtro_pacientes"  name="patient_filter" onkeyup="autocompletar()" autocomplete="off" />
                <ul id="lista"></ul>
            </form>
        </p>

        <a href="index.php?item=1">Listar Pacientes 3ra edad (50 años)</a>
        <br>
        <a href="index.php?item=2">Listar Pacientes grupos de edad </a>
        <p>
            <label for="patient_filter">Number of patients grouped by age</label>
            <ul>
                <!-- Punto 3 Listar numero de paciente por edades -->
                <li><span>Age:  </span><span>Patients quantity: </span></li>
            </ul>
        </p>

        <div class="row">
            <div class="col-xs-4">Name</div>
            <div class="col-xs-4" id="edad">Age</div>
            <div class="col-xs-4">Phone</div>
        </div>

        <!-- Punto 4 Esconde la columna Age para móviles -->
        <?php foreach($patients as $patient): ?>
            <div class="row">
                <div class="col-xs-4"><?php echo $patient->patient_name; ?></div>
                <div class="col-xs-4" id="list_edad"><?php echo $patient->patient_age; ?></div>
                <div class="col-xs-4"><?php echo $patient->patient_phone; ?></div>
            </div>
        <?php endforeach; ?>

    </div>



    <!-- this script file is for global js -->
    <!-- <script src="public/js/script.js"></script> -->
</body>
</html>
