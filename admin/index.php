<?php

    // echo "<pre>";
    // var_dump($_GET);
    // echo "</pre>";
    // exit;

    $resultado = $_GET['resultado'] ?? null; //superglobal $_GET para valores que estan en url
    // var_dump($resultado);

    require '../includes/funciones.php'; //sirve para funciones    
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes</h1>
        <?php if( intval( $resultado ) === 1): ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Casa en la playa</td>
                    <td> <img src="/imagenes/097331d0a6726ecbe77f0520b0a92726.jpg" class="imagen-tabla"> </td>
                    <td>$120000</td>
                    <td>
                        <a href="#" class="boton-rojo-block">Eliminar</a>
                        <a href="#" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

<?php
    incluirTemplate('footer');  
?>    