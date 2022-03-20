<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>EJERCICIO 4</title>
</head>

<body>
    <div class="container"><br>
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
                <h3>EJERCICIO 4</h3>
                <hr>
                <?php	
	                $Enlace = 'https://github.com/SuleymaAideeLopezRomero/ActividadM2L2';
	                function filtroUrl($Enlace)
                    {
			            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|](\.)[a-z]{2}/i",$Enlace)) 
                        {
				            return false;
			            }
                        else
                        {
				            return true;
			            }
	                }

	                if (!filtroUrl($Enlace)) 
                    {	
		                echo '¡Cuidado, estas fastidiando un enlace a una pagina!';
	                }
                    else 
                    {
		                echo '¡Bien! Estas haciendo un favor al mundo de el SEO<br>';
                        echo $Enlace;
	                }		
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>