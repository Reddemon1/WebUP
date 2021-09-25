@extends('layout.navhome')
@section('content')
    <div class="layer1home">

    </div>
    <div class="cont" style="margin-left: 10%">
        <h4 style="color: #C31814;font-weight:600">Terlaris Untuk Mu</h4>
        <div class="row" style="width: 90%; margin-top: 20px">
            @foreach ($tbbarang as $tbbarangs)
            <div class="col-md-3" style="margin-bottom: 20px">        
                <div class="card" style="width: 13rem;height:16rem;box-shadow:2px 2px 8px 2px rgba(0, 0, 0, 0.2)">
                    <img width="180px" class="card-img-top" height="160px" src="{{ asset('storage/'.$tbbarangs->img_barang) }}" alt="">
                    <div class="card-body">
                      <h5 class="card-title" style="text-align: center">{{ $tbbarangs->namabarang }}</h5>
                      <footer style="text-align: center"><p class="card-text">Rp {{ number_format($tbbarangs->harga,0) }}</p></footer>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div>
            <h1>P</h1>
        </div>
    </div>
@endsection