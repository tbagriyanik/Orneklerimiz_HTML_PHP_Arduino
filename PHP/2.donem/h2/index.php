<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS Site</title>
    <link href="bootstrap.min.css" rel="stylesheet" >
    <script src="bootstrap.bundle.min.js" ></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" fill-rule="evenodd" class="navbar-nav-svg d-inline-block align-text-top" viewBox="0 0 40 41" role="img"><title>Open Collective</title><path fill-opacity=".4" d="M32.8 21c0 2.4-.8 4.9-2 6.9l5.1 5.1c2.5-3.4 4.1-7.6 4.1-12 0-4.6-1.6-8.8-4-12.2L30.7 14c1.2 2 2 4.3 2 7z"></path><path d="M20 33.7a12.8 12.8 0 0 1 0-25.6c2.6 0 5 .7 7 2.1L32 5a20 20 0 1 0 .1 31.9l-5-5.2a13 13 0 0 1-7 2z"></path></svg>                Logo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <div class="navbar-nav me-auto">
                    <div class="btn-group btn-group">
                        <a href="index.cshtml" type="button" class="btn btn-warning">Ana Sayfa</a>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Ürünler</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Akıllı Telefon</a>
                                <a class="dropdown-item" href="#">Dizüstü Bilgisayar</a>
                            </div>
                        </div>
                        <a type="button" class="btn btn-primary">İletişim</a>
                    </div>
                </div>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Arama">
                    <button class="btn btn-primary" type="button">Ara</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-5 p-5 bg-warning text-black text-center">
        <h2 class="text-danger">Haydi Yapalım</h2>
        <h1>A11E - Bootstrap Sitemiz 2022</h1>
        <p><?php 
         echo "Selamlar"; //veritabanina bağlanabilir
        ?></p>
        <p>Responsive sitemiz!</p>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4 p-3">
                <h3>HTML 5</h3>
                <p>1 ayda öğrendik</p>
                <img src="resim/171-200x300.jpg" class="img-fluid img-thumbnail  rounded-3 mx-auto d-block">
            </div>
            <div class=" col-sm-4 p-3">
                <h3>CSS 3</h3>
                <p>3 ay uğraştık</p>
                <img src="resim/382-200x300.jpg" class="img-fluid img-thumbnail rounded-3 mx-auto d-block">
            </div>
            <div class=" col-sm-4 p-3">
                <h3>ASP.NET <span class="badge rounded-pill bg-primary">Yeni</span></h3>
                <p>ASP öncesi Bootstrap, JS, C# ve SQL öğreniyoruz</p>
                <img src="resim/485-200x300.jpg" class="img-fluid img-thumbnail rounded-3 mx-auto d-block">
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <h2>Kampanya Ürünlerimiz</h2>
        <p>Burada son çıkan ve sevilen ürünün bilgileri var</p>
        <div class="card img-fluid" style="width:300px">
            <img class="card-img-top" src="resim/1006-300x200.jpg" alt="Card image" style="width:100%">
            <div class="card-img-overlay">
                <h4 class="card-title">iPhone 15</h4>
                <p class="card-text text-primary">1TB bellek ve 32 GB RAM.</p>
                <a href="#" class="btn btn-primary">Detaylar</a>
            </div>
        </div>
    </div>
    <hr>
    <!-- Carousel -->
    <div id="demo" class="carousel slide p-4" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="resim/144-1080x300.jpg" alt="İstanbul" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3 class="text-primary">İstanbul</h3>
                    <p>2 Kıtanın birleştiği şehir!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="resim/894-1080x300.jpg" alt="Ankara" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3 class="text-primary">Ankara</h3>
                    <p>Teşekkürler Başkent!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="resim/984-1080x300.jpg" alt="Antalya" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3 class="text-primary">Antalya</h3>
                    <p>Turizm merkezimiz!</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
    </div>

    <hr>
    <div class="alert alert-success alert-dismissible mx-5">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Başarılı!</strong> Mesajınız gönderildi.
    </div>

    <form action="" class="m-5 p-2 border">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Epostanız:</label>
            <input type="email" class="form-control" id="email" placeholder="Eposta Adresiniz" name="email">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Mesajınız:</label>
            <textarea class="form-control" placeholder="Mesajınız" name="mesaj"></textarea>
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember">Mesajımda sorun yoktur
    </label>
        </div>
        <button type="submit" class="btn btn-primary">Yolla</button>
    </form>
    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>Dipnotta Facebook, Instagram gibi linkler olsun</p>
    </div>
</body>

</html>