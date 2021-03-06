<?php

$pg="proyectos";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Proyectos</title>
</head>

<body id="proyectos">
    <?php include_once ("header.php"); ?>

    <body>
        <main class="container">
            <div class="row">
                <div class="col-12 mt-3 mb-5">
                    <h1>Proyectos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-12">
                    <p>Los siguientes son algunos de los trabajos que he realizado:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-12">
                    <div class="row card m-1">
                        <img src="images/abmclientes.png" alt="" class="img-fluid ">
                        <div class="col-12 color-gradiente py-3">
                            <h2>ABM CLIENTES</h2>
                        </div>
                        <div class="col-12 py-3">
                            <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP,
                                Bootstrap y Json.</p>
                        </div>
                        <div class="row py-5 text-center">
                            <div class="col-6">
                                <a href="https://nelsontarche.com.ar/sistema/abmclientes/" class="btn btn-rojo btnOnline"
                                    target="_blank">Ver online</a>
                            </div>
                            <div class="col-6">
                                <a href="https://github.com/depcsuite/abmclientes" class="link-rojo"
                                    target="_blank">Código
                                    fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="row card m-1">
                        <img src="images/abmventas.png" alt="" class="img-fluid ps-0">
                        <div class="col-12 color-gradiente py-3">
                            <h2>SISTEMA DE GESTION DE VENTAS</h2>
                        </div>
                        <div class="col-12 py-3">
                            <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                                Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                        </div>
                        <div class="row py-4 text-center">
                            <div class="col-6">
                                <a href="https://nelsontarche.com.ar/sistema/abmclientes/" class="btn btn-rojo btnOnline"
                                    target="_blank">Ver online</a>
                            </div>
                            <div class="col-6">
                                <a href="https://github.com/depcsuite/abmclientes" class="link-rojo"
                                    target="_blank">Código
                                    fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="row card m-1">
                        <img src="images/sistema-admin.png" alt="" class="img-fluid ps-0">
                        <div class="col-12 color-gradiente py-3">
                            <h2>PROYECTO INTEGRADOR</h2>
                        </div>
                        <div class="col-12 py-3">
                            <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                                Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                                funcionalidades a fines.</p>
                        </div>
                        <div class="row py-2 text-center">
                            <div class="col-6">
                                <a href="https://nelsontarche.com.ar/sistema/abmclientes/" class="btn btn-rojo btnOnline"
                                    target="_blank">Ver online</a>
                            </div>
                            <div class="col-6">
                                <a href="https://github.com/depcsuite/abmclientes" class="link-rojo"
                                    target="_blank">Código
                                    fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </main>
        <?php include_once("footer.php");?>
    </body>

</html>