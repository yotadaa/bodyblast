@extends('layout.template')

@section('body')
    @include('layout.function')
    <script>
        callMenu("muscle")
    </script>
    <div class="container-fluid p-5">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="{{ asset('img/muscle1.jpg') }}"
                        style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h1 class="display-3 text-uppercase mb-0">Build Muscle</h1>
                </div>
                <h4 class="text-body mb-4">Pengertian Build Muscle</h4>
                <p class="mb-4">Pembentukan massa otot, atau hipertrofi otot, adalah proses di mana serat otot mengalami
                    peningkatan ukuran sebagai respons terhadap
                    latihan fisik, terutama latihan beban. Proses ini tidak hanya penting bagi atlet dan binaragawan, tetapi
                    juga bagi individu yang ingin meningkatkan
                    kekuatan fisik, meningkatkan komposisi tubuh, dan meningkatkan kesehatan secara keseluruhan.
                </p>
                <h4 class="text-body mb-4">Dasar-dasar Pembentukan Massa Otot</h4>
                <p class="mb-4">Pembentukan massa otot melibatkan beberapa mekanisme biologis dan fisiologis, termasuk
                    kerusakan serat otot, respons inflamasi, dan sintesis protein. Proses ini bisa diringkas dalam beberapa
                    tahap utama:
                <ul>
                    <li><b>Stimulasi Otot:</b> Latihan beban atau resistensi menciptakan tegangan pada serat otot yang
                        menyebabkan kerusakan mikro pada jaringan otot.</li>
                    <li><b>Respons Inflamasi:</b> Kerusakan ini memicu respons inflamasi di mana tubuh mengirimkan nutrisi
                        dan faktor pertumbuhan ke area yang terluka untuk memulai proses perbaikan.</li>
                    <li><b>Sintesis Protein:</b> Selama fase pemulihan, tubuh meningkatkan sintesis protein untuk
                        memperbaiki dan memperbesar serat otot yang rusak. Proses ini membutuhkan asupan protein yang cukup
                        dari diet.</li>
                    <li><b>Adaptasi dan Pertumbuhan:</b> Dengan latihan yang konsisten, otot beradaptasi dan menjadi lebih
                        besar dan lebih kuat sebagai respons terhadap stres yang berulang.</li>
                </ul>
                </p>
                <h4 class="text-body mb-4">Komponen Utama Pembentukan Massa Otot</h4>
                <p class="mb-4">
                <ol>
                    <b>
                        <li>Latihan Beban</li>
                    </b>
                    <p>Latihan beban atau resistensi adalah komponen utama dalam pembentukan massa otot. Berbagai jenis
                        latihan beban termasuk angkat beban bebas (seperti dumbbell dan barbell), mesin beban, dan latihan
                        berat badan (seperti push-up dan pull-up).</p>
                    <ul>
                        <li><b>Volume dan Intensitas:</b> Volume (jumlah set dan repetisi) dan intensitas (beban yang
                            diangkat) adalah dua faktor kunci yang mempengaruhi pertumbuhan otot. Umumnya, latihan dengan
                            repetisi menengah (6-12 repetisi per set) dan beban yang cukup berat untuk mencapai kelelahan
                            otot dianggap paling efektif untuk hipertrofi.</li>
                        <li><b>Progressive Overload:</b> Untuk terus merangsang pertumbuhan otot, beban atau intensitas
                            latihan harus ditingkatkan secara bertahap. Ini bisa dicapai dengan menambah berat, meningkatkan
                            jumlah set atau repetisi, atau mengurangi waktu istirahat antar set.</li>
                    </ul>
                    <b>
                        <li>Nutrisi</li>
                    </b>
                    <p>Nutrisi yang tepat adalah esensial untuk mendukung proses sintesis protein dan pemulihan otot.</p>
                    <ul>
                        <li><b>Protein:</b> Protein adalah nutrisi paling penting untuk pertumbuhan otot. Asam amino dalam
                            protein digunakan sebagai blok bangunan untuk memperbaiki dan membangun serat otot. Sumber
                            protein yang baik termasuk daging tanpa lemak, ikan, telur, produk susu, kacang-kacangan, dan
                            protein nabati.</li>
                        <li><b>Kalori:</b> Untuk membangun massa otot, tubuh membutuhkan surplus kalori, yang berarti
                            mengonsumsi lebih banyak kalori daripada yang dibakar. Kalori ekstra ini memberikan energi untuk
                            latihan dan mendukung proses pemulihan dan pertumbuhan.</li>
                        <li><b>Karbohidrat dan Lemak:</b> Karbohidrat menyediakan energi yang diperlukan untuk latihan yang
                            intens dan membantu mengisi kembali glikogen otot. Lemak sehat juga penting untuk fungsi hormon
                            dan kesehatan umum.</li>
                    </ul>
                    <b>
                        <li>Istirahat dan Pemulihan</li>
                    </b>
                    <p>Pemulihan yang cukup sangat penting untuk pertumbuhan otot. Selama tidur dan periode istirahat, tubuh
                        memperbaiki dan membangun kembali serat otot yang rusak.</p>
                    <ul>
                        <li><b>Tidur:</b> Tidur yang cukup (7-9 jam per malam) penting untuk pemulihan otot dan produksi
                            hormon yang mendukung pertumbuhan otot seperti hormon pertumbuhan dan testosteron.</li>
                        <li><b>Hari Istirahat:</b> Memberikan waktu bagi otot untuk pulih dengan memiliki hari-hari tanpa
                            latihan atau berfokus pada kelompok otot yang berbeda setiap sesi latihan.</li>
                    </ul>
                    </p>
                </ol>
                </p>
                <h4 class="text-body mb-4">Faktor-faktor Pendukung Lainnya</h4>
                <p class="mb-4">
                <ol>
                    <li><b>Genetika:</b> Genetika memainkan peran dalam kemampuan seseorang untuk membangun massa otot.
                        Faktor genetik dapat mempengaruhi distribusi serat otot, hormon, dan respons terhadap latihan.</li>
                    <li><b>Hormon:</b> Hormon seperti testosteron, hormon pertumbuhan, dan insulin memainkan peran penting
                        dalam pertumbuhan otot. Beberapa orang mungkin memiliki keuntungan hormonal yang mendukung
                        pembentukan massa otot yang lebih cepat.</li>
                    <li><b>Konsistensi dan Dedikasi:</b> Mencapai dan mempertahankan massa otot memerlukan dedikasi yang
                        konsisten terhadap latihan, nutrisi, dan pemulihan.</li>
                </ol>
                </p>
            </div>
        </div>
    </div>
@endsection
