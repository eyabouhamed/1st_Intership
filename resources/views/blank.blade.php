<html>
    <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/templatemo-diagoona.css')}}" rel="stylesheet" />


    </head>
    <body>
       <strong> <p class="textdate">La sélection a été bien réussi. </n> Merci d'insérer la date de votre événement</p></strong>
        <form id="contact-form" action="{{route('checkEvent')}}" method="POST">
                            <div class="form-group mb-4">
                                <input type="date" name="name" id="date-box" placeholder="Date de l'événement" required="" />
                            </div>

        <div class="text-right">
                                <button type="submit" class="btnenvblank">Envoyer</button>
        </div>
        </form>
        
    </body>
</html>