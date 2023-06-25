<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Procés verbal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <style>
        body {
                background-image: url('{{ asset("images/background.jpg") }}');
                background-repeat: no-repeat;
                background-size: cover;
                }
        #h1bull {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <h1 id="h1bull"><b>Procés Verbal</b></h1>
    <div class="row">
        <div class="col-lg-2">
            
        </div>
        <div class="col-lg-8">
                <form>
                        <div class="form-group headlabels" style="margin-top:15px">
							<label for="nom" class="headerlabel">NOM : </label>
							<label class="headerlabel"> {{$etudiant->nom}}</label>
						</div>
						<div class="form-group headlabels atop">
						    <label for="prenom" class="headerlabel">PRENOM :</label>
							<label class="headerlabel">{{$etudiant->prenom}}</label>
						</div>
						<div class="form-group headlabels atop">
							<label for="field" class="headerlabel">Filiere :</label>
							<label class="headerlabel">SSI</label>
						</div>
						<div class="form-group headlabels atop">
							<label for="date" class="headerlabel">Date de Naissance :</label>
							<label class="headerlabel">{{$etudiant->date_naissance}}</label>
						</div>
                        <div class="form-group headlabels atop" >
							<label for="code" class="headerlabel">Code Apogéee :</label>
							<label class="headerlabel">{{$etudiant->code_a}}</label>
						</div>
						<div class="form-group headlabels atop">
							<label for="email" class="headerlabel"> EMAIL :</label>
							<label class="headerlabel">{{$etudiant->email}}</label>
						</div>
						<div class="form-group headlabels atop">
							<label for="cin" class="headerlabel">C.I.N :</label>
							<label class="headerlabel">{{$etudiant->cin}}</label>
						</div>
                        <div class="form-group headlabels atop">
							<label for="cin" class="headerlabel">C.N.A :</label>
							<label class="headerlabel">{{$etudiant->cna}}</label>
						</div>
                        <div class="form-group headlabels atop">
							<label for="cin" class="headerlabel">Décision prise :</label>
							<label class="headerlabel">{{$decision}}</label>
						</div>
                </form>   
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-8" >
            <form method="GET" action="{{route('dashboard',$etudiant->id)}}">
                <button class="btn btn-outline-dark btn-block shadow-lg" style="margin-top:50px;margin-bottom:50px;">Tableau de bord</button>
            </form>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
</body>
</html>