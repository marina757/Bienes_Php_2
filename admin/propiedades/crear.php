<?php
    //BASE DE DATOS
    require '../../includes/config/database.php';
    $db = conectarDB();
    // var_dump($db);

    // echo "<pre>";
    // var_dump($_SERVER); //Contiene info del servidor
    // echo "</pre>";

    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    //ARREGLO CON MENSAJES DE ERRORES
    $errores = [];

    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc ='';
    $estacionamiento = '';
    $vendedorId = '';

    //EJECUTA CODIGO DESPUES DE QUE USUARIO ENVIA FORMULARIO
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorId = $_POST['vendedor'];

        if (!$titulo) {
            $errores[] = "Debes poner un titulo";
        }

        if (!$precio) {
            $errores[] = "El precio es obligatorio";
        }

        if ( strlen( $descripcion ) < 50 ) {
            $errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
        }

        if (!$habitaciones) {
            $errores[] = "El numero de habitaciones es obligatorio";
        }

        if (!$wc) {
            $errores[] = "El numero de wc es obligatorio";
        }

        if (!$estacionamiento) {
            $errores[] = "El numero de lugares de estableciemiento es obligatorio";
        }

        if (!$vendedorId) {
            $errores[] = "Elige un vendedor";
        }

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";
        
        // exit;

        //REVISAR QUE ARRAY DE ERRORES ESTE VACIO
        if (empty($errores)) {
                //INSERTAR EN BASE DE DATOS
            $query = " INSERT INTO propiedades (titulo, precio, descripcion,
            habitaciones, wc, estacionamiento, vendedorId ) VALUES ( '$titulo',
            '$precio','$descripcion','$habitaciones','$wc','$estacionamiento',
            '$vendedorId' ) ";

            // echo $query;

            $resultado = mysqli_query($db, $query);

            if ($resultado) {
                echo "insertado correctamente";
            }    
        }
    }

    require '../../includes/funciones.php'; //sirve para funciones    
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach ($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>            
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripcion:</label> 
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

                <label for="wc">Banos:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor">
                    <option value="">-- Seleccione --</option>
                    <option value="1">Marina</option>
                    <option value="2">Karen</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">

        </form>
    </main>

<?php
    incluirTemplate('footer');  
?>    