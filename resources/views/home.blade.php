@extends('layout.navhome')
@section('content')
    <div class="layer1home">

    </div>
    <div class="cont" style="margin-left: 10%">
        <h4 style="color: #C31814;font-weight:600">Terlaris Untuk Mu</h4>
        <div class="row" style="width: 90%; margin-top: 20px">
            @foreach ($tbbarang as $tbbarangs)
            <div class="col-md-3">        
                <div class="card" style="width: 13rem;">
                    <img width="180px" class="card-img-top" height="160px" src="{{ asset('storage/'.$tbbarangs->img_barang) }}" alt="">
                    <div class="card-body">
                      <h5 class="card-title">{{ $tbbarangs->namabarang }}</h5>
                      <p class="card-text">{{ $tbbarangs->stock }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection