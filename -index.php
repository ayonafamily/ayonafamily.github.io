<?php  ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <!--Metas-->
  <meta charset="UTF-8">
  <meta name="description" content="Jorge Ayona Curriculum Vitae">
  <meta name="keywords" content="Jorge Ayona, CV, Bootstrap,">
  <meta name="author" content="Jorge Ayona">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS only -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,500&family=Roboto:wght@400;500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="icon" type="image/jpg" href="img/logo2.ico" />
  <!---->
  <title>Jorge Ayona</title>
</head>

<body>
  <div class="container">
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light justify-content-end ">
          <a class="navbar-brand" href="https://jorgeayona.com" id="brand"><i class="fa fa-code mr-1"></i><span
              class="pr-1">Curriculum Vitae</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <a href="#acerca" class="nav-item nav-link paleta2">Acerca</a>
              <a href="#trabajos" class="nav-item nav-link paleta2">Trabajos</a>
              <a href="#formacion" class="nav-item nav-link  paleta2">Formación</a>
              <a href="#contacto" class="nav-item nav-link paleta2">Contacto</a>
            </ul>
          </div>
        </nav>
      </div>

      <main>
        <header>
          <!-- Background image -->
          <div class="p-5 text-center bg-image img-fluid mt-2" style="
          height: 640px;          
          background-image: url('img/monitor-1307227_1280.jpg');          
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.5);">
              <div class="d-flex justify-content-center align-items-center h-100 v-100">
                <div class="text-white">
                  <h1 class="m-3 display-1 titulo" id="arriba ">Jorge Ayona</h1>
                  <h5 class="mb-3 paleta4"><em>Desarrollador Web <br>Social Media Manager</em></h5>
                  <div class="container">
                    <video class="w-100 rounded-1 mt-0" autoplay controls>
                      <source src="video/jorge.mp4">
                    </video>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>

        <div class="container">
          <section>
            <div class="card fit-content border-0" style="width: 100%">
              <img class="card-img-top mt-2" id="icono" src="img/logo.png" alt="jorge ayona">
              <div class="card-body text-center">
                <div id="acerca">
                  <h5 class="card-title text-primary">Jorge Ayona</h5>
                  <p class="text-center">Sobre mí</p>
                </div>
                <p class="card-text">
                  Innovador creador de contenido con un sólido background como Social Media Manager y Desarrollador Web, especializado en HTML5, CSS3, JavaScript y Bootstrap. Con más de una década de experiencia como   Freelance, ofrezco servicios integrales que abarcan desde el desarrollo web, creación de temas
                  personalizados en WordPress, hasta la gestión efectiva de Redes Sociales y la implementación de herramientas de inteligencia artificial.
                </p>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger m-2" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="fa fa-download"></i>Descarga mi Cv</a></button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Zona De Descarga</h1>
                      </div>
                      <div class="modal-body">
                        Muchas gracias por su interés! no dude en contactarse para mayor información.
                      </div>
                      <div class="modal-footer">
                        <!--A tener en cuenta cuando se requiera descarga de archivos-->
                        <a class="btn btn-primary" href="textos/Jorge Ayona.pdf" download="Currículum Vitae"
                          title="Curriculum De Jorge Ayona" target="_blank"><i class="fa fa-download"></i>Click aquí</a>
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                          </i>Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#contacto" class="btn btn-outline-primary target" id="target1">
                  <i class="fa fa-address-card"></i> Contáctame</a>

              </div>
          </section>
        </div>
        <div class="container">
          <section>
            <div class="panel panel-default mt-3">
              <!-- Default panel contents -->
              <div class="panel-heading">
                <h2 class="paleta2 display-5 text-center rebote" id="trabajos">Portafolio</h2>
              </div>
              <div class="panel-body">
                <p class="text-sm-center paleta2"></p>
              </div>

              <!-- Table -->
              <table class=" table table table-striped text-center">
                <thead>
                  <tr>
                    <th class="paleta5  display-6">Sitio</th>
                    <th class=" paleta5  display-6">Propósito</th>
                  </tr>
                </thead>
                <tbody class="text-align-start">
                  <td>
                    <a href=" https://altoniveldigital.com/incaproperu/" target="_blank">IncaproPerú</a>
                  </td>
                  <td>Educativo</td>
                  </tr>
                  <!--<tr>
                    <td>
                      <a href=" http://boltekperu.com" target="_blank">Boltek Perú</a>
                    </td>
                    <td>Corporativa</td>
                  </tr>-->
                  <!--<tr>
                    <td>
                      <a href="http://cursosytalleresdepuestasatierra.com" target="_blank">Cursos
                        &amp;
                        Talleres</a>
                    </td>
                    <td>Corporativa</td>
                  </tr>-->
                  <tr>
                    <td>
                      <a href="https://jorgeayona.com/extintores-servicios/" target="_blank">Extintores &
                        Servicios</a>
                    </td>
                    <td>Corporativa</td>
                  </tr>
                  
                    <td>
                      <a href="https://github.com/ayonafamily/python_projects/" target="_blank">Proyectos Python</a>
                    </td>
                    <td>Proyectos</td>
                    <tr>
                    <td>
                      <a href="https://github.com/ayonafamily/codigos/tree/master/OpcMod6-2" target="_blank">Proyecto Javascript</a>
                    </td>
                    <td>Curso MiriadaX</td>
                  </tr>
                    <tr>
                      <td> <a href="https://bitbucket.org/ayonafamily/sisproint/src/master/" target="_blank">Sisproint</a></td>
                     
                        <td>Repositorio código fuente</td>
                      </td>

                    </tr>
                  
                </tbody>
              </table>
            </div>

            <div class="container">
              <div class="panel-heading">
                <h2 class="paleta2 display-5 text-center rebote" id="trabajos">Experiencia</h2>
              </div>

              <div class="row">
                <div class="col-md-6 mt-5">
                  <h4 class="paleta5 display-6" id="Estancia-Verde">Estancia Verde</h4>
                  <!-- <div class="contenedor">-->
                  <figure>
                    <center><img class="img img-fluid  rounded max-width:1% height:auto" src="img/estancia.jpg" alt="">
                    </center>
                  </figure>
                  <!--</div>-->
                  <ul>
                    <p>Enero 2024 <span class="badge rounded-pill bg-dark"> Actualmente</span><br>Social Media Manager.
                    </p>

                    <li>
                      <p>Desarrollo Web, Temas wordpress personalizados, conversión de páginas
                        estáticas a dinámicas.
                      </p>
                    </li>
                    <li>
                      <p>Community Manager, publicación de contenido en Redes Sociales.</p>
                    </li>
                    <li>
                      <p>Mantenimiento de la web corporativa.</p>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6 mt-5">
                  <h4 class="paleta5 display-6 mb-5" id="Santana-Vera">Santana - Vera </h4>
                  <center>
                    <figure>
                      <img class="img img-fluid  rounded max-width:100% height:auto mb-5" src="img/santana-vega.jpg"
                        alt="">
                    </figure>
                  </center>
                  <ul>
                    <li>
                      <p><strong>Noviembre 2022 - Diciembre 2023</strong><span
                          class="badge rounded-pill bg-dark"></span> </p>
                      Social Media Manager.
                    </li>
                  </ul>
                  <br>
                  <!--<div class="contenedor">-->

                  <!-- </div>-->
                </div>
              </div>
              <!---->
              <div class="row">
                <div class="col-md-6 mt-4 ">
                  <h4 class="paleta5 " id="incapro">Incapro</h4>
                  <center>
                    <figure><img class="img img-fluid  rounded max-width:100% height:auto mb-3" src="img/incapro.jpg"
                        alt=""></figure>
                  </center>
                  <ul>
                    <li style="list-style-type:none">
                      <p><strong>Mayo 2012</strong> <span class="badge rounded-pill bg-dark">Asesor hasta la
                          fecha</span> </p>
                    </li>
                    <li>
                      <p>Desarrollo Web, Temas wordpress personalizados, conversión de páginas
                        estáticas a dinámicas.
                      </p>
                    </li>
                    <li>
                      <p>Community Manager, publicación de contenido en Redes Sociales.</p>
                    </li>
                    <li>
                      <p>Mantenimiento de la web corporativa.</p>
                    </li>
                    <li>
                      <p>Instalación, mantenimiento y personalización de Aula Virtual Moodle.</p>
                    </li>
                    <li>
                      <p>Instructor / Capacitador.</p>
                    </li>
                  </ul>
                  <figure>
                    <svg class="img2 paleta2" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#4657f1"
                      class="bi bi-code-square" viewBox="0 0 16 16">
                      <path
                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                      <path
                        d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z" />
                    </svg>
                  </figure>

                </div>
                <div class="col-md-6 mt-2 max-width: 100%"><!--start-->
                  <h4 class="paleta5" id="Freelance">Freelance</h4>
                  <figure> <img class="img img-fluid  rounded max-width:100% height:auto mb-3"
                      src="img/[Sin nombre].jpg" alt=""></figure>
                  <p><strong>Febrero 2012 – Hasta 2023.</strong> </p>
                  <ul class="text-align-justify">

                    <li>Desarrollo Web</li>
                    <li> Creación de temas wp personalizador</li>
                    <li>Social Media Manager </li>
                  </ul>
                 
                  <figure>
                    <svg class="img2 paleta2 padding-bottom-4" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#4657f1"
                      class="bi bi-code-square" viewBox="0 0 16 16">
                      <path
                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                      <path
                        d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z" />
                    </svg>
                  </figure>
                </div><!-- end-->
              </div>
              <br>
              <br>

              <div class="row">

                <br>
                <div class="col-md-12 mt-1 max-width: 60%">
                  <h4 class="paleta5 text-align-justify" id="tech-web-multimedia">Tech Web Multimedia
                  </h4>
                  <div>
                    <figure>
                      <center><img class="img img-fluid  rounded max-width:100% height:auto" src="img/tech-web.jpg"
                          alt=""></center>

                    </figure>
                  </div>
                  <ul>
                    <li>Noviembre 2019 - hasta abril 2020. Desarrollo Web páginas estáticas,
                      elaboración
                      de temas personalizados
                      wordpress.
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </section>

          <div class="container mt-1 pt-2 pb-3 ">
            <section>
              <h2 id="formacion" class="paleta2 display-5 text-center">Formación</h2>
              <div class="row">
                <div class="col-md-6 mt-2 mr-2">
                  <br>
                  <div class="contenedor">
                    <img class="img img-fluid  rounded max-width: 100% height: auto  " src="img/laptop.jpg"
                      alt="laptop">
                  </div>
                </div>
                <div class=" col-md-6 pt-4 max-width: 60%">
                  <ul>
                    <li>
                      <p>Community Manager - Politécnico De Colombia. Nov - Dic 2022
                      </p>
                    </li>
                    <li>
                      <p>Python for Beginners - Alison - 18 Mar 2024
                      </p>
                    <li>
                      <p>Diseño &amp; Marketing Digital. noviembre 2022 . Instituto SISE (En
                        Progreso). </p>
                    </li>
                    <li>
                      <p>Introducción A La Programación Con Python . Universidad Austral -
                        Argentina.
                      </p>
                    <li>
                      <p>Diseño &amp; Marketing Digital. noviembre 2022 . Instituto SISE (En
                        Progreso). </p>
                    </li>
                    <li>
                      <p>Diseño &amp; Desarrollo Web. mayo – julio 2021. Instituto SISE
                        (Culminado).
                      </p>
                    </li>
                    <li>
                      <p>Diseño Gráfico &amp; Marketing Digital. enero - febrero 2021. En Codeper.
                        (Culminado). </p>
                    </li>
                    <li>
                      <p>Desarrollo Web -Wordpress. noviembre 2020 - enero 2021. En
                        Codeper.(Culminado).</p>
                    </li>
                    <li>
                      <p>Moodle, Creación De Aulas Virtuales. junio 2012 - julio 2012 En
                        Universidad
                        De San Martín De
                        Porres (Culminado)
                      </p>
                    </li>
                    <li>
                      <p>Ventas Por Redes Sociales. marzo 2012 En Instituto Latinoamericano De
                        Empresas &amp;
                        Negocios- Ilen (Culminado)
                      </p>
                    </li>
                    <li>
                      <p>Ciencias Administrativas- Bachiller. junio 2010 En Universidad De San
                        Martín
                        De
                        Porres (Culminado)
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="container">
          <h2 id="conocimientos" class=" paleta2 display-5 text-center">Conocimientos, Competencias y
            Habilidades
          </h2>
          <br>
          <br>
          <div class="row">
            <div class=" col-md-6 pt-3">
              <div class="contenedor">
                <img class="img img-fluid max-width: 100% height: auto  " src="img/programmer.png" alt="programador">
              </div>
            </div>
            <div class=" col-md-6">
              <section>
              </section>
              <section class="p-2 max-width: 60%">
                <h5 id="idiomas" class="paleta5">Idiomas</h5>
                <ul>
                  <li>Portugués Básico, Japonés Básico, Inglés Avanzado</li>
                </ul>
                <h5 class="paleta5">Social Media Management</h5>
                <ul>
                  <li>Creación de contenidos, copywriting, banners, reels, etc</li>
                </ul>
                <h5 class="paleta5">Marketing Digital</h5>
                <ul>
                  <li>Creación - monitoreo de campañas, Ecommerce, Redes sociales, Email marketing.
                  </li>
                </ul>
                <h5 class="paleta5">Diseño &amp; Desarrollo Web</h5>
                <ul>
                  <li>Wordpress , Html5, Css , bootstrap 5, Git, Javascript, Php, Mysql</li>
                </ul>
                <h5 class="paleta5">Lenguages De Programación</h5>
                <ul>
                  <li>Python, Java</li>
                </ul>
                <h5 id="aulas-virtuales" class="paleta5">Aulas Virtuales</h5>
                <ul>
                  <li>Moodle</li>
                </ul>
                <h5 id="dise-o-gr-fico" class="paleta5">Diseño Gráfico</h5>
                <ul>
                  <li>Canva, Inkscape (Corel), Gimp (photoshop)</li>
                </ul>
            </div>
            </section>
          </div>
        </div>
        <br>
        <div class="container">
          <video class="w-100 rounded" autoplay loop muted>
            <source src="video/digital-marketing.mp4" type="video/mp4" />
          </video>
        </div>
      </main>
      <footer>
        <div class="container" id="contacto">
          <div class="card fit-content border-0" style="width: 100%">
            <div class="card-body text-center"> <span class="text-primary"> </scan>
                <h2 class="card-title display-5 paleta2 mb-2">
                  Contáctame</h2>
                <address class="card-text text-center" id="pie">
                  <br>
                  <script src="js/creditos.js"></script>
                </address>
            </div>
          </div>
        </div>
      </footer>
  </div>
  </main>
  <!--Fin -->
  <!--Plantilla de mi cv.. proyecto personal-->
  <!-- JavaScript Bundle with Popper -->
  <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/352205fe26.js"></script>
  <script type='text/javascript' src='js/jquery.js'></script>
</body>
</html>