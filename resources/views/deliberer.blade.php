<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <style>
         body {
            background-image: url('{{ asset("images/background.jpg") }}');
            background-size: cover;
            background-repeat: no-repeat;
    }
    </style>
</head>

<body>
    <div class="container">
        <form method="GET" action="{{route('deliberer')}}">
            <div class="form-group mt-5 ch">
                <label class="ss" for="filiere_id">Filiére</label>
                <select name="filiere_id" id="filiere_id" class="form-select shadow-lg" style="width:1050px;height:30px;border-radius:3px;">
                    <option value="1" >SSI</option>
                    <option value="2" >BI</option>
                    <option value="3" >GL</option>
                </select>
            </div>
            <div class="form-group ch">
                <label class="ss" for="niveau_id">Année</label>
                <select name="niveau_id" id="niveau_id" class="form-select shadow-lg" style="width:1050px;height:30px;border-radius:3px;">
                    <option value="1">1er année</option>
                    <option value="2">2eme année</option>
                    <option value="3">3eme année</option>
                </select>
            </div>
            <div class="go">
                <button type="submit" style="border-radius:4px;margin-top:50px;" class="shadow-lg btn btn-outline-primary btn-block">GO</button>
            </div>
        </form>

        <table class="shadow-lg table table-hover" style="margin-top:40px;">
            <thead>
                <tr>
                    <th>Code apoge</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etudiants as $etudiant)
                    <tr>
                        <th>{{$etudiant->etudiant->code_a}}</th>
                       <th>{{$etudiant->etudiant->nom}}</th>
                       <th>{{$etudiant->etudiant->prenom}}</th>
                       <th>
                            <form methode="POST" action="{{route('dashboard',$etudiant->etudiant->id)}}">
                                <button class="btn btn-outline-dark btn-block">Dashboard</button>
                            </form>
                        </th>    
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <form method="GET" action="{{route('home')}}">
                <button class="btn btn-outline-dark btn-block shadow-lg" style="margin-top:50px;">Page Home</button>
            </form>
        </div>
        <div class="col-lg-2"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>