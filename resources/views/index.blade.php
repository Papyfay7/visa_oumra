<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title id="page-title">Visa Umra</title>
    <!-- STYLE CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/coming-sssoon.css" rel="stylesheet" />
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- jQuery (required for Toastr) -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="images/flags/FR.png" id="selected-language" />
                            <span id="selected-language-text">Français</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" onclick="changeLanguage('en', 'English(US)', 'images/flags/US.png')"><img src="images/flags/US.png" /> English(US)</a></li>
                            <li><a href="#" onclick="changeLanguage('fr', 'Français', 'images/flags/FR.png')"><img src="images/flags/FR.png" /> Français</a></li>
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
                        <a href="{{ url('tracker') }}">
                            <i class="fa fa-twitter"></i>
                            Tracker
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('login') }}">
                            <i class="fa fa-envelope-o"></i>
                            Admin
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-envelope-o"></i>
                            Contacts
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main" style="background-image: url('images/custom.jpg')">
        <div class="cover black" data-color="black"></div>
        <div class="container">
            <h1 class="logo cursive" id="logo">
                Visa Umra
            </h1>
            <div class="content">
                <h4 class="motto" id="motto">Votre Umra, Notre Engagement : Obtenez Votre Visa Facilement</h4>
                <div class="subscribe">
                    <h5 class="info-text" id="info-text">
                        Cliquez sur le bouton ci-dessous pour débuter votre achat de visa
                    </h5>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="button-86" role="button" onclick="openModal()" id="button-text">faire une demande</button>
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

    <div class="modal" id="visaModal">
        <button class="close" onclick="closeModal()">&times;</button>
        <h2 id="registration-title"></h2>
        <p id="personal-info"></p>
        <div class="wrapper">
            <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data" id="wizard">
                @csrf
                <h2 id="additional-info"></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="../images/man.jpg" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3 id="registration-title">Registration</h3>
                            </div>
                            <p id="personal-info">Personal Information</p>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" name="first_name" placeholder="First Name" class="form-control" id="first-name" required>
                                </div>
                                <div class="form-holder">
                                    <input type="text" name="last_name" placeholder="Last Name" class="form-control" id="last-name" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="email" name="email" placeholder="Email Address" class="form-control" id="email" required>
                                </div>
                                <div class="form-holder">
                                    <input type="text" name="phone" placeholder="Phone Number" class="form-control" id="phone" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" name="age" placeholder="Age" class="form-control" id="age" required>
                                </div>
                                <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                                    <div class="checkbox-tick">
                                        <label class="male">
                                            <input type="radio" name="gender" value="male" checked> <span id="gender-male" required>Homme</span><br>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="female">
                                            <input type="radio" name="gender" value="female"> <span id="gender-female" required>Femme</span><br>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <h2 id="additional-info-title"></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="../images/flying.jpg" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3 id="registration-title-2">Registration</h3>
                            </div>
                            <p id="additional-info">Additional Information</p>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <input type="text" name="address" placeholder="Address" class="form-control" id="address">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" name="city" placeholder="City" class="form-control" id="city">
                                </div>
                                <div class="form-holder">
                                    <input type="text" name="postal_code" placeholder="Postal Code" class="form-control" id="postal-code">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <label for="file-upload" class="custom-file-upload" id="upload-documents">
                                        Upload Passport and Visa Photo
                                    </label>
                                    <input id="file-upload" type="file" name="documents[]" class="form-control1" multiple>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <h2 id="payment-options-title"></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="images/paiement.jpg" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3 id="registration-title-3">Registration</h3>
                            </div>
                            <p id="payment-options">Payment Options</p>
                            <div class="payment-container">
                                <button id="toggle-button" class="payment-button" id="choose-payment">Choose Payment Method</button>
                                <div id="payment-options" class="payment-options">
                                    <button type="button" class="payment-option" data-method="Carte de Crédit" id="credit-card">
                                        <img src="{{ asset('images/credit-card.png') }}" alt="Credit Card" class="payment-logo">Credit Card
                                    </button>
                                    <button type="button" class="payment-option" data-method="PayPal" id="paypal">
                                        <img src="{{ asset('images/paypal.png') }}" alt="PayPal" class="payment-logo">PayPal
                                    </button>
                                    <button type="button" class="payment-option" data-method="Virement Bancaire" id="bank-transfer">
                                        <img src="{{ asset('images/bank-transfer.png') }}" alt="Bank Transfer" class="payment-logo">Bank Transfer
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




    <div class="modal" id="visaModal">
        <button class="close" onclick="closeModal()">&times;</button>
        <div class="card">
            <div class="title">Purchase Reciept</div>
            <div class="info">
                <div class="row">
                    <div class="col-7">
                        <span id="heading">Date</span><br>
                        <span id="details">10 October 2018</span>
                    </div>
                    <div class="col-5 pull-right">
                        <span id="heading">Order No.</span><br>
                        <span id="details">012j1gvs356c</span>
                    </div>
                </div>
            </div>

            <div class="tracking">
                <div class="title">Tracking Order</div>
            </div>
            <div class="progress-track">
                <ul id="progressbar">
                    <li class="step0 active " id="step1">Ordered</li>
                    <li class="step0 active text-center" id="step2">Shipped</li>
                    <li class="step0 active text-right" id="step3">On the way</li>
                    <li class="step0 text-right" id="step4">Delivered</li>
                </ul>
            </div>


            <div class="footer">
                <div class="row">
                    <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/YBWc55P.png"></div>
                    <div class="col-10">Want any help? Please &nbsp;<a> contact us</a></div>
                </div>


            </div>
        </div>


    </div>


    <div class="modal-backdrop" id="modalBackdrop"></div>

    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/ui-toasts.js"></script>
    <script src="js/jquery.steps.js"></script>
    <script src="js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
        const translations = {
            en: {
                title: "Visa Umra",
                motto: "Your Umra, Our Commitment: Get Your Visa Easily",
                button_text: "Submit a request",
                info_text: "Click the button below to start your visa purchase",
                form: {
                    registration_title: "Registration",
                    personal_info: "Personal Information",
                    first_name: "First Name",
                    last_name: "Last Name",
                    email: "Email Address",
                    phone: "Phone Number",
                    age: "Age",
                    gender_male: "Male",
                    gender_female: "Female",
                    additional_info: "Additional Information",
                    address: "Address",
                    city: "City",
                    postal_code: "Postal Code",
                    upload_documents: "Upload Passport and Visa Photo",
                    payment_options: "Payment Options",
                    choose_payment: "Choose Payment Method",
                    credit_card: "Credit Card",
                    paypal: "PayPal",
                    bank_transfer: "Bank Transfer"
                }
            },
            fr: {
                title: "Visa Umra",
                motto: "Votre Umra, Notre Engagement : Obtenez Votre Visa Facilement",
                button_text: "Faire une demande",
                info_text: "Cliquez sur le bouton ci-dessous pour débuter votre achat de visa",
                form: {
                    registration_title: "Inscription",
                    personal_info: "Informations Personnelles",
                    first_name: "Prénom",
                    last_name: "Nom",
                    email: "Adresse Email",
                    phone: "Numéro de Téléphone",
                    age: "Âge",
                    gender_male: "Homme",
                    gender_female: "Femme",
                    additional_info: "Informations Supplémentaires",
                    address: "Adresse",
                    city: "Ville",
                    postal_code: "Code Postal",
                    upload_documents: "Télécharger Photo Passeport et Visa",
                    payment_options: "Options de Paiement",
                    choose_payment: "Choisir Moyen de Paiement",
                    credit_card: "Carte de Crédit",
                    paypal: "PayPal",
                    bank_transfer: "Virement Bancaire"
                }
            }
        };

        function changeLanguage(language) {
            const elements = {
                title: document.getElementById('page-title'),
                motto: document.getElementById('motto'),
                button_text: document.getElementById('button-text'),
                info_text: document.getElementById('info-text'),
                'form.registration_title': [
                    document.getElementById('registration-title'),
                    document.getElementById('registration-title-2'),
                    document.getElementById('registration-title-3')
                ],
                'form.personal_info': document.getElementById('personal-info'),
                'form.first_name': document.getElementById('first-name'),
                'form.last_name': document.getElementById('last-name'),
                'form.email': document.getElementById('email'),
                'form.phone': document.getElementById('phone'),
                'form.age': document.getElementById('age'),
                'form.gender_male': document.getElementById('gender-male'),
                'form.gender_female': document.getElementById('gender-female'),
                'form.additional_info': document.getElementById('additional-info'),
                'form.address': document.getElementById('address'),
                'form.city': document.getElementById('city'),
                'form.postal_code': document.getElementById('postal-code'),
                'form.upload_documents': document.getElementById('upload-documents'),
                'form.payment_options': document.getElementById('payment-options'),
                'form.choose_payment': document.getElementById('choose-payment'),
                'form.credit_card': document.getElementById('credit-card'),
                'form.paypal': document.getElementById('paypal'),
                'form.bank_transfer': document.getElementById('bank-transfer')
            };

            for (const [key, value] of Object.entries(translations[language])) {
                if (typeof value === 'string') {
                    if (elements[key]) {
                        elements[key].textContent = value;
                    }
                } else {
                    for (const [subKey, subValue] of Object.entries(value)) {
                        if (Array.isArray(elements[`${key}.${subKey}`])) {
                            elements[`${key}.${subKey}`].forEach(el => el.textContent = subValue);
                        } else if (elements[`${key}.${subKey}`]) {
                            elements[`${key}.${subKey}`].textContent = subValue;
                        }
                    }
                }
            }

            document.getElementById('selected-language').src = language === 'en' ? 'images/flags/US.png' : 'images/flags/FR.png';
            document.getElementById('selected-language-text').textContent = language === 'en' ? 'English(US)' : 'Français';
        }
    </script>
    <!-- Ajoutez ce script juste avant la balise de fermeture </body> -->
    <script>
        // Fonction pour ouvrir le modal
        function openModal() {
            document.getElementById('visaModal').style.display = 'block';
            document.getElementById('modalBackdrop').style.display = 'block';
        }

        // Fonction pour fermer le modal
        function closeModal() {
            document.getElementById('visaModal').style.display = 'none';
            document.getElementById('modalBackdrop').style.display = 'none';
        }

        // Fonction pour gérer l'envoi du formulaire
        document.getElementById('wizard').addEventListener('submit', function(event) {
            event.preventDefault(); // Empêcher l'envoi par défaut

            // Simuler l'envoi du formulaire
            // Ici, vous pouvez utiliser AJAX pour envoyer les données si nécessaire
            setTimeout(function() {
                // Afficher un toast de succès
                toastr.success('Votre demande a été envoyée avec succès !', 'Succès');
                // Optionnel : Fermer le modal après l'envoi
                closeModal();
            }, 1000); // Simuler un délai de traitement de 1 seconde
        });
    </script>

</body>

</html>