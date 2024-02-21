@extends('layouts.main')
@section('content')


<h1>LUTONG BAHAY</h1>
@foreach($lutongbahay as $lutongbahay)

</br>
</br>
<div align="center">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $lutongbahay->title }}</h4>
                    <h1 class="card-description">#. {{ $lutongbahay->id }}</h1>
                    <ul class="list-ticked">
                        <li>  <img src="lutongbahayimage/{{ $lutongbahay->image }}" alt="image" width=500></li>
                        <li><b>Description:</b> {{$lutongbahay->description}}</li>
                        <li><b>Date:</b> {{$lutongbahay->date}}</li>
                        <li><b>ingredients:</b> {{$lutongbahay->ingredients}}</li>
                        <li><b>procedure:</b> {{$lutongbahay->procedure}}</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection