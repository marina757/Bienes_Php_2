<?php
    // echo "<pre>";
    // var_dump($_GET);
    // echo "</pre>";
    // exit;

    //IMPORTAR LA CONEXION
    require '../includes/config/database.php';
    $db = conectarDB(); 

    //ESCRIBIR QUERY
    $query = "SELECT * FROM propiedades";

    //CONSULTAR DB
    $resultadoConsulta = mysqli_query( $db, $query);

    //MUESTRA MENSAJE CONDICIONAL
    $resultado = $_GET['resultado'] ?? null; //superglobal $_GET para valores que estan en url
    // var_dump($resultado);

    //INCLUYE UN TEMPLATE
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

            <tbody><!--MOSTRAR LOS RESULTADOS-->
                <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>                
                <tr>
                    <td><?php echo $propiedad['id']; ?></td>
                    <td><?php echo $propiedad['titulo']; ?></td>
                    <td> <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla"> </td>
                    <td>$ <?php echo $propiedad['precio']; ?></td>
                    <td>
                        <a href="#" class="boton-rojo-block">Eliminar</a>
                        <a href="#" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php

    //CERRAR LA CONEXION(OPCIONAL)
    mysqli_close($db);

    incluirTemplate('footer');  
?>    