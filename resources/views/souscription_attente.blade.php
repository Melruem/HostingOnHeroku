@extends('master')
@inject('confirmers', 'App\Models\Confirmer')
@inject('conf_formations', 'App\Models\Conf_formation')
@inject('formations', 'App\Models\Formation')
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
@section('breadcrumbs')
    <div class="breadcrumbs">
       
    </div>
@endsection

@section('content')
     <div class="container-fluid big-padding about-cover">
     @include('success-message')
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto" >
                    <table  class="table bg-white shadow-md" >
                        <tr>
                            <th>#</th>
                            <th>Image Formation</th>
                            <th>Formation Souscrie</th>
                            <th>Nom_Complet</th>
                            <th>Numéro</th>
                            <th>Sexe</th>
                            <th>Ville</th>
                            <th>Dernier Diplome</th>
                            
                            <th>Langue</th>
                            <th>Situation Professionnelle</th>
                            <th>Date de Naissance</th>
                            <th>Terminée</th>
                            <th>Supprimer</th>
                        </tr>
                        @foreach ($conf_formations::all() as $c)
                        @if($c->condition == '0')
                        <tr class="align-middle">
                            <td>{{$c->id}}</td>
                            <td>
                                @foreach ($formations::all() as $d)
                                    @if($d->id == $c->formation_id)
                                        <img src="{{asset($d->image)}}" width="200px" />
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach ($formations::all() as $d)
                                    @if($d->id == $c->formation_id)
                                        {{$d->nom}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                {{$c->nom_complet}}
                            </td>
                            <td>{{$c->numero}}</td>
                            <td>{{$c->sexe}}</td>
                            <td>{{$c->ville}}</td>
                            <td>{{$c->diplome}}</td>
                            
                            <td>{{$c->langue}}</td>
                            <td>{{$c->situation}}</td>
                            <td>{{$c->date_naiss}}</td>
                            
                            <td>
                                <a href="{{ route('finn', $c->id) }}">
                                <button class="btn btn-xs pt-2 btn-danger">Valider</button>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('erasee', $c->id) }}">
                                <button class="btn btn-xs pt-2 btn-danger"><i class="bi bi-trash"></i></button>
                                </a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                    
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
        
@endsection
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