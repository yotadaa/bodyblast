@extends('layout.template')

@section('body')
    @include('layout.function')
    <script>
        callMenu("beladiri")
    </script>
    <div class="container-fluid p-5">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="img/beladiri1.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h1 class="display-3 text-uppercase mb-0">Bela Diri</h1>
                </div>
                <h4 class="text-body mb-4">Pengertian Bela Diri</h4>
                <p class="mb-4">Seni bela diri adalah praktik dan tradisi fisik yang digunakan untuk tujuan pertahanan
                    diri,
                    kompetisi, kesehatan fisik, dan pengembangan mental. Setiap jenis seni bela diri memiliki teknik,
                    filosofi,
                    dan sejarah yang unik. Beberapa yang kami tawarkan pada kelas privat ini adalah:
                </p>
                <h4 class="text-body mb-4">1. Karate</h4>
                <p class="mb-4">Karate adalah seni bela diri yang berasal dari Okinawa, Jepang. Kata "karate" berarti
                    "tangan kosong",
                    yang mencerminkan fokus pada teknik tanpa senjata. Karate menggabungkan berbagai teknik pukulan,
                    tendangan, dan blok,
                    serta gerakan tubuh yang dinamis. Filosofi karate menekankan disiplin diri, rasa hormat, dan perbaikan
                    terus-menerus.
                    Beberapa aliran karate yang terkenal adalah Shotokan, Goju-ryu, Shito-ryu, dan Wado-ryu.
                </p>
                <h4 class="text-body mb-4">2. Wushu</h4>
                <p class="mb-4">Wushu adalah seni bela diri tradisional Tiongkok yang mencakup berbagai gaya dan bentuk.
                    Wushu sering kali
                    disamakan dengan kungfu, namun wushu mencakup berbagai teknik dan bentuk seni bela diri. Ada dua
                    kategori utama dalam wushu:
                    taolu (rutinitas) dan sanda (pertarungan bebas). Taolu melibatkan serangkaian gerakan yang dilakukan
                    dengan presisi, kecepatan,
                    dan kekuatan, sementara sanda adalah bentuk pertarungan bebas yang menggabungkan teknik pukulan,
                    tendangan, dan bantingan.
                    Wushu menekankan keseimbangan, koordinasi, fleksibilitas, dan kekuatan. Selain aspek fisik, wushu juga
                    memiliki elemen filosofis
                    dan budaya yang mendalam, mencerminkan nilai-nilai tradisional Tiongkok seperti harmoni, ketekunan, dan
                    keberanian.
                </p>
                <h4 class="text-body mb-4">3. Muay Thai</h4>
                <p class="mb-4">Muaythai, atau tinju Thailand, adalah seni bela diri yang sangat terkenal di Thailand dan
                    telah mendapatkan popularitas
                    global. Dikenal sebagai "seni delapan anggota badan", muaythai menggunakan pukulan, tendangan, siku, dan
                    lutut. Teknik-teknik ini
                    didukung oleh gerakan tubuh yang kuat dan berirama. Muaythai sering digunakan dalam pertarungan
                    kompetitif dan terkenal dengan
                    latihan yang sangat intens dan ketahanan fisik. Filosofi muaythai mencakup kekuatan fisik, mental, dan
                    spiritual, dengan fokus pada
                    ketekunan, keberanian, dan rasa hormat.
                </p>
                <h4 class="text-body mb-4">4. Kick Boxing</h4>
                <p class="mb-4">Kick boxing adalah olahraga bela diri yang menggabungkan elemen tinju dan tendangan dari
                    berbagai seni bela diri,
                    termasuk karate dan muaythai. Meskipun memiliki akar dalam teknik bela diri tradisional, kick boxing
                    lebih berorientasi pada
                    kompetisi modern. Kick boxing fokus pada kebugaran fisik dan kemampuan bertarung dalam ring, dengan
                    aturan yang lebih longgar
                    dibandingkan seni bela diri tradisional. Teknik utama dalam kick boxing meliputi pukulan, tendangan, dan
                    kombinasi keduanya.
                    Olahraga ini populer baik sebagai latihan kebugaran maupun kompetisi.
                </p>
            </div>
        </div>
    </div>
@endsection
