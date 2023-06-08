<?php

$pg="sobre-mi";

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
    <title>Sobre mi</title>
</head>

<body id="sobre-mi">
<?php include_once ("header.php"); ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-12 mt-4">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                    <p class="pb-sm-5">Hola, soy Facundo, me recibi de licenciado en Nutricion en 2021, pero la pasion por la tecnologia y los sistemas me llevo al camino del desarrollo</p>
                    <a href="contacto.php" class="btn btn-rojo">Enviame un mensaje!</a>

                </div>
                <div class="col-sm-3 col-12 mt-4 offset-sm-2">
                    <img src="images/perfil2.jpeg" alt="Facundo Rios" title="Facundo Rios" class="img-fluid img-circle">
                </div>
            </div>
        </div>
        <section id="tecnologias" class="color-gradiente pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="my-sm-5 text-white">Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>Javascript</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1209/javascript.jpeg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>HTML5</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/2538/kEpgHiC9.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>Bootstrap</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1101/C9QJ7V3X.png">
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>MySQL</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1615/mariadb-logo-400x400.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>Python</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/1200px-Python-logo-notext.svg.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>CSS</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/6727/css.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>LibreOffice base</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/LibreOffice_6.1_Base_Icon.svg/1200px-LibreOffice_6.1_Base_Icon.svg.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>MS Access</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Microsoft_Office_Access_%282019-present%29.svg/800px-Microsoft_Office_Access_%282019-present%29.svg.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>Git</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1046/git.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="idiomas" style="background-color: #f2f2f2">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12" style="padding: 0px 48px 48px 48px;">
                        <div class="row mr-sm-1 bg-white card-idioma shadow" style="border-radius: 15px;">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul style="list-style: none">
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Intermediate B2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12" style="padding: 0px 48px 48px 48px;">
                        <div class="row ml-sm-2 bg-white card-idioma shadow" style="border-radius: 15px;">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul style="list-style: none; float: left !important;">
                                    <li>Deportes</li>
                                    <li>Series</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-briefcase"></i></h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded">

                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/praline.jpg" class="img-fluid baw" title="panaderia praline">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Seguridad y distribucion</h3>
                            <h4>Panaderia Praline</h4>
                            <h5>2020 - presente</h5>
                        </div>
                    </div>
                </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Formación académica</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 px-5 py-3 my-auto d-none d-sm-block">
                            <img src="images/ucalp.png" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Licenciado en nutricion</h3>
                            <h4>Universidad catolica de la Plata</h4>
                            <h5>2015 - 2021</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion" class="container mb-5">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/logo-depcsuite.svg" class="img-fluid baw" title="Aros Sport">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Estudiante de programacion</h3>
                            <h4>DEPCSUITE SA</h4>
                            <h5>2021-presente</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/aros.jpg" class="img-fluid baw" title="Aros Sport">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Instructor musculacion deportiva</h3>
                            <h4>AROS SPORTS</h4>
                            <h5>Gimnasio Evaluarte</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/hellenkeller.jpg" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Instituto Hellen Keller</h3>
                            <h4>English language Institute</h4>
                            <h5>6to Senior - Intermediate B2 (expedicion 2012)</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/utn.jp.png" class="img-fluid baw" title="utn">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Fundamentos de programacion</h3>
                            <h4>Universidad Tecnologica Nacional de Buenos Aires</h4>
                            <h5>Expedición: dic 2021</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once("footer.php");?>
</body>

</html>