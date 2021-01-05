@extends('layouts.app')
@section('header')

    <link rel="stylesheet" href="{{asset('css/luiz/styles.css')}}">
    <link rel="stylesheet" href="/css/luiz/body.css">
    <link rel="stylesheet" href="/css/luiz/heading.css">

    <title>{{ $github->name }} - Home</title>
@endsection
@section('content')
<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">LUIZ CLAUDIO</a>
            <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">PORTFOLIO</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">SOBRE</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">CONTATO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="/luiz/img/perfil02.png" alt="">
            <!-- Masthead Heading-->
            <h1 class="masthead-heading mb-0">Luiz Claudio</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="pre-wrap masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Developer
</p>
        </div>
    </header>
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary mb-0 d-inline-block">PORTFOLIO</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Items-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="/luiz/img/portfolio/barbeariadogordin.jpg" alt="Barbearia do Gordin"/>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="/luiz/img/portfolio/barbeariajb.jpg" alt="Tasty Cake"/>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="/luiz/img/portfolio/circus.png" alt="Circus Tent"/>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="/luiz/img/portfolio/game.png" alt="Controller"/>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="/luiz/img/portfolio/safe.png" alt="Locked Safe"/>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="/luiz/img/portfolio/submarine.png" alt="Submarine"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Modal-->
    <div class="portfolio-modal modal fade" id="portfolioModal0" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal0Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Barbearia do Gordin</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="/luiz/img/portfolio/barbeariadogordin.jpg" alt="Barbearia do Gordin"/>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="/luiz/img/portfolio/instagram-barbeariadogordin.jpg" alt="Barbearia do Gordin"/>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Artes feitas para instagram, cartão de visita com direito a logo personalizado.</p>
                                <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Fechar janela</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Barbearia do JB</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="/luiz/img/portfolio/barbeariajb.jpg" alt="Tasty Cake"/>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="/luiz/img/portfolio/instagram-barbeariadojb.jpg" alt="Tasty Cake"/>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Fechar janela</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Circus Tent</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="/luiz/img/portfolio/circus.png" alt="Circus Tent"/>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Fechar janela</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Controller</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="/luiz/img/portfolio/game.png" alt="Controller"/>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Fechar janela</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Locked Safe</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="/luiz/img/portfolio/safe.png" alt="Locked Safe"/>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Fechar janela</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal5Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Submarine</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="/luiz/img/portfolio/submarine.png" alt="Submarine"/>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Fechar janela</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading d-inline-block text-white">sobre</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="pre-wrap lead">Artista grafico focado em artes para web e social medias.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="pre-wrap lead">Web Designer com conhecimentos em paginas performaticas e responsivas para sua empresa</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="pre-wrap lead">Developer FullStack, com conhecimento em PHP, JavaScript, React, Flutter...</p>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary d-inline-block mb-0">contato</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Content-->
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <a target="_blank" href="https://api.whatsapp.com/send/?phone=5521979565344&text=Oi+Luiz%21&app_absent=0" >
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-3"><i class="fas fa-mobile-alt"></i></div>
                            <div class="text-muted">Phone</div>
                            <div class="lead font-weight-bold">(21) 9-7956-5344</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-contact mb-3"><i class="far fa-envelope"></i></div>
                        <div class="text-muted">Email</div><a class="lead font-weight-bold" href="mailto:contato.luizdevs@gmail.com">contato.luizdevs@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">LOCATION</h4>
                    <p class="pre-wrap lead mb-0">Rio de Janeiro <br> Brasil</p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">Me encontre</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.twitter.com/imnotvirus"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/luizcode/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/imnotvirus"><i class="fab fa-fw fa-github"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="mb-4">Obrigado</h4>
                    <p class="pre-wrap lead mb-0">Obrigado por entrar na minha pagina, qualquer duvida pode me ativar no whatsapp e trocar um papo.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <section class="copyright py-4 text-center text-white">
        <div class="container"><small class="pre-wrap">© imnotvirus 2021</small></div>
    </section>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Core theme JS-->
    <script src="js/luiz/scripts.js"></script>
@endsection
