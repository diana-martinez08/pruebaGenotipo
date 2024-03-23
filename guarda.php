<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRING);
    $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    
    if ($_POST['accion'] === 'crear') {
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
            $rutaImagen = 'articulos/' . $_FILES['imagen']['name'];
            // Mover la imagen al servidor
            if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaImagen)) {

                $sqlInsertar = "INSERT INTO articulos (imagen, titulo, descripcion) VALUES (:imagen, :titulo, :descripcion)";
                $stmtInsertar = $pdo->prepare($sqlInsertar);
                $stmtInsertar->bindParam(':imagen', $rutaImagen);
                $stmtInsertar->bindParam(':titulo', $titulo);
                $stmtInsertar->bindParam(':descripcion', $descripcion);

                if ($stmtInsertar->execute()) {
                    // echo json_encode(['success' => true, 'message' => 'Artículo creado correctamente']);
                    header('Location: articulos.php');
                    exit();
                } else {
                    echo json_encode(['success' => false, 'error' => 'Error al insertar el nuevo artículo']);
                    exit();
                }
            } else {
                echo json_encode(['success' => false, 'error' => 'Error al mover la imagen']);
                exit();
            }
        } else {
            // echo json_encode(['success' => false, 'error' => 'No se recibió la imagen']);
            header('Location: articulos.php');
            exit();
        }
    } elseif ($_POST['accion'] === 'editar') {
        $id = $_POST['id'];
    
        $sql = "UPDATE articulos SET titulo = :titulo, descripcion = :descripcion WHERE id_Articulo = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':titulo', $titulo);
        $stmt->bindValue(':descripcion', $descripcion);
        $stmt->bindValue(':id', $id);
    
        if ($stmt->execute()) {
            $sql_select = "SELECT * FROM articulos WHERE id_Articulo = :id";
            $stmt_select = $pdo->prepare($sql_select);
            $stmt_select->bindValue(':id', $id);
            if ($stmt_select->execute()) {
                $articulo = $stmt_select->fetch(PDO::FETCH_ASSOC);
                echo json_encode(['success' => true, 'articulo' => $articulo]);
                exit();
            } else {
                echo json_encode(['success' => false, 'error' => 'Error al obtener el artículo actualizado']);
                exit();
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Error al actualizar el artículo']);
            exit();
        }
    }
}
?>
