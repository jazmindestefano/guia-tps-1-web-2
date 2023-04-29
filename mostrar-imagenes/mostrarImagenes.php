<!DOCTYPE html>
<html>
<head>
    <title>Mostrar imagenes</title>
    <style>
        body {
            background: #1f2c34;
            width: 100vw;
            height: 100vh;
        }

        .body-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
            color: white;
        }


        form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 10px;
        }

        .images {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
    </style>
</head>
<body>

    <header style="width: 100%; height: 100px">
        <button style="width: 100px; height: 50px; border-radius: 10px">
            <a href="../index.html" style="text-decoration: none; color: black">Menu principal</a>
        </button>
    </header>

    <main class="body-container">
        <h1 class="title">Mostrar imagenes</h1>

            <?php
            // Ruta de la carpeta que contiene las imágenes
            $ruta = "imagenes/";

            // Obtener todas las imágenes de la carpeta
            $imagenes = glob($ruta . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

            // Mostrar cada imagen con su nombre de archivo como pie de imagen
            echo '<div class="images">';
            foreach ($imagenes as $imagen) {
                echo '<div>';
                echo '<img style="width=300px; height:250px" src="' . $imagen . '" alt="' . basename($imagen) . '">';
                echo '<p>' . basename($imagen) . '</p>';
                echo '</div>';
            }
            echo '</div>';
            ?>

            <?php
            if (isset($_POST['submit'])) {
                echo "<p>submit</p>";


            }
            ?>

            <h2> Cargar nueva imagen </h2>
            <form action="" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form>
    </main>
</body>
</html>

