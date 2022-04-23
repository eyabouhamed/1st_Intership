
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Events</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="{{asset('css/bootstrap.min.css ')}}" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="{{asset('fontawesome/css/all.min.css')}}" rel="stylesheet"  /> <!-- https://fontawesome.com/ -->
    <link href="{{asset('css/templatemo-diagoona.css')}}" rel="stylesheet"  />
<!--

TemplateMo 550 Diagoona

https://templatemo.com/tm-550-diagoona

-->
</head>
<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <i class="fas fa-umbrella-beach fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                            <h1 class="tm-sitename text-uppercase">Ella Events</h1>
                            <strong><p class="tm-slogon">Votre satisfaction est notre priorité</p></strong>
                        </div>        
                    </div>
                </div>
                <div class="tm-col-right">
                    <div class="posnav3">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" 
                            data-toggle="collapse" data-target="#navbar-nav" 
                            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="index">Acceuil</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="services">Services</a>
                                </li>                            
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="contact">Contact <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>                            
                        </div>                        
                    </nav>
                    </div>
                </div>
            </div>
            
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main"> <!-- Content -->
                        <h2 class="mb-4 tm-content-title">Contacter nous</h2>
                        <p class="mb-85"> Si vous avez des questions, n'hésitez pas de nous contacter en remplissant ce petit formulaire
						ou bien sur le numéro téléphone 29151724.</p>
                        <form class="contact-form" action="" method="POST">
                            <div class="form-group mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Nom et Prénom" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div class="form-group mb-5">
                                <textarea rows="6" name="message" class="form-control" placeholder="Message..." required=""></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-big btn-primary">Envoyer</button>
                            </div>
                        </form>
                </main>
            </div>
        </div>        

        <div class="tm-row">
            <div class="tm-col-left text-center">            
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>            
            </div>        
 
        </div>

        <div class="tm-bg"> <!-- Diagonal background design -->
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.backstretch.min.js')}}"></script>
    <script src="{{asset('js/templatemo-script.js')}}"></script>
</body>
</html>