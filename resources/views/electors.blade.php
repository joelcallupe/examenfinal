<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    



<table border="4" >
       <tr>

           <td>nombre_elector</td>
           <td>dni</td>
           <td>location_cabina</td>
           <td>nombre_candidato</td>
           <td>partido</td>
           <td>cantidad_votos</td>

       </tr>
       @foreach($electors as $elector)

       <tr>

           <td>{{$elector->nombre}}</td>
           <td>{{$elector->dni}}</td>
           <td>{{$elector->cabina->location}}</td>
           <td>{{$elector->candidato->nombre}}</td>
           <td>{{$elector->candidato->partido}}</td>
           <td>{{$elector->voto->cantidadVoto}}</td>

       </tr>
       @endforeach
    </table>



</body>
</html>