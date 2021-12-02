<?php
    require 'includes/funciones.php'; //sirve para funciones    
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesion</h1>

        <form class="formulario">
            <fieldset><!--fieldset se pone cuando se agrupan campos relacionados-->
                <legend>Email y Password</legend><!--legend explica lo que es el fieldset-->

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu Email" id="email">

                <label for="password">Password</label>
                <input type="password" placeholder="Tu Password" id="password">
            </fieldset>

            <input type="submit" value="Iniciar Sesion" class="boton boton-verde">
        </form>
    </main>

<?php
    incluirTemplate('footer');  
?>    