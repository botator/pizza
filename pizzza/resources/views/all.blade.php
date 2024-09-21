    @extends('layout')
    @section('title','összes pizzank')
    @section('content')
    <div class="container py-3">
        <h1 class="text-center display-5">Összes pizzak</h1>
        <table class="table table-striped">
            <tr>
                <th>nev</th>
                <th>feltetek</th>
                <th>24 cm</th>
                <th>32 cm</th>
                <th>45 cm</th>
                <th></th>
            </tr>
            @foreach ($result as $row)
            <tr>
                <td>{{$row->nev}}</td>
                <td>{{$row->feltet}}</td>
                <td>@if ($row->akcios == 1)
                    <span class="text-danger">{{$row->ar*0.9}} Ft</span>
                @else
                    {{$row->ar}} Ft
                @endif</td>
                <td>@if ($row->akcios == 1)
                    <span class="text-danger">{{$row->ar*0.9*1.25}} Ft</span>
                @else
                    {{$row->ar*1.25}} Ft
                @endif</td>
                <td>@if ($row->akcios == 1)
                    <span class="text-danger">{{$row->ar*0.9*1.5}} Ft</span>
                @else
                    {{$row->ar*1.5}} Ft
                @endif</td>

            </tr>
            @endforeach
        </table>

    </div>
    @endsection
