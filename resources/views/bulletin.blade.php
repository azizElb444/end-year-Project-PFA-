<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        td,th {
            text-align:centre;
        }
        #tb {
        width :400px;
        margin-left:600px;
        height:40px;
        font-size:15pt;
        border-radius:10px;
     }
    </style>
    <title>Bulletin</title>
</head>

<body>
    <h1 id="h1bull"><b>Relevée de note l'élève</b></h1>
    <div style="margin-top:50px">
        <table class="shadow-lg table table-hover" >
            <tr>
                <th>Modules</th>
                <th>Note</th>
                <th>Resultat</th>
            </tr>
            @foreach ($tableData as $data)
                <tr>
                    <td>{{$data['module']}}</td>
                    <td>{{$data['note']}}</td>
                    @if ($data['note'] >=5)
                    <td>Validé</td>
                    @else 
                    <td>Non Validé</td>
                    @endif
                </tr>
            @endforeach
                <tr>
                    <td>Moyen general</td>
                    <td>{{$moyen}}</td>
                    @if ($moyen >=5)
                    <td>Validé</td>
                    @else 
                    <td>Non validé</td>    
                    @endif
                </tr>    
        </table>
    </div>
    <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-8">
            <form method="GET" action="{{route('dashboard',$id)}}">
                @csrf
                <button class="btn btn-outline-dark btn-block" style="margin-top:80px;">Tableau de bord</button>
            </form>
        </div>
        <div class="col-lg-2">
        </div>
        
    </div>
</body>

</html>