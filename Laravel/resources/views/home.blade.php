@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CV</title>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Catia - Trabalho" name="description">
    <meta content="BdgPixel" name="author">
    <!--Fav-->
    <link href="img/favicon.ico" rel="shortcut icon">

    
    <!--styles-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--fonts google-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    
   
  </head>
  <body>
    <!--PRELOADER-->
    <div id="preloader">
      <div id="status">
        <img alt="logo" src="img/mylogo.png">
      </div>
    </div>
    <!--/.PRELOADER END-->

    <!--HEADER -->
    <div class="header">
      <div class="for-sticky">
        <!--LOGO-->
        <div class="col-md-2 col-xs-6 logo">
          <a href="index.html"><img alt="logo" class="logo-nav" src="img/logo.png"></a>
        </div>
        <!--/.LOGO END-->
      </div>
      <div class="menu-wrap">
        <nav class="menu">
          <div class="menu-list">
            <a data-scroll="" href="#home" class="active">
              <span>Home</span>
            </a>
            <a data-scroll="" href="#about">
              <span>Sobre</span>
            </a>
            <a data-scroll="" href="#employement">
              <span>P. Profissional</span>
            </a>
            <a data-scroll="" href="#skill">
              <span>Skills</span>
            </a>
             <a data-scroll="" href="#skill-l">
              <span>Skills Linguísticas</span>
            </a>
            <a data-scroll="" href="#education">
              <span>F. Académica</span>
            </a>
            <a data-scroll="" href="#blog">
              <span>Blog</span>
            </a>
            <a data-scroll="" href="#contact">
              <span>Contacto</span>
            </a>
          </div>
        </nav>
        <button class="close-button" id="close-button">Fechar</button>
      </div>
      <button class="menu-button" id="open-button">
        <span></span>
        <span></span>
        <span></span>
      </button><!--/.for-sticky-->
    </div>
    <!--/.HEADER END-->
    
    <!--CONTENT WRAP-->
    <div class="content-wrap">
      <!--CONTENT-->
      <div class="content">
        <!--HOME-->
        <section id="home">
          <div class="container">
            <div class="row">
              <div class="wrap-hero-content">
                  <div class="hero-content">
                    <h1>Olá!</h1>
                    <br>
                    <span class="typed"></span>
                  </div>
              </div>
              <div class="mouse-icon margin-20">
                <div class="scroll"></div>
              </div>
            </div>
          </div>
        </section>
        <!--/.HOME END-->

        <!--ABOUT-->
        <section id="about">
          <div class="col-md-6 col-xs-12 no-pad">
            <div class="bg-about"></div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12 white-col">
            <div class="row">
              <!--OWL CAROUSEL2-->
              <div class="owl-carousel2">
                <div class="col-md-12">
                  <div class="wrap-about">
                    <div class="w-content">
                      <p class="head-about">
                        Tenho um percurso profissional variado e enriquecedor.<br> Adoro aprender, evoluir e encontro na diversidade o enriquecimento.<br>
                        Motivam-me projetos inovadores e estimulantes. <br>
                        O meu atual objetivo profissional é tornar-me Full-Stack Developer.<br> Já comecei, agora é sempre a crescer. 
                       </p>
                      
                      <h5 class="name">
                        Cátia Mesquita
                      </h5>
                    </div>
                  </div>
                </div>
              
                <div class="col-md-12 col-sm-12 col-xs-12 white-col">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                      <div class="wrap-about">
                        <table class="w-content">
                          <tr>
                            <td class="title">Nome </td>
                            <td class="break">:</td>
                            <td> Cátia Mesquita</td>
                          </tr>
                          <tr>
                            <td class="title">Telemóvel </td>
                            <td class="break">:</td>
                            <td> +351 96 44 141 35</td>
                          </tr>
                          <tr>
                            <td class="title">Email </td>
                            <td class="break">:</td>
                            <td> cmesquita@bestspot.online</td>
                          </tr>
                          <tr>
                            <td class="title">Endereço </td>
                            <td class="break">:</td>
                            <td> Portugal</td>
                          </tr>
                          <tr>
                            <td class="title">Skype </td>
                            <td class="break">:</td>
                            <td> catiameskita</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/.OWL CAROUSEL2 END-->
            </div>
          </div>
        </section>
        <!--/.ABOUT END-->

        <!--EMPLOYMENT-->
        <section class="grey-bg mar-tm-10" id="employement">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Percurso Profissional</span>
                </h3>
                <p class="content-detail">
                   <br><br>A diversidade e a mudança enriquecem. <br> Sair da zona de conforto é talvez o primeiro estímulo para a aprendizagem. Sendo assim e porque gosto de aprender e evoluir procuro a minha primeira experiência profissional em web development. 
              </div>
              <div class="col-md-9 content-right">
                <!--PORTFOLIO IMAGE-->
                <ul class="portfolio-image">
                  <li class="col-md-6">
                    <a href="img/me.jpg"><img alt="image" src="img/me.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                           <p class="desc">Formação Autodidata <br>desde Março 2017</p>
                        </div>

                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="img/LantechBV.jpeg"><img alt="image" src="img/LantechBV.jpeg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Lantech <br> Jul 2015 - Dez 2015
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="img/2000_ISL.jpg"><img alt="image" src="img/2000_ISL.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Escola Internacional do Luxemburgo <br> Nov 2014 -  Jun 2015 
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="img/logoSRE1.jpg"><img alt="image" src="img/logoSRE1.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Secretaria Regional de Educação <br> 2006 - 2014
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="img/dgrhe1.gif"><img alt="image" src="img/dgrhe1.gif">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Direção Geral dos Recursos Humanos da Educação <br> 2005 - 2006
                          </p>  
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="img/Blank.jpg"><img alt="image" src="img/Blank.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Projetos Diversos <br> Em contínuo
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                <!--/.PORTFOLIO IMAGE END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.EMPLOYMENT END-->

        <!--SKILLS-->
        <section class="white-bg" id="skill">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Skills em Desenvolvimento</span>
                </h3>
                <p class="content-detail">
                  Atualmente o meu foco de trabalho encontra-se direcionado para o desenvolvimento de skills em web. Interessa-me o front-end e a criatividade envolvida nesta área. Interessa-me também o back-end e todo o suporte necessário para o funcionamento das tecnologias. Gosto de comunicação e informação digital. Encontro nesta área um motor motivacional em termos profissionais.  
                </p>
              </div>
              <div class="col-md-9 content-right">
                <!--SKILLST-->
                <ul class="skilltecnic">
                    <li>
                        <h3>Front End</h3>
                        <h2><span class="label label-default">HTML5</span></h2>
                        <h2><span class="label label-default">CSS3</span></h2>
                        <h2><span class="label label-default">Bootstrap</span></h2>
                        <h2 style="opacity: 0.2;"><span class="label label-default">JavaScript</span></h2>
                        <h2 style="opacity: 0.2;"><span class="label label-default">jQuery</span></h2>
                    </li>

                    <li>
                        <h3>Back End</h3>
                        <h2><span class="label label-default">PHP</span></h2>
                        <h2><span class="label label-default">Laravel</span></h2>
                        <h2 style="opacity: 0.2;"><span class="label label-default">Angular 4</span></h2>
                        <h2 style="opacity: 0.2;"><span class="label label-default">Node.js</span></h2>

                    </li>


                    <li>   
                        <h3>Base de Dados</h3>
                        <h2><span class="label label-default">MySQL</span></h2>
                        <h2><span class="label label-default">MongoDB</span></h2>
                    </li>
                </ul> 
                <!--/.SKILLST END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.SKILLS END-->

         <!--LANGUAGE SKILLS-->
        <section class="grey-bg mar-tm-10" id="skill-l">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Skills Linguísticas</span>
                </h3>
                <p class="content-detail">
                  Gosto de comunicar e gosto de o fazer também em línguas estrangeiras.    
                </p>
              </div>
              <div class="col-md-9 content-right">
                <!--SKILLST-->

                    <div class="container">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Português
                      </div>  
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">Inglês
                    </div>  
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">Francês
                    </div>  
                    </div>
                     <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">Espanhol
                    </div>  
                    </div>
                    </div>

               
                <!--/.SKILLST END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.LANGUAGE SKILLS END-->

        <!--EDUCATION-->
        <section class="white-bg" id="education">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Formação Académica</span>
                </h3>
                <p class="content-detail">
                  Tenho um percurso académico polivalente. Uma licenciatura em ciências sociais, um mestrado na área da gestão e uma licenciatura numa área tecnológica. <br> Todas estas formações contribuiram para um grande enriquecimento pessoal, académico e profissional. <br> Ensinaram-me também que a aprendizagem é uma constante ao longo da vida e que nós somos os nossos principais formadores.  
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2010 - 2013
                            </h2>
                            <p class="job">
                              Licenciatura em Engenharia Eletrónica e Telecomunicações
                            </p>
                            <p class="company">
                              Universidade da Madeira
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Formação que aborda conhecimentos dentro de quatro áreas: eletrónica, programação, redes e telecomunicações. 
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2004 - 2007
                            </h2>
                            <p class="job">
                              Mestrado em Gestão da Formação Desportiva
                            </p>
                            <p class="company">
                              Universidade Técnica de Lisboa - Faculdade de Motricidade Humana
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Comportamento organizacional, desenvolvimento desportivo, maturação e crescimento, treino desportivo.  
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>  
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              1998 - 2003
                            </h2>
                            <p class="job">
                              Licenciatura em Educação Física e Desporto
                            </p>
                            <p class="company">
                              Universidade de Trás-os-Montes e Alto Douro
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                               Princípios de treino desportivo e seu planeamento. Psicologia do desenvolvimento e do desporto. Fisiologia do esforço, anatomia, psicofisiologia e mecânica do movimento.  Desenvolvimento de habilidades de gestão e comunicação em grupos. Pedagogia e didática aplicada ao ensino da aquisição de habilidades desportivas.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </section>
        
        <!--/.EDUCATION END-->

        
        <!--BLOG-->
        <section class="grey-bg" id="blog">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h3 class="title-small-center text-center">
                  <span>Blog</span>
                </h3>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <p class="content-details text-center">
                      Registos Pessoais
                    </p>
                  </div>
                </div>
                <!--GRID BLOG-->
                <div class="grid">
                  <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog-1" class="img-circle text-center" src="img/blog-1.png">
                      <p class="subtitle fancy">
                        <span></span>
                      </p>
                      <a href="https://catiamesquita.wordpress.com/">
                        <h3 class="title">
                          O meu Blog Pessoal 
                        </h3>
                      </a>
                      <p class="content-blog">
                        Blog Pessoal do Wordpress. 
                      </p>
                    </div>
                  </div>

                              

                </div>
                <!--/.GRID BLOG END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.BLOG END-->

        <!--CONTACT-->
        <section id="contact" class="white-bg">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Contacto</span>
                </h3>
                <p class="content-detail">
                  
                </p>

              </div>
              <div class="col-md-9 content-right">
                <form>
                  <div class="group">
                    <input required="" type="text"><span class="highlight"></span><span class="bar"></span><label>Nome</label>
                  </div>
                  <div class="group">
                    <input required="" type="email"><span class="highlight"></span><span class="bar"></span><label>Email</label>
                  </div>
                  <div class="group">
                    <textarea required=""></textarea><span class="highlight"></span><span class="bar"></span><label>Mensagem</label>
                  </div>
                  <input id="sendMessage" name="sendMessage" type="submit" value="Send Message">
                </form>
              </div>
            </div>
          </div>
        </section>
        <!--/.CONTACT END-->
        
        <!--FOOTER-->
        <footer>
          <div class="footer-top">
            <ul class="socials">
              <li class="facebook">
                <a href="https://www.linkedin.com/in/catiamesquita" data-hover="Linkedin">Linkedin</a>
              </li>
              <li class="codepen">
                <a href="https://codepen.io/catiamesquita/" data-hover="CodePen">CodePen</a>
              </li>
              <li class="gplus">
                <a href="https://github.com/catiameskita" data-hover="GitHub">GitHub</a>
              </li>
            </ul>
          </div>

          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <img src="img/mylogo.png" alt="logo bottom" class="center-block" />
              </div>
            </div>
          </div>
        </footer>
        <!--/.FOOTER-END-->

      <!--/.CONTENT END-->
      </div>
    <!--/.CONTENT-WRAP END-->
    </div>
    

    <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.appear.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/masonry.js" type="text/javascript"></script>
    <script src="js/smooth-scroll.min.js" type="text/javascript"></script>
    <script src="js/typed.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
  </body>
</html>
@endsection
