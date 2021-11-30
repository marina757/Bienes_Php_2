<?php
    require 'includes/funciones.php'; //sirve para funciones    
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3.000.000</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p>4</p>
                </li>
            </ul>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, expedita provident sint ex quo
                adipisci ut perspiciatis cum dicta, consequuntur atque quisquam blanditiis rerum repellendus
                cupiditate suscipit odit aut corporis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, expedita provident sint ex quo
                adipisci ut perspiciatis cum dicta, consequuntur atque quisquam blanditiis rerum repellendus
                cupiditate suscipit odit aut corporis.
            </p>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, expedita provident sint ex quo
                adipisci ut perspiciatis cum dicta, consequuntur atque quisquam blanditiis rerum repellendus
                cupiditate suscipit odit aut corporis.
            </p>
        </div>
    </main>

<?php
    incluirTemplate('footer');  
?>    