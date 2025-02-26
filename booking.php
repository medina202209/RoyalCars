<!DOCTYPE html>
<html lang="en">

<head>
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
    <!-- Topbar End -->


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


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Reserva de coche</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.html">Pagina principal</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Reserva de coche</h6>
        </div>
    </div>
    <!-- Page Header Start -->





    <!-- Car Booking Start -->
    <div class="container-fluid pb-5">
        <div class="container">


            <!--captura lo que se envia por el formulario con el boton enviar-->
            <?php

            // Recoge los datos enviados desde el formulario
            if (isset($_POST['enviar'])) {

                //Datos del cliente
                $tipo_documento = $_POST['TIPO_DOCUMENTO'];
                $documento = $_POST['DOCUMENTO'];
                $nombre_cliente = $_POST['NOMBRE_CLIENTE'];
                $fecha_nacimiento = $_POST['FECHA_NACIMIENTO'];
                $correo = $_POST['EMAIL'];
                $sexo = $_POST['SEXO'];
                $direccion_cliente = $_POST['DIRECION_CLIENTE'];
                $id_cuidad = $_POST['ID_CIUDAD'];
                $tarjeta = $_POST['TARJETA_CREDITO'];
                $id_banco = $_POST['ID_BANCO'];

                //Datos de la reserva
                $ubicacion_Recogida = $_POST['ubicacion_Recogida'];
                $ubicacion_Entrega = $_POST['ubicacion_Entrega'];
                $tipo_vehiculo = $_POST['tipo_vehiculo'];
                $fecha_recogida = $_POST['fecha_recogida'];
                $fecha_devolucion = $_POST['fecha_entrega'];
                $id_cliente = $_POST['DOCUMENTO'];
                $Num_adultos = $_POST['Num_adultos'];
                $Num_niños = $_POST['Num_niños'];
                $Observacion = $_POST['Observacion'];


                // Incluye el archivo de conexión a la base de datos
                include('conexion.php');

                // Crea una consulta SQL para insertar los datos en la tabla 'clientes'
                $sql_cliente = "insert into tbclientes(TIPO_DOCUMENTO, DOCUMENTO, NOMBRE_CLIENTE, FECHA_NACIMIENTO, EMAIL, SEXO, DIRECION_CLIENTE, ID_CIUDAD, TARJETA_CREDITO, ID_BANCO ) 
                        values('" . $tipo_documento . "', '" . $documento . "','" . $nombre_cliente . "','" . $fecha_nacimiento . "', '" . $correo . "','" . $sexo . "','" . $direccion_cliente . "', '" . $id_cuidad . "', '" . $tarjeta . "', '" . $id_banco . "' )";

                $sql_reserva = "insert into tbreserva(CUIDAD_RECOGE,CUIDAD_ENTREGA,ID_TIPO_VEHICULO,FECHA_RECOGE,FECHA_DEVOLUCION,ID_CLIENTE,NUMERO_ADULTOS,NUMERO_NINOS,OBSERVACION) 
                        values ('" . $ubicacion_Recogida . "', '" . $ubicacion_Entrega . "','" . $tipo_vehiculo . "', '" . $fecha_recogida . "', '" . $fecha_devolucion . "','" . $id_cliente . "', '" . $Num_adultos . "', '" . $Num_niños . "', '" . $Observacion . "')";

                // Ejecuta la consulta y guarda el resultado
                $resultado_cliente = mysqli_query($conexion, $sql_cliente);
                $resultado_reserva = mysqli_query($conexion, $sql_reserva);

                $resultado = $resultado_cliente && $resultado_reserva;

                // Verifica si la consulta fue exitosa y muestra un mensaje de éxito o error mediante JavaScript
                if ($resultado) {
                    echo "<script language='JavaScript'>
						alert('Los datos fueron ingresados a la BD correctamente');
						location.assign('booking.php');
					</script>";
                } else {
                    echo "<script language='JavaScript'>
						alert('Los datos NO pudieron ser ingresados a la BD');
						location.assign('booking.php');
					</script>";
                }

                // Cierra la conexión a la base de datos
                mysqli_close($conexion);
            }
            ?>

            <!-- formulario de agregar -->
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="mb-4">Datos Personales</h2>
                        <div class="mb-5">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <select name="TIPO_DOCUMENTO" class="custom-select px-4" style="height: 50px;">
                                        <option value="" disabled selected>Seleccione tipo documento</option>
                                        <option value="CC">Cedula Ciudadania</option>
                                        <option value="TD">Tarjeta Identidad</option>
                                        <option value="RC">Regristro Civil</option>
                                    </select>
                                </div>
                                <div class="col-6 form-group">
                                    <input type="number" name="DOCUMENTO" class="form-control p-4"
                                        placeholder="Numero Documento" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" name="NOMBRE_CLIENTE" class="form-control p-4" placeholder="Nombre"
                                        required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="start">Fecha Nacimiento</label>
                                    <input type="date" name="FECHA_NACIMIENTO" class="form-control p-4" required="required">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="email" name="EMAIL" class="form-control p-4" placeholder="Email" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <select name="SEXO" class="custom-select px4" style="height: 50px;">
                                        <option value="" disabled selected>Sexo</option>
                                        <option value="M">Masculino</option>}
                                        <option value="F">Femenino</option>
                                    </select>
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" name="DIRECION_CLIENTE" placeholder="Direccion" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <select name="ID_CIUDAD" required class="custom-select px-4" style="height: 50px;">
                                        <option value="" disabled selected>Cuidad</option>
                                        <?php
                                        include('conexion.php');
                                        $query = "SELECT ID_CIUDAD, CIUDAD FROM tbcuidades";
                                        $result = mysqli_query($conexion, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='" . $row['ID_CIUDAD'] . "'>" . $row['CIUDAD'] . "</option>";
                                        }
                                        mysqli_close($conexion);
                                        ?>
                                    </select>
                                </div>
                                <div class="col-6 form-group">
                                    <input type="number" name="TARJETA_CREDITO" class="form-control p-4"
                                        placeholder="Numero tarjeta credito" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <select name="ID_BANCO" class="custom-select px-4" style="height: 50px;">
                                        <option value="" disabled selected>Seleccione Banco</option>
                                        <?php
                                        include('conexion.php');
                                        $query = "SELECT ID_BANCO, BANCO FROM tbbancos";
                                        $result = mysqli_query($conexion, $query);
                                        while ($row = mysqli_fetch_assoc(result: $result)) {
                                            echo "<option value='" . $row['ID_BANCO'] . "'>" . $row['BANCO'] . "</option>";
                                        }
                                        mysqli_close($conexion);
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h2 class="mb-4">Detalle de la reserva</h2>

                        <div class="mb-5">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <select name="ubicacion_Recogida" class="custom-select px-4" style="height: 50px;">
                                        <option value="" disabled selected>Seleccione Ubicación Recogida</option>
                                        <?php
                                        include('conexion.php');
                                        $query = "SELECT CIUDAD FROM tbcuidades";
                                        $result = mysqli_query($conexion, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='" . $row['CIUDAD'] . "'>" . $row['CIUDAD'] . "</option>";
                                        }
                                        mysqli_close($conexion);
                                        ?>
                                    </select>
                                </div>
                                <div class="col-6 form-group">
                                    <select name="ubicacion_Entrega" class="custom-select px-4" style="height: 50px;">
                                        <option value="" disabled selected>Seleccione Ubicación Entrega</option>
                                        <?php
                                        include('conexion.php');
                                        $query = "SELECT CIUDAD FROM tbcuidades";
                                        $result = mysqli_query($conexion, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='" . $row['CIUDAD'] . "'>" . $row['CIUDAD'] . "</option>";
                                        }
                                        mysqli_close($conexion);
                                        ?>
                                    </select>
                                </div>

                                <div class="col-6 form-group">
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

                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <div data-target-input="nearest">
                                        <input name="fecha_recogida" type="date" class="form-control p-4 datetimepicker-input"
                                            placeholder="Fecha De Recogida"
                                            data-toggle="datetimepicker" />
                                    </div>
                                </div>

                                <div class="col-6 form-group">
                                    <div data-target-input="nearest">
                                        <input name="fecha_entrega" type="date" class="form-control p-4 datetimepicker-input"
                                            placeholder="Fecha De Entrega"
                                            data-toggle="datetimepicker" />
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <select name="Num_adultos" class="custom-select px-4" style="height: 50px;">
                                        <option selected disabled>Numero de adultos</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="col-6 form-group">
                                    <select name="Num_niños" class="custom-select px-4" style="height: 50px;">
                                        <option selected disabled>Numero de niños</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <textarea name="Observacion" class="form-control py-3 px-4" rows="3" placeholder="Solicitud especial"></textarea>
                            </div>
                        </div>
                        <!-- Botón para enviar el formulario -->
                        <div class="col-lg-4 mx-auto">
                            <button class="btn btn-block btn-primary py-3" name="enviar"
                                style="font-size: 18px; border-radius: 5px; text-align: center;">Reserva ahora</button>
                        </div>

                    </div>
            </form>
        </div>

    </div>
    </div>

    <!-- formulario de agregar -->




    </div>


    <!-- Vendor Start -->
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
    <!-- Vendor End -->


    <!-- Footer Start -->
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
    <!-- Footer End -->


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