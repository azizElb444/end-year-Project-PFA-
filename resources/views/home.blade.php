@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 10px 10px 5px 12px lightblue;">
                <p style="font-size:30pt;margin-left:150px;" >Bonjour Mr {{$chef->prenom." ".$chef->nom}} </p><br>
                <p style="font-size:30pt;margin-left:250px;margin-top:50px;">Choissir une option</p>
                <a class="btn btn-outline-dark" href="{{route('MAJ')}}" role="button" style="margin-top:150px;">MAJ</a>
                <a class="btn btn-outline-dark" href="{{route('deliberer')}}" role="button" style="margin-top:50px;margin-bottom:50px;">Déliberer</a> 
            </div>
        </div>
    </div>
</div>
@endsection
