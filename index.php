<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>My Books | Estante Virtual</title>

  <!-- Custom fonts for this template--> 

  <link href="view/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="view/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="view/css/default.css" rel="stylesheet">

</head>

<body id="page-top">

  <div id="livros">
    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/mybooks">
          <div class="sidebar-brand-icon">
            <i class="fas fa-bookmark"></i>
          </div>
          <div class="sidebar-brand-text mx-3">My Books</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="#" v-on:click="loadEspera">
            <i class="fas fa-fw fa-book"></i>
            <span>Meus Livros</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        
        <li class="nav-item">
          <a class="nav-link" href="#" v-on:click="loadLidos">
            <i class="fas fa-fw fa-check"></i>
            <span>Lidos</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar nos meus livros..." aria-label="Search" aria-describedby="basic-addon2" v-model="pesquisa">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Felipe Pereira</span>
                  <img class="img-profile rounded-circle" src="view/imagens/user.png">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>

            </ul>

          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid" id="main">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">{{tituloPagina}}</h1>
            </div>

            <hr>

            <div v-if="paginaAtual == 'espera'">

              <a class="nav-link" href="#" @click="ShowForm = !ShowForm" v-if="ShowForm">
                <i class="fas fa-fw fa-minus"></i>
                <span>Fechar</span>
              </a>

              <a class="nav-link" href="#" @click="ShowForm = !ShowForm" v-else>
                <i class="fas fa-fw fa-plus"></i>
                <span>Adicionar</span>
              </a>


              <!-- Content Row -->
              <div v-if="ShowForm">

                <div class="row" id="cadastrarLivro">

                    <div class="col-xl-10 col-md-10 mb-12">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control" id="titulo" v-model="iptTitulo" placeholder="Consultar no Google Books...">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-2 mb-12" style="display: flex; align-items: flex-end; justify-content: center;">
                      <div class="form-group" style="width: 100% !important;">
                        <button type="button" class="btn btn-success" v-on:click="getGoogleBooks" style="width: 100% !important;">Pesquisar</button>
                      </div>
                    </div>
                </div>

                <div class="row" v-if="typeof responseGoogleBooks !== 'undefined'">

                  <div class="col-xl-3 col-md-6 mb-4" v-for="book, index of responseGoogleBooks.slice(0, 10)" v-if="Object.keys(book.volumeInfo).includes('imageLinks') && Object.keys(book.volumeInfo).includes('authors')">
                    <div class="card border-left-warning shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters">
                          <div class="col-5" style="width: 100% !important;">
                            <div><img :src="book.volumeInfo.imageLinks.thumbnail" alt="" title="" class="capa-livro-pesquisa"></div>
                          </div>
                          <div class="col-7">
                            <div class="text-xs font-weight-bold text-primary mb-0">{{subString(book.volumeInfo.title)}}</div>
                            <div class="text-xs mb-0 font-weight-bold text-gray-800">- Autor: {{book.volumeInfo.authors[0]}}</div>
                            <div class="text-xs mb-0 font-weight-bold text-gray-800">- Língua: {{upper(book.volumeInfo.language)}}</div>
                            <div class="text-xs mb-0 font-weight-bold text-gray-800">- Páginas: {{book.volumeInfo.pageCount}}</div>
                          </div>

                        </div>
                        <div class="row no-gutters" style="justify-content: center;">
                          <button class="btn btn-success btn-icon-split" style="margin-top: 10px;" v-on:click="salvarLivro(index, book)">
                            <span class="icon text-white-50">
                              <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Inserir</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="row" style="text-align: center; font-size: 25px;" v-else>
                  <div class="col-xl-12 col-md-12 mb-12">
                    <span>Sua pesquisa não retornou nenhum livro... =(</span>
                  </div>
                </div>

              </div>

              <hr>

            </div>

            <br>

            <!-- Content Row -->
            <div class="row" v-if="livros.length > 0">

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-2 col-md-6 mb-4" v-for="livro of LivrosFiltrados">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="height: 32px;">{{livro.titulo}}</div>
                        <div class="moldura-livro">
                        	<img :src="livro.capa" alt="" title="" class="capa-livro">
                        </div>
                        <div class="h6 mb-0 font-weight-bold text-gray-800">{{livro.paginas}} páginas</div>
                      </div>
                    </div>

                    <div class="row no-gutters" style="justify-content: center;">
                        <button class="btn btn-success btn-icon-split" style="margin-top: 10px;" v-if="livro.lido == '0'" v-on:click="ler(livro)">
                          <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                          </span>
                          <span class="text">Já leu?</span>
                        </button>
                        <button class="btn btn-danger btn-icon-split" style="margin-top: 10px;" v-else v-on:click="remover(livro)">
                          <span class="icon text-white-50">
                            <i class="fas fa-times"></i>
                          </span>
                          <span class="text">Descartar</span>
                        </button>
                    </div>

                  </div>
                </div>
              </div>
            
            </div>

            <div class="row" v-else>
              <div class="col-xl-12 col-md-12 mb-12" style="text-align: center; font-size: 40px;">
                Você não tem livros nesta prateleira =(
              </div>
            </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

      </div>
      
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

  </div>
  <!-- End of div id Livros -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="view/vendor/jquery/jquery.min.js"></script>
  <script src="view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="view/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="view/js/sb-admin-2.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  
  <script src="vue/app.js"></script>
  
</body>

</html>
