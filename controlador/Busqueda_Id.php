<?php
include '../modelo/conexion.php';

header('Content-Type: application/json');

if (isset($_GET['id_paquete'])) {
    $id = $_GET['id_paquete'];

    $stmt = $conexion->prepare("SELECT * FROM paquetes WHERE id_paquete = ?");
    $stmt->bind_param("i", $id); // Asumiendo que es int
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($fila = $resultado->fetch_assoc()) {
        echo json_encode([
            'success' => true,
            'paquete' => $fila
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'No encontrado']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'ID no recibido']);
}
