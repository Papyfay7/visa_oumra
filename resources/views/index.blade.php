<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>Visa_Umra</title>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/coming-sssoon.css" rel="stylesheet" />

    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="images/flags/US.png" />
                            English(US)
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><img src="images/flags/DE.png" /> Deutsch</a></li>
                            <li><a href="#"><img src="images/flags/GB.png" /> English(UK)</a></li>
                            <li><a href="#"><img src="images/flags/FR.png" /> Français</a></li>
                            <li><a href="#"><img src="images/flags/RO.png" /> Română</a></li>
                            <li><a href="#"><img src="images/flags/IT.png" /> Italiano</a></li>

                            <li class="divider"></li>
                            <li><a href="#"><img src="images/flags/ES.png" /> Español <span class="label label-default">soon</span></a></li>
                            <li><a href="#"><img src="images/flags/BR.png" /> Português <span class="label label-default">soon</span></a></li>
                            <li><a href="#"><img src="images/flags/JP.png" /> 日本語 <span class="label label-default">soon</span></a></li>
                            <li><a href="#"><img src="images/flags/TR.png" /> Türkçe <span class="label label-default">soon</span></a></li>

                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook-square"></i>
                            Share
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                            Tweet
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-envelope-o"></i>
                            Email
                        </a>
                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    <div class="main" style="background-image: url('images/2150999780.jpg')">
        <div class="cover black" data-color="black"></div>
        <div class="container">
            <h1 class="logo cursive">
                Visa Umra
            </h1>
            <div class="content">
                <h4 class="motto">Votre Umra, Notre Engagement : Obtenez Votre Visa Facilement</h4>
                <div class="subscribe">
                    <h5 class="info-text">
                        Cliquez sur le bouton ci-dessous pour débuter votre achat de visa
                    </h5>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-5 col-sm6-6 col-sm-offset-3 ">
                            <button type="submit" class="btn btn-danger btn-fill" onclick="openModal()">faire une
                                demande </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                Made with <i class="fa fa-heart heart"></i> by <a href="">InnopeakSn</a>
            </div>
        </div>
    </div>

    <!-- Fenêtre modale -->
    <div class="modal" id="visaModal">
        <button class="close" onclick="closeModal()">&times;</button>
        <h2></h2>
        <p></p>
        <!-- Formulaire de demande de visa -->
        <div class="wrapper">
            <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data" id="wizard">
                @csrf
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="../images/man.jpg" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Registration</h3>
                            </div>
                            <p>informations-personnelles</p>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" name="first_name" placeholder="Prénom" class="form-control">
                                </div>
                                <div class="form-holder">
                                    <input type="text" name="last_name" placeholder="Nom" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="email" name="email" placeholder="Adresse Email" class="form-control">
                                </div>
                                <div class="form-holder">
                                    <input type="text" name="phone" placeholder="Numero Telephone" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" name="age" placeholder="Age" class="form-control">
                                </div>
                                <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                                    <div class="checkbox-tick">
                                        <label class="male">
                                            <input type="radio" name="gender" value="male" checked> Homme<br>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="female">
                                            <input type="radio" name="gender" value="female"> Femme<br>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SECTION 2 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="../images/top.jpg" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Registration</h3>
                            </div>
                            <p>informations-supplementaires</p>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <input type="text" name="address" placeholder="Adresse" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" name="city" placeholder="Ville" class="form-control">
                                </div>
                                <div class="form-holder">
                                    <input type="text" name="postal_code" placeholder="Code postal" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <label for="file-upload" class="custom-file-upload">
                                        photo passport et visa
                                    </label>
                                    <input id="file-upload" type="file" name="documents[]" class="form-control1" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SECTION 3 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="images/paiement.jpg" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Registration</h3>
                            </div>
                            <p>Options de Paiement</p>
                            <div class="payment-container">
                                <button id="toggle-button" class="payment-button">Choisir Moyen de Paiement</button>
                                <div id="payment-options" class="payment-options">
                                    <button type="button" class="payment-option" data-method="Carte de Crédit">
                                        <img src="{{ asset('images/credit-card.png') }}" alt="Carte de Crédit" class="payment-logo">Carte de Crédit
                                    </button>
                                    <button type="button" class="payment-option" data-method="PayPal">
                                        <img src="{{ asset('images/paypal.png') }}" alt="PayPal" class="payment-logo">PayPal
                                    </button>
                                    <button type="button" class="payment-option" data-method="Virement Bancaire">
                                        <img src="{{ asset('images/bank-transfer.png') }}" alt="Virement Bancaire" class="payment-logo">Virement Bancaire
                                    </button>
                                </div>
                            </div>
                            <div>
                                <img src="images/bouton-senegal-03.png" alt="">
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>

    <!-- Arrière-plan flouté -->
    <div class="modal-backdrop" id="modalBackdrop"></div>

    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- JQUERY STEP -->
    <script src="js/jquery.steps.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
