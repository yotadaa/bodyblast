@extends('layout.template')

@section('body')
    @include('layout.function')
    <script>
        callMenu("about")
    </script>
    <div class="container-fluid p-5">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="img/p2.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h5 class="text-primary text-uppercase">BodyBlast</h5>
                    <h1 class="display-3 text-uppercase mb-0">Welcome to BodyBlast: Privatebymell</h1>
                </div>
                <h4 class="text-body mb-4">Energi tak terbatas, Prestasi tak terkendali</h4>
                <p class="mb-4">Selamat datang di BodyBlast: Destinasi Utama untuk Meningkatkan Kesehatan dan Kekuatan
                    Tubuhmu! Di sini, kami menginspirasi dan membimbingmu untuk mencapai potensi penuh dalam olahraga
                    dan kesehatan. Temukan rahasia untuk mengubah tubuhmu menjadi mesin energi yang tak terhentikan
                    melalui program latihan terkini, tips nutrisi yang disesuaikan, dan motivasi tak terbatas.
                    Bergabunglah dengan komunitas BodyBlast hari ini dan ledakkan energimu menuju gaya hidup yang lebih
                    sehat, lebih kuat, dan lebih bahagia!</p>
                <div class="rounded bg-dark p-5">
                    <ul class="nav nav-pills justify-content-between mb-3">
                        <li class="nav-item w-100">
                            <a class="nav-link text-uppercase text-center w-100 active" data-bs-toggle="pill"
                                href="#pills-1">About Us</a>
                        </li>
                        <!-- <li class="nav-item w-50">
                                        <a class="nav-link text-uppercase text-center w-100" data-bs-toggle="pill"
                                            href="#pills-2">Why Choose Us</a>
                                    </li> -->
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-1">
                            <p class="text-secondary mb-0">Pelatihan yang disertai dengan permainan olahraga akan
                                membuat sesi latihanmu menjadi menyenangkan.
                                <br>
                                Alasan mengapa harus memilih kami sebagai Privat olaharga-mu:
                                </br>
                                Pernah menjuarai:
                            <ul>
                                <li>Emas PON Papua</li>
                                <li>Perak SEA GAMES Vietnam</li>
                                <li>Perunggu PON Jabar</li>
                                <li>DAN III Karate</li>
                            </ul>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
