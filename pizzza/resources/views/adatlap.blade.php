@extends('layout')
@section('title',$result->nev)
@section('content')
    <div class="container py-3">
        <h1 class="text-center display-5">{{$result->nev}}</h1>
        <p>{{$result->feltet}}</p>
        @if ($result->akcios == 1)
            <p>ez a pizza most akciós</p>
            <ul>
                <li>24 cm <s>{{$result->ar}}</s> helyett <span class="text-danger">{{$result->ar*0.9}}</span></li>
                <li>22 cm <s>{{$result->ar*1.25}}</s> helyett <span class="text-danger">{{$result->ar*0.9*1.25}}</span></li>
                <li>45 cm <s>{{$result->ar*1.50}}</s>  helyett <span class="text-danger">{{$result->ar*0.9*1.5}}</span></li>
            </ul>
        @else
            <p>ez a pizza nem akciós</p>
            <ul>
                <li>24 cm {{$result->ar}}</li>
                <li>22 cm {{$result->ar*1.25}}</li>
                <li>45 cm {{$result->ar*1.50}}</li>
            </ul>

        @endif
    </div>
@endsection
