<?php
// Incluye el archivo de conexión a la base de datos
include('conexion.php');

// Verifica si se ha pasado un ID de reserva en la URL
if (isset($_GET['id'])) {
    $id_reserva = $_GET['id'];

    // Prepara la consulta SQL para eliminar el registro
    $sql = "DELETE FROM tbreserva WHERE ID_RESERVA = '$id_reserva'";

    // Ejecuta la consulta
    if (mysqli_query($conexion, $sql)) {
        echo "<script language='JavaScript'>
            alert('La reserva ha sido eliminada correctamente');
            location.assign('booking.php');
        </script>";
    } else {
        echo "<script language='JavaScript'>
            alert('No se pudo eliminar la reserva');
            location.assign('booking.php');
        </script>";
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conexion);
} else {
    echo "<script language='JavaScript'>
        alert('ID de reserva no especificado');
        location.assign('booking.php');
    </script>";
}
