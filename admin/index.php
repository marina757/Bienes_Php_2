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
    </main>

<?php
    incluirTemplate('footer');  
?>    