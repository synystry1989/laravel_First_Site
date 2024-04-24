@extends('site.layout')

@section('title', 'Galeria')

@section('content')

    <div class="row">
        <br>
        <h1>Galeria de imagens</h1>

        </div>
        <div class="d-flex align-items-center justify-content-center">
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/lib1.jpg') }}" class="d-block w-100"  alt="A carregar">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/lib2.jpg') }}" class="d-block w-100" alt="A carregar">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/lib3.jpg') }}" class="d-block w-100"  alt="A carregar">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </div>

@endsection
