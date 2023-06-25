<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style2.css') }}"/>
    <style>
        body {
                background-image: url('{{ asset("images/background.jpg") }}');
                background-repeat: no-repeat;
                background-size: cover;
                }
     #V {
            text-align: center;
            margin-top: 300px;
            padding: 20px;
            color:white;
			font-size: 1.5em;	
            border-radius: 5px;
            font-size:40pt;
            box-shadow: 10px 10px 5px 12px lightblue;
        }
    #tb {
        width :400px;
        margin-left:150px;
        margin-top:50px;
        height:100px;
        font-size:15pt;
        border-radius:10px;
    }
    #choix{
        width:400px;
        margin-left:100px;
        margin-top:50px;
        height:100px;
        font-size:15pt;
         border-radius:10px;

    }

    </style>
    <title>Validation</title>
    <link rel="icon" href="favi.png" />
</head>

<body>
    @if ($div==0)
    <div id="V" style="background-color:lightcoral;"><p>L'étudiant a déjà ajourné</p></div>
    @endif
    @if ($div==1)
    <div id="V" style="background-color:lightgreen;"><p>L étudiant a déjà validé</p></div>
    @endif
    @if ($div==2)
    <div id="V" style="background-color:lightgreen;" ><p>L'étudiant a validé l'année !</p></div>
    @endif
    <div class="container">
        <div class="row">    
            <div class="col-lg-6 ">
                <form method="GET" action="{{route('dashboard',$id)}}">
                    @csrf
                    <button class="btn btn-outline-dark" id="tb" >Tableau de borde</button>
                </form>
            </div>
            <div class="col-lg-6">
                <form methode="GET" action="{{route('deliberer')}}">
                    <button class="btn btn-outline-dark" id="choix" >Choix etudiant</button>
                </form>   
            </div>
        </div>   
    </div>
</body>
</html>