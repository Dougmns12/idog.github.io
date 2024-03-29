<?php
session_start();
if(isset($_SESSION["nome"])){
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="icon" href="img/icone.png" type="image/x-icon" />

        <title>Idog</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <ul class="navbar-nav ml-auto">

                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">

                                <!-- item - sacola-->

                                <button class="btn" type="button">
                            <a href="index.php">
                            <i class="fas fa-home fa-lg"></i></a>
                        </button> 
                                <button class="btn" type="button">
                            <a href="404.html">
                            <i class="fas fa-shopping-bag fa-lg"></i></a>
                        </button>

                                <div class="topbar-divider d-none d-sm-block"></div>

                                <!-- usuário -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Gerente</span>
                                        <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="categorias.php">
                                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Categorias
                                        </a>
                                        <a class="dropdown-item" href="produtos.php">
                                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Produtos
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Sair
                                        </a>
                                    </div>
                                </li>


                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Content Row -->
                        <div class="row">

                            <!-- OFERTA 1 -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cachorro quente</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">CACHORRO QUENTE</div>
                                            </div>
                                            <div class="col-auto">
                                                <img height="90" src="img/icone.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- OFERTA 2 -->
                            <div class="col-xl-3 col-md-6 mb-4" href="#sushi">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    sushi</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">SUSHI</div>
                                            </div>
                                            <div class="col-auto">
                                                <img height="90" src="img/sushi.jfif">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- OFERTA 3 -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    PANQUECA</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">PANQUECA</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-hotdog fa-3x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    BEBIDAS</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">BEBIDAS</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-hotdog fa-3x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <hr class="sidebar-divider border-primary">
                        <br/>

                        <!-- Content Row -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4" id="quente">
                            <h1 class=" pl-4 mb-0 text-grey-800">CARDÁPIO DE CACHORRO QUENTE</h1>
                        </div>
                        <div class="row">
                            <!-- bloco 1 -->
                            <div class="col-xl-4 col-lg-5 col-sm-6">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Cachorro-quente do Chef</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>

                                            <!-- Edição dos cards -->
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                                <div class="dropdown-header">Configurações</div>
                                                <a class="dropdown-item" href="#">Excluir</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <!-- <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a> -->
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-2 pb-2">
                                            <img class="img-fluid" src="img/chef.jpg" alt="">
                                        </div>
                                        <br>
                                        <div class="mt-4 text-center small">
                                            <h1 class="h2">R$ XX,XX</h1>
                                            <h1 class="h6">descrição do produto</h1>
                                            <div class="my-2"></div>
                                            <a href="404.html" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                                <span class="text">Adicionar a sacola</span>
                                            </a>
                                            <div class="my-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Realmente deseja encerrar a sessão?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                    </div>
                    <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para encerrar sua sessão atual.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="sair.php">Sair</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

    </body>

    </html>


<?php
}else{
    header('location: login.php');
}
?>