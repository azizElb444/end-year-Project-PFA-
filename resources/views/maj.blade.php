<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        body {
                background-image: url('{{ asset("images/background.jpg") }}');
                background-repeat: no-repeat;
                background-size: cover;
                }
    </style>
</head>
<body>
    <div style="margin-top:50px;">
        <table class="shadow-lg table table-hover">
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Decision</th>
                    <th>Action</th>
                </tr>
                @foreach ($etudiants as $etudiant)
                    <tr>
                        <td>{{$etudiant->nom}}</td>
                        <td>{{$etudiant->prenom}}</td>
                        <td>{{$etudiant->decision}}</td>
                        <td><form action="{{route('EDIT',$etudiant->id)}}" methode="POST">
                                @csrf
                                <button class="btn btn-outline-warning">EDIT</button>
                            </form>
                        </td>
                    </tr>
                    
                @endforeach

        </table>
    </div>
    <div>
         <a class="btn btn-outline-dark btn-block" href="{{route('home')}}" role="button" style="margin-top:150px;">Home</a>
    </div>
    
</body>
</html>