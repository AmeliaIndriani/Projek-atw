<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Daily Shop | Home</title>
    
    <!-- Font awesome -->
    <link href="{{url('public')}}/assets/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="{{url('public')}}/fontawesome/css./all.min.css">
    <!-- Bootstrap -->
    <link href="{{url('public')}}/assets/css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{url('public')}}/assets/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/assets/css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/assets/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/assets/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="{{url('public')}}/assets/css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{url('public')}}/assets/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{url('public')}}/assets/css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body>       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.html">
                  <span class="fa fa-shopping-cart"></span>
                  <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <i class="fab fa-buromobelexperte" style="font-size: 40px"></i>
                  <span class="aa-cart-title">KATEGORI</span>
                  {{-- <span class="aa-cart-notify">2</span> --}}
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    @foreach ($list_kategori as $kategori)
                    <li>
                      <div class="aa-cartbox-info">
                        <h4><a href="">{{$kategori->nama}}</a></h4>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Search here ex. 'man' ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{url("/home")}}">Home</a></li>
             
              <li class="hidden-xs"><a href="{{url("/checkout")}}">Checkout</a></li>
              <li><a href="{{url("registrasi")}}" data-toggle="modal">Registrasi</a></li>
            <li><a href="{{url('loginadmin')}}" data-toggle="modal">Login</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
  <!-- Products section -->
  <div class= "container">
    <div class ="col-md-12 mt-5">
      <div class="card">
       <div class="card-header">
      
        </div>
    <div class="card-body">
        <form action="{{url('')}} " method="post">
            @csrf
            <div class="form-group">
                <label for="" class="control-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{$nama?? ""}}">
            </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-dark float-right"><i class="fa fa-search"></i>Filter</button>
        </form>
    </div>

  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area" >
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#men" data-toggle="tab"> Produk </a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="men">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        @foreach ($list_produk as $produk)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="{{url('produkDetail', $produk->id)}}"><img src="img/man/baju-distro.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="{{url("/produkDetail")}}">{{$produk->nama}}</a></h4>
                              <span class="aa-product-price">{{$produk->harga}}</span><span class="aa-product-price"><del>$65.50</del></span>
                              <p>{{$produk->stok}}</p>
                            </figcaption>
                          </figure>                        
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                          
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        @endforeach
                      </ul>
                    </div>           
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="{{url('public')}}/assets/js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="{{url('public')}}/assets/js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="{{url('public')}}/assets/js/sequence.js"></script>
  <script src="{{url('public')}}/assets/js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="{{url('public')}}/assets/js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="{{url('public')}}/assets/js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="{{url('public')}}/assets/js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{{url('public')}}/assets/js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="{{url('public')}}/assets/js/custom.js"></script> 

  </body>
</html>