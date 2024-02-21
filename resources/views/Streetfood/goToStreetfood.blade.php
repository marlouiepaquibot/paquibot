@extends('layouts.main')
@section('content')


<h1>STREET FOOD</h1>
@foreach($streetfood as $streetfood)

</br>
</br>
<div align="center">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $streetfood->title }}</h4>
                    <h1 class="card-description">#. {{ $streetfood->id }}</h1>
                    <ul class="list-ticked">
                        <li>  <img src="streetfoodimage/{{ $streetfood->image }}" alt="image" width=300></li>
                        <li><b>Description:</b> {{$streetfood->description}}</li>
                        <li><b>Date:</b> {{$streetfood->date}}</li>
                        <li><b>ingredients:</b> {{$streetfood->ingredients}}</li>
                        <li><b>procedure:</b> {{$streetfood->procedure}}</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection