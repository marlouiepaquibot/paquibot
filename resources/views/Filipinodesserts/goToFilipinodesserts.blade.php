@extends('layouts.main')
@section('content')


<h1>FILIPINO DESSERTS</h1>
@foreach($filipinodesserts as $filipinodesserts)

</br>
</br>
<div align="center">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $filipinodesserts->title }}</h4>
                    <h1 class="card-description">#. {{ $filipinodesserts->id }}</h1>
                    <ul class="list-ticked">
                        <li>  <img src="filipinodessertsimage/{{ $filipinodesserts->image }}" alt="image" width=400></li>
                        <li><b>Description:</b> {{$filipinodesserts->description}}</li>
                        <li><b>Date:</b> {{$filipinodesserts->date}}</li>
                        <li><b>ingredients:</b> {{$filipinodesserts->ingredients}}</li>
                        <li><b>procedure:</b> {{$filipinodesserts->procedure }}</li> 
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection