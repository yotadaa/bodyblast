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
        callMenu("testimonial")
    </script>
    <div class="container-fluid p-0 my-5">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/main3.jpg" style="object-fit: cover;">
                </div>
            </div>

            <div class="col-lg-6 bg-dark p-5">
                <div class="mb-5">
                    <h5 class="text-primary text-uppercase">Testimonial</h5>
                    @if (auth()->check() && auth()->user()->role == 0)
                        <a href="{{ route('testimonial-add') }}" class="rounded-pill text-white p-6"
                            style="background-color: rgb(94, 91, 253); border: none; outline:none; padding: 5px 15px">Tambah
                            Testi</a>
                    @endif
                    <h1 class="display-3 text-uppercase text-light mb-0">Our Client Say</h1>
                </div>
                @if (session('message'))
                    <div class="alert alert-success">
                        <b>Success!</b> {{ session('message') }}
                    </div>
                @endif
                <div class="owl-carousel testimonial-carousel" id="for-testi">
                    @foreach ($testimonials as $testi)
                        <div class="testimonial-item">
                            <a href="{{ route('testimonial-delete', ['id' => $testi->id]) }}"
                                class="rounded-pill text-white p-6"
                                style="background-color: rgb(219, 38, 38); border: none; outline:none; padding: 5px 15px">Hapus
                                Testi</a>
                            <p class="fs-4 fw-normal text-light mb-4">
                                <i class="fas fa-quote-left text-primary me-3"></i>
                                {{ $testi->message }}
                            </p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid img rounded-circle" src="{{ $testi->foto }}"
                                    alt="{{ $testi->foto }}">
                                <div class="ps-4">
                                    <h5 class="text-uppercase text-light">{{ $testi->name }}</h5>
                                    <span class="text-uppercase text-secondary">{{ $testi->role }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
