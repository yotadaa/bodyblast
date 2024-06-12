@extends('layout.template')

@section('body')
    <!-- Header End -->
    @include('layout.function')
    <script>
        callMenu("index");
    </script>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/main2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Best Coach Ever</h5>
                            <h1 class="display-2 text-white text-uppercase mb-md-4">Grow Your Strength!!!</h1>
                            <a href="https://forms.gle/6kKdcxUDpX5tZzMSA" class="btn btn-primary py-md-3 px-md-5 me-3">Join
                                Us</a>
                            <a href="/contact" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/team.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Best Coach Ever</h5>
                            <h1 class="display-2 text-white text-uppercase mb-md-4">Grow Your Strength!!!</h1>
                            <a href="https://forms.gle/6kKdcxUDpX5tZzMSA" class="btn btn-primary py-md-3 px-md-5 me-3">Join
                                Us</a>
                            <a href="/contact" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class="flaticon-six-pack display-1 text-primary"></i>
                    <h3 class="text-uppercase my-4">Bela Diri</h3>
                    <p>Bertujuan untuk mengajarkan teknik-teknik fisik, memperkuat karakter, kedisiplinan, dan kontrol
                        diri.</p>
                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class="flaticon-barbell display-1 text-primary"></i>
                    <h3 class="text-uppercase my-4">Weight Loss & Cardio</h3>
                    <p>Latihan cardio termasuk berlari, bersepeda, berenang, dan melompat tali.</p>
                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class="flaticon-bodybuilding display-1 text-primary"></i>
                    <h3 class="text-uppercase my-4">Build Muscle</h3>
                    <p>merangsang pertumbuhan otot melalui kerusakan mikroskopis pada serat otot yang kemudian
                        diperbaiki dan diperbesar melalui mekanisme pemulihan tubuh.</p>
                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-12 col-md-6 text-center">
                <h1 class="text-uppercase text-light mb-4">Paket 10x free 1x visit</h1>
                <a href="https://forms.gle/6kKdcxUDpX5tZzMSA" class="btn btn-primary py-3 px-5">Bergabung sebagai
                    member</a>
            </div>
        </div>
    </div>
@endsection
