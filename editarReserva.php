<?php
// Incluye el archivo de conexión a la base de datos
include('conexion.php');

// Verifica si se ha pasado un ID de reserva en la URL
if (isset($_GET['id'])) {
    $id_reserva = $_GET['id'];

    // Recupera los datos del registro a editar
    $query = "SELECT * FROM tbreserva WHERE ID_RESERVA = '$id_reserva'";
    $result = mysqli_query($conexion, $query);
    $reserva = mysqli_fetch_assoc($result);

    // Verifica si se ha enviado el formulario de edición
    if (isset($_POST['editar'])) {
        $ubicacion_Recogida = $_POST['ubicacion_Recogida'];
        $ubicacion_Entrega = $_POST['ubicacion_Entrega'];
        $tipo_vehiculo = $_POST['tipo_vehiculo'];
        $fecha_recogida = $_POST['fecha_recogida'];
        $fecha_devolucion = $_POST['fecha_entrega'];
        $documento = $_POST['ID_CLIENTE'];
        $Num_adultos = $_POST['Num_adultos'];
        $Num_niños = $_POST['Num_niños'];
        $Observacion = $_POST['Observacion'];

        // Prepara la consulta SQL para actualizar el registro
        $sql = "UPDATE tbreserva SET 
                CUIDAD_RECOGE = '$ubicacion_Recogida', 
                CUIDAD_ENTREGA = '$ubicacion_Entrega', 
                ID_TIPO_VEHICULO = '$tipo_vehiculo', 
                FECHA_RECOGE = '$fecha_recogida', 
                FECHA_DEVOLUCION = '$fecha_devolucion', 
                ID_CLIENTE = '$documento',
                NUMERO_ADULTOS = '$Num_adultos', 
                NUMERO_NINOS = '$Num_niños', 
                OBSERVACION = '$Observacion' 
                WHERE ID_RESERVA = '$id_reserva'";

        // Ejecuta la consulta
        if (mysqli_query($conexion, $sql)) {
            echo "<script language='JavaScript'>
                alert('La reserva ha sido actualizada correctamente');
                location.assign('gestionReserva.php');
            </script>";
        } else {
            echo "<script language='JavaScript'>
                alert('No se pudo actualizar la reserva');
                location.assign('gestionReserva.php');
            </script>";
        }

        // Cierra la conexión a la base de datos
        mysqli_close($conexion);
    }
} else {
    echo "<script language='JavaScript'>
        alert('ID de reserva no especificado');
        location.assign('gestionReserva.php');
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Reserva</title>
    <meta charset="utf-8">
    <title>ROYAL CARS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">



</head>

<body>

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>3207803312</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>royalcars@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">Royal Cars</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link">PAGINA PRINCIPAL</a>
                        <a href="about.html" class="nav-item nav-link">NOSOTROS</a>
                        <a href="service.html" class="nav-item nav-link">SERVICIOS</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">VEHICULOS</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="car.html" class="dropdown-item">Listado de carros</a>
                                <a href="detail.html" class="dropdown-item">Detalles de carros </a>
                                <a href="booking.php" class="dropdown-item">Resarva tu carro</a>
                                <a href="gestionReserva.php" class="dropdown-item">Gestion reserva</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">PAGINAS</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="team.html" class="dropdown-item">Equipo</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonios</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">CONTACTO</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Search Start -->
    <div class="container-fluid bg-white pt-3 px-lg-5">
        <div class="row mx-n2">
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select class="custom-select px-4 mb-3" style="height: 50px;">
                    <option selected>Ubicacion Recogida</option>
                    <option value="1">Pereira</option>
                    <option value="2">Dosquebradas</option>
                    <option value="3">Santa Rosa</option>
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select class="custom-select px-4 mb-3" style="height: 50px;">
                    <option selected>Ubicacion Entrega</option>
                    <option value="1">Pereira</option>
                    <option value="2">Dosquebradas</option>
                    <option value="3">Santa Rosa</option>
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <div class="date mb-3" id="date" data-target-input="nearest">
                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Fecha De Recogida"
                        data-target="#date" data-toggle="datetimepicker" />
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <div class="time mb-3" id="time" data-target-input="nearest">
                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Hora De Recogida"
                        data-target="#time" data-toggle="datetimepicker" />
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select class="custom-select px-4 mb-3" style="height: 50px;">
                    <option selected>Seleccion Vehiculo</option>
                    <option value="1">Car 1</option>
                    <option value="2">Car 1</option>
                    <option value="3">Car 1</option>
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <button class="btn btn-primary btn-block mb-3" type="submit" style="height: 50px;">Search</button>
            </div>
        </div>
    </div>
    <!-- Search End -->

    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Reserva de coche</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.html">Pagina principal</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Reserva de coche</h6>
        </div>
    </div>

    <div class="container">
        <h2 class="mt-5">Editar Reserva</h2>
        <form action="" method="post">

            <div class="form-group">
                <label for="ubicacion_Recogida">Ubicación Recogida</label>
                <select name="ubicacion_Recogida" class="custom-select px-4" style="height: 50px;" required>
                    <option value="" disabled>Seleccione Ubicación Recogida</option>
                    <?php
                    include('conexion.php');
                    $query = "SELECT CIUDAD FROM tbcuidades";
                    $result = mysqli_query($conexion, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $selected = ($row['CIUDAD'] == $reserva['CUIDAD_RECOGE']) ? 'selected' : '';
                        echo "<option value='" . $row['CIUDAD'] . "' $selected>" . $row['CIUDAD'] . "</option>";
                    }
                    mysqli_close($conexion);
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="ubicacion_Entrega">Ubicación Entrega</label>
                <select name="ubicacion_Entrega" class="custom-select px-4" style="height: 50px;" required>
                    <option value="" disabled>Seleccione Ubicación Entrega</option>
                    <?php
                    include('conexion.php');
                    $query = "SELECT CIUDAD FROM tbcuidades";
                    $result = mysqli_query($conexion, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $selected = ($row['CIUDAD'] == $reserva['CUIDAD_ENTREGA']) ? 'selected' : '';
                        echo "<option value='" . $row['CIUDAD'] . "' $selected>" . $row['CIUDAD'] . "</option>";
                    }
                    mysqli_close($conexion);
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="tipo_vehiculo">Tipo Vehículo</label>
                <select name="tipo_vehiculo" class="custom-select px-4" style="height: 50px;">
                    <option value="" disabled selected>Seleccione tipo Vehiculo</option>
                    <?php
                    include('conexion.php');
                    $query = "SELECT ID_TIPO_VEHICULO,TIPO_VEHICULO FROM tbtipovehiculos";
                    $result = mysqli_query($conexion, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['ID_TIPO_VEHICULO'] . "'>" . $row['TIPO_VEHICULO'] . "</option>";
                    }
                    mysqli_close($conexion);
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="fecha_recogida">Fecha Recogida</label>
                <input type="date" name="fecha_recogida" class="form-control" value="<?= $reserva['FECHA_RECOGE'] ?>" required>
            </div>
            <div class="form-group">
                <label for="fecha_entrega">Fecha Devolución</label>
                <input type="date" name="fecha_entrega" class="form-control" value="<?= $reserva['FECHA_DEVOLUCION'] ?>" required>
            </div>

            <div class="form-group">
                <label for="ID_CLIENTE">Id cliente</label>
                <input type="number" name="ID_CLIENTE" class="form-control" value="<?= $reserva['ID_CLIENTE'] ?>" required>
            </div>


            <div class="form-group">
                <label for="Num_adultos">Número de Adultos</label>
                <input type="number" name="Num_adultos" class="form-control" value="<?= $reserva['NUMERO_ADULTOS'] ?>" required>
            </div>
            <div class="form-group">
                <label for="Num_niños">Número de Niños</label>
                <input type="number" name="Num_niños" class="form-control" value="<?= $reserva['NUMERO_NINOS'] ?>" required>
            </div>
            <div class="form-group">
                <label for="Observacion">Observación</label>
                <textarea name="Observacion" class="form-control" rows="3" required><?= $reserva['OBSERVACION'] ?></textarea>
            </div>
            <button type="submit" name="editar" class="btn btn-primary">Actualizar Reserva</button>
        </form>
    </div>

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-2.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-4.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-7.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-8.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>royalcars@gmail.com</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Enlaces útiles</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Politica
                        Privada</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Terminos &
                        Condiciones</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Nuevos
                        Miembros</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Programa
                        Afiliados</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Devoluciones y
                        Reembolso</a>
                    <a class="text-body" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Ayuda y Preguntas
                        Frecuentes</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Car Gallery</h4>
                <div class="row mx-n1">
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-1.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-2.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-3.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-4.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Newsletter</h4>
                <p class="mb-4">Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed
                    kasd et</p>
                <div class="w-100 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control bg-dark border-dark" style="padding: 25px;"
                            placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-uppercase px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
                <i>Lorem sit sed elitr sed kasd et</i>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
        <p class="mb-2 text-center text-body">&copy; <a href="#">Proyecto Final Lenguaje Programacion 1</a>. Reservados
            todos los derechos. </p>

    </div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>