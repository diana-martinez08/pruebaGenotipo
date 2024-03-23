<?php
include_once "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <title>UpperLogistics</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <img src="img/logo.png" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Proveedores</a>
                        </li>                                              
                        <li class="nav-item">
                            <a class="nav-link" href="#">Clientes</a>
                        </li>                                              
                        <li class="nav-item">
                            <a class="nav-link" href="#">Artículos</a>
                        </li>                                              
                    </ul>
                    <form class="d-flex">
                        <button class="btn Bcontacto" type="submit"><b>Cerrar Sesión</b></button>
                    </form>
                </div>
            </div>
        </nav> <br><br>
        <div class="container-fluid inicio">
            <div class="row">
                <div class="col-6">
                    <img src="img/add.png" alt="" style="display: block; margin: 0 auto;">
                </div>
                <div class="col-5"> <br>
                    <button style="margin-top: 150px; margin-left: 180px" type="button" class="btn Bagregar" data-bs-toggle="modal" data-bs-target="#modalArticulo">
                        Agregar Artículo <i class="fas fa-plus-circle"></i>
                    </button>
                    <div class="modal fade" id="modalArticulo" tabindex="-1" aria-hidden="true" aria-labelledby="modalArticulo" data-bs-backdrop="static">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="modal-title" style="font-size: 30px; color: blue;">Datos del Artículo</h4>
                                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="guarda.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="accion" value="crear">
                                        <h5 style="color: #1C156D; text-align: start;">Imagen Actual:</h5>
                                        <img id="imagen-preview" src="" style="max-width: 100px; max-height: 100px;" alt="">
                                        <br>
                                        <h5 style="color: #1C156D; text-align: start;">Inserte la imagen:</h5>
                                        <input type="file" class="form-control mt-3" style="height: 40px; width: 350px;" name="imagen" id="imagen">
                                        <br> 
                                        <h5 style="color: #1C156D; text-align: start;">Inserte el titulo:</h5>
                                        <textarea type="text" class="form-control mt-3" style="height: 60px; width: 350px; overflow-y: auto;" name="titulo" id="titulo" required></textarea>
                                        <br> 
                                        <h5 style="color: #1C156D; text-align: start;">Inserte la descripción:</h5>
                                        <textarea type="text" class="form-control mt-3" style="height: 100px; width: 350px; overflow-y: auto;" name="descripcion" id="descripcion" required></textarea>
                                        <br> 
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <button type="" class="btn btn-primary" id="guardar-button" name="accion" value="crear" onclick="guardarCambios()">
                                                Guardar
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-up" viewBox="0 0 16 16">
                                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                                    <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid parte2">
            <svg class="check1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            <b>ARTICULOS DADOS DE ALTA</b>
        </div>

    </header>
    <div class="container-fluid parte3">
        <div class="row justify-content-center">
            <div class="col-8"> <br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover custom-table">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 25%;">Imagen</th>
                                <th class="text-center" style="width: 20%;">Título</th>
                                <th class="text-center" style="width: 40%;">Descripción</th>
                                <th class="text-center" style="width: 15%;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM articulos";
                            $stmt = $pdo->query($sql);
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr id='row{$row['id_Articulo']}'>";
                                echo "<td class='align-middle text-center'><img src='{$row['imagen']}' style='max-width: 100px; max-height: 100px;' alt=''></td>";
                                echo "<td class='align-middle text-center'>{$row['titulo']}</td>";
                                echo "<td class='align-middle'>{$row['descripcion']}</td>";
                                echo "<td class='align-middle text-center'>
                                        <a href='#' class='btn btn-outline-dark btn-sm' onclick='editItem({$row['id_Articulo']})'><i class='fas fa-edit'></i></a>
                                        <a href='#' class='btn btn-outline-danger btn-sm' onclick='deleteItem({$row['id_Articulo']})'><i class='fas fa-trash-alt'></i></a>
                                    </td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                        
                        <script>                            
                            document.addEventListener('DOMContentLoaded', function() {
                            const form = document.querySelector('form');

                            form.addEventListener('submit', function(event) {
                                event.preventDefault();

                                const formData = new FormData(form);

                                fetch('guarda.php', {
                                    method: 'POST',
                                    body: formData
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        Swal.fire({
                                            title: '¡Registro correcto!',
                                            text: data.message,
                                            icon: 'success',
                                            confirmButtonText: 'Aceptar'
                                        }).then(() => {
                                        });
                                    } else {
                                        Swal.fire({
                                            title: 'Error',
                                            text: data.error,
                                            icon: 'error',
                                            confirmButtonText: 'Aceptar'
                                        });
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    Swal.fire('Error', 'Hubo un error al procesar la solicitud.', 'error');
                                });
                            });
                            });

                            function editItem(id) {
                                fetch('obtener_articulo.php?id=' + id)
                                    .then(response => response.json())
                                    .then(data => {
                                        var modalTitle = document.getElementById('modal-title');
                                        if (modalTitle) {
                                            modalTitle.innerText = 'Editar Artículo';
                                        }

                                        var imagenPreview = document.getElementById('imagen-preview');
                                        if (imagenPreview) {
                                            imagenPreview.src = data.imagen;
                                        }

                                        var tituloInput = document.getElementById('titulo');
                                        if (tituloInput) {
                                            tituloInput.value = data.titulo;
                                        }

                                        var descripcionInput = document.getElementById('descripcion');
                                        if (descripcionInput) {
                                            descripcionInput.value = data.descripcion;
                                        }

                                        var guardarButton = document.getElementById('guardar-button');
                                        if (guardarButton) {
                                            guardarButton.dataset.id = id;
                                        }

                                        // Mostrar el modal de edición
                                        var myModal = new bootstrap.Modal(document.getElementById('modalArticulo'));
                                        myModal.show();
                                    })
                                    .catch(error => {
                                        console.error('Error:', error);
                                        Swal.fire('Error', 'Hubo un error al cargar los detalles del artículo.', 'error');
                                    });
                            }

                            function guardarCambios() {
                                var titulo = document.getElementById('titulo').value;
                                var descripcion = document.getElementById('descripcion').value;
                                var id = document.getElementById('guardar-button').dataset.id;

                                var formData = new FormData();
                                formData.append('titulo', titulo);
                                formData.append('descripcion', descripcion);
                                formData.append('id', id);

                                fetch('editar_articulo.php', {
                                    method: 'POST',
                                    body: formData
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        var articulo = data.articulo; 
                                        var row = document.getElementById('row' + id);                                        
                                        row.innerHTML = `
                                            <td class='align-middle text-center'><img src='${articulo.imagen}' style='max-width: 100px; max-height: 100px;' alt=''></td>
                                            <td class='align-middle text-center'>${articulo.titulo}</td>
                                            <td class='align-middle'>${articulo.descripcion}</td>
                                            <td class='align-middle text-center'>
                                                <a href='#' class='btn btn-outline-dark btn-sm' onclick='editItem(${articulo.id_Articulo})'><i class='fas fa-edit'></i></a>
                                                <a href='#' class='btn btn-outline-danger btn-sm' onclick='deleteItem(${articulo.id_Articulo})'><i class='fas fa-trash-alt'></i></a>
                                            </td>
                                        `;
                                        var myModal = bootstrap.Modal.getInstance(document.getElementById('modalArticulo'));
                                        myModal.hide();
                                        Swal.fire('Error', 'Hubo un error al guardar los cambios.', 'error');
                                    } else {
                                        Swal.fire('Registrado', 'Registro correcto.', 'success');
                                    }
                                })
                                .catch(error => {
                                    Swal.fire('Registrado', 'Registro correcto.', 'success');
                                });
                            }

                            function deleteItem(id) {
                                Swal.fire({
                                    title: '¿Estás seguro?',
                                    text: 'Se eliminará el registro del artículo',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#D40C12',
                                    cancelButtonColor: '#1C156D',
                                    confirmButtonText: 'Sí, eliminar',
                                    cancelButtonText: 'Cancelar'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        fetch('eliminar_articulo.php', {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json'
                                            },
                                            body: JSON.stringify({ id: id })
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.success) {
                                                document.getElementById('row' + id).remove();
                                                Swal.fire('Eliminado', 'El registro ha sido eliminado correctamente.', 'success');
                                            } else {
                                                Swal.fire('Error', 'Hubo un error al eliminar el registro.', 'error');
                                            }
                                        })
                                        .catch(error => {
                                            console.error('Error:', error);
                                            Swal.fire('Error', 'Hubo un error al eliminar el registro.', 'error');
                                        });
                                    }
                                });
                            }
                        </script>
                    </table>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>