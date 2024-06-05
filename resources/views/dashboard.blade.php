        
@inject('confirmers', 'App\Models\Confirmer')
@inject('formations', 'App\Models\Formation')
@inject('paniers', 'App\Models\Panier')
@inject('produits', 'App\Models\Produit')
@inject('messages', 'App\Models\Message')
@inject('conf_formations', 'App\Models\Conf_formation')
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Les entreprises Maelo</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
    </head>
        @php
        $a = 0;
        $b = 0;
        $c = 0;
        $i = 0;
        $j = 0;
        $v = 0;
    @endphp
    @foreach ($produits::all() as $p)
            @php
                $a = $a + 1;
            @endphp
    @endforeach

    @foreach ($confirmers::all() as $d)
        @if($d->condition == '0')
            @php
                $b = $b + 1;
            @endphp
        @endif
    @endforeach

    @foreach ($confirmers::all() as $e)
        @if($e->condition == '1')
            @php
                $c = $c + 1;
            @endphp
        @endif
    @endforeach

    @foreach ($conf_formations::all() as $k)
        @if($k->condition == '0')
            @php
                $i = $i + 1;
            @endphp
        @endif
    @endforeach

    @foreach ($conf_formations::all() as $l)
        @if($l->condition == '1')
            @php
                $j = $j + 1;
            @endphp
        @endif
    @endforeach

    @foreach ($messages::all() as $m)
        @if($m->condition == '0')
            @php
                $v = $v + 1;
            @endphp
        @endif
    @endforeach

       <div class="row mt-5">
       @include('success-message')
        <div class="col-lg-3 col-md-4 mb-4" >
         
                        <div class="bg-white p-2 shadow-md">
                            <div class="text-center" >
                            
                                
                                    <img src="{{asset('content/boutique/fond 2.jpg')}}" />
                                
                            </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold">Liste des produits</h4>
                                
                                <ul class="mt-0 vgth">
                                    <li class="fs-8">
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li class="float-end gvi">
                                        <i class="bi text-danger bi-heart-fill"></i>
                                    </li>
                                </ul>
                                <div class="row pt-2">
                                    <div class="col-md-6">
                                        <a href="{{ route('produit') }}">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger">Consultez</button>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                
                                        <a href="">
                                          <button class="btn fw-bold w-100 btn-outline-danger">Nombre de produit : {{ $a }}</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-4" >
                        <div class="bg-white p-2 shadow-md">
                            <div class="text-center" >
                            
                                
                                    <img src="{{asset('content/boutique/cybersecurite.jpg')}}" />
                                
                            </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold">Ajouter un Produit</h4>
                                
                                <ul class="mt-0 vgth">
                                    <li class="fs-8">
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li class="float-end gvi">
                                        <i class="bi text-danger bi-heart-fill"></i>
                                    </li>
                                </ul>
                                <div class="row pt-2">
                                    <div class="col-md-6">
                                        <a href="{{ route('add') }}">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger">Ajout</button>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                
                                        <a href="">
                                          <button class="btn fw-bold w-100 btn-outline-danger">Nombre de produit : {{ $a }}</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-4" >
                        <div class="bg-white p-2 shadow-md">
                            <div class="text-center" >
                            
                                
                                    <img src="{{asset('content/boutique/datascience.jpg')}}" />
                                
                            </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold">Commandes en Attente</h4>
                                
                                <ul class="mt-0 vgth">
                                    <li class="fs-8">
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li class="float-end gvi">
                                        <i class="bi text-danger bi-heart-fill"></i>
                                    </li>
                                </ul>
                                <div class="row pt-2">
                                    <div class="col-md-6">
                                        <a href="{{ route('waiting') }}">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger">Consultez</button>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                
                                        <a href="">
                                          <button class="btn fw-bold w-100 btn-outline-danger">Nombre de Commande : {{ $b }}</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-4" >
                        <div class="bg-white p-2 shadow-md">
                            <div class="text-center" >
                            
                                
                                    <img src="{{asset('content/boutique/application.jpg')}}" />
                                
                            </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold">Commandes Terminées</h4>
                                
                                <ul class="mt-0 vgth">
                                    <li class="fs-8">
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li class="float-end gvi">
                                        <i class="bi text-danger bi-heart-fill"></i>
                                    </li>
                                </ul>
                                <div class="row pt-2">
                                    <div class="col-md-6">
                                        <a href="{{ route('complet') }}">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger">Consultez</button>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                
                                        <a href="">
                                          <button class="btn fw-bold w-100 btn-outline-danger">Nombre de Commande : {{ $c }}</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-4" >
                        <div class="bg-white p-2 shadow-md">
                            <div class="text-center" >
                            
                                
                                    <img src="{{asset('content/boutique/web.jpg')}}" />
                                
                            </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold">Souscriptions Terminées</h4>
                                
                                <ul class="mt-0 vgth">
                                    <li class="fs-8">
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li class="float-end gvi">
                                        <i class="bi text-danger bi-heart-fill"></i>
                                    </li>
                                </ul>
                                <div class="row pt-2">
                                    <div class="col-md-6">
                                        <a href="{{ route('zubete') }}">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger">Consultez</button>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                
                                        <a href="">
                                          <button class="btn fw-bold w-100 btn-outline-danger">Nombre de Souscriptions terminées : {{ $j }} </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-4" >
                        <div class="bg-white p-2 shadow-md">
                            <div class="text-center" >
                            
                                
                                    <img src="{{asset('content/boutique/datascience.jpg')}}" />
                                
                            </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold">Messages Non Lus</h4>
                                
                                <ul class="mt-0 vgth">
                                    <li class="fs-8">
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li class="float-end gvi">
                                        <i class="bi text-danger bi-heart-fill"></i>
                                    </li>
                                </ul>
                                <div class="row pt-2">
                                    <div class="col-md-6">
                                        <a href="{{ route('list') }}">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger">Consultez</button>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                
                                        <a href="">
                                          <button class="btn fw-bold w-100 btn-outline-danger">Nombre de Message : {{ $v }}</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-4" >
                        <div class="bg-white p-2 shadow-md">
                            <div class="text-center" >
                            
                                
                                    <img src="{{asset('content/boutique/cybersecurite.jpg')}}" />
                                
                            </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold">Souscriptions En Attente</h4>
                                
                                <ul class="mt-0 vgth">
                                    <li class="fs-8">
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li class="float-end gvi">
                                        <i class="bi text-danger bi-heart-fill"></i>
                                    </li>
                                </ul>
                                <div class="row pt-2">
                                    <div class="col-md-6">
                                        <a href="{{ route('stay') }}">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger">Consultez</button>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                
                                        <a href="">
                                          <button class="btn fw-bold w-100 btn-outline-danger">Nombre de Souscriptions en Attente : {{ $i }} </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
     <footer>
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 foot-about">
                        <h4>A Propos de Nous</h4>

                        <p>Les Entreprises Maelo est une startup qui vous propose des services de qualité dans le domaine de la vente du matériel informatique et les formations de haut niveau avec certification reconnue.</p>

                        <ul>
                            <li>Montée Jouvence, descente Mario en face de Méa Bois</li>
                            <li>marcellin15kenfack@yahoo.fr</li>
                            <li>677 78 30 43</li>
                        </ul>
                    </div>

                    <div class="col-md-3 foot-post">
                        <h4>Dernières Publications</h4>

                        <div class="post-row">
                            <div class="image">
                                <img src="assets/images/blog/1.jpg" alt="">
                            </div>
                            <div class="detail ps-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>
                            </div>
                        </div>

                        <div class="post-row">
                            <div class="image">
                                <img src="assets/images/blog/7.jpg" alt="">
                            </div>
                            <div class="detail p-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>
                            </div>
                        </div>

                        <div class="post-row">
                            <div class="image">
                                <img src="assets/images/blog/6.jpg" alt="">
                            </div>
                            <div class="detail ps-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 foot-services">
                        <h4>Top Categorie</h4>

                        <ul>
                            <li><a href="">Nos Formations</a></li>
                            <li><a href="">Matériel Informatique</a></li>
                            <li><a href="">Nos services</a></li>
                            <li><a href="">Nous contactez</a></li>
                            <li><a href="">A propos de nous</a></li>
                            
                        </ul>
                    </div>

                    <div class="col-md-3 foot-news">
                        <h4>News Letter</h4>
                        <p>Soyez informé de nos dernières publication, en communicant votre adresse Email </p>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control mb-0" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text bg-danger" id="basic-addon2"><i class="bi text-white bi-send"></i></span>
                            </div>
                        </div>

                        <ul>
                            <li><i class="bi bi-facebook"></i></li>
                            <li><i class="bi bi-twitter"></i></li>
                            <li><i class="bi bi-instagram"></i></li>
                            <li><i class="bi bi-linkedin"></i></li>
                            <li><i class="bi bi-pinterest"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy">
        <div class="container">
            <a href="https://www.smarteyeapps.com/">2024 &copy; All Rights Reserved | Designed and Developed by Les Entreprises Maelo.com</a>

            <span>
                <a href=""><i class="fab fa-github"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href="https://in.pinterest.com/prabnr/pins/"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://twitter.com/prabinraja89"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/freewebtemplatesbysmarteye"><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>
    </div>
        
    </bod>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>

</html>
@section('script')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
