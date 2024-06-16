@extends('layout.template')

@section('style')
    <style>
        .img {
            height: 400px;
            object-fit: cover;
        }
    </style>
@endsection

@section('body')
    @include('layout.function')
    <script>
        callMenu("team")
    </script>
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">The Team</h5>
            <h1 class="display-3 text-uppercase mb-0">Expert Trainers</h1>
            <a class="btn btn-primary py-3 " href="{{ route('team-add') }}">Tambah tim</a>
        </div>
        <div class="row g-5">
            @foreach ($teams as $team)
                <div class="col-lg-4 col-md-6">
                    <div class="team-item position-relative">
                        <div class="position-relative overflow-hidden rounded">
                            <img class="img w-100" src="{{ $team->foto }}" alt="">
                            <div class="team-overlay">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-light btn-square rounded-circle mx-1"
                                        href="https://wa.me/{{ $team->nomor }}"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4"
                            style="background: rgba(34, 36, 41, .9);">
                            <h5 class="text-uppercase text-light">{{ $team->nama }}</h5>
                            <p class="text-uppercase text-secondary m-0">{{ $team->role }}</p>
                            <p><a class="btn btn-danger p-3 "
                                    href="{{ route('team-delete', ['id' => $team->id]) }}">Hapus</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img w-100" src="img/lat2.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i
                                        class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4"
                        style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-light">Tiara dan Dhani</h5>
                        <p class="text-uppercase text-secondary m-0">Trainer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img w-100" src="img/lat3.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i
                                        class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4"
                        style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-light">Widia</h5>
                        <p class="text-uppercase text-secondary m-0">Trainer</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
