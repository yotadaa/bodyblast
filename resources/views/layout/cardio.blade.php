@extends('layout.template')

@section('body')
    @include('layout.function')
    <script>
        callMenu("cardio")
    </script>
    <div class="container-fluid p-5">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="img/cardio1.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h1 class="display-3 text-uppercase mb-0">Weight Loss & Cardio</h1>
                </div>
                <h4 class="text-body mb-4">Pengertian Weight Loss & Cardio</h4>
                <p class="mb-4">Weightloss atau Penurunan berat badan dan latihan kardio adalah dua konsep yang sering
                    kali saling terkait dalam dunia kebugaran
                    dan kesehatan. Keduanya memainkan peran penting dalam mencapai dan mempertahankan berat badan yang sehat
                    serta meningkatkan
                    kondisi fisik secara keseluruhan.
                </p>
                <h4 class="text-body mb-4">Weightloss</h4>
                <p class="mb-4">Penurunan berat badan terjadi ketika seseorang mengonsumsi lebih sedikit kalori daripada
                    yang dibakar oleh tubuh. Proses
                    ini melibatkan dua komponen utama:
                <ul>
                    <li>Pengaturan Pola Makan</li>
                    <p>Asupan kalori yang seimbang dan sehat adalah kunci utama dalam penurunan berat badan. Mengonsumsi
                        makanan yang kaya akan nutrisi
                        seperti buah-buahan, sayuran, protein tanpa lemak, dan biji-bijian utuh dapat membantu memenuhi
                        kebutuhan nutrisi tubuh tanpa
                        menambah kalori berlebihan. Mengurangi konsumsi gula, lemak jenuh, dan makanan olahan juga penting
                        untuk menghindari kalori
                        yang tidak diperlukan. Pola makan yang seimbang membantu tubuh mendapatkan energi yang cukup
                        sekaligus mendukung fungsi metabolisme
                        yang optimal. </p>
                    <li>Aktivitas Fisik</li>
                    <p>Aktivitas fisik membantu membakar kalori dan meningkatkan metabolisme. Latihan yang teratur tidak
                        hanya membantu dalam penurunan
                        berat badan tetapi juga memperkuat otot, meningkatkan kesehatan jantung, dan memperbaiki kesehatan
                        mental. Kombinasi latihan kardio
                        dan latihan kekuatan adalah yang paling efektif untuk mencapai hasil yang optimal.</p>
                </ul>
                </p>
                <h4 class="text-body mb-4">Cardio</h4>
                <p class="mb-4">Latihan kardio, atau latihan kardiovaskular, adalah jenis latihan yang meningkatkan denyut
                    jantung dan pernapasan dalam jangka waktu
                    yang panjang. Latihan ini sangat efektif dalam membakar kalori dan meningkatkan kebugaran
                    kardiovaskular.
                <p>
                    Jenis-jenis Latihan Kardio:
                <ol>
                    <li><b>Lari/Jogging:</b> Salah satu bentuk latihan kardio yang paling populer. Membantu membakar kalori
                        dengan cepat dan meningkatkan kekuatan otot kaki.</li>
                    <li><b>Bersepeda:</b> Baik bersepeda di luar ruangan maupun menggunakan sepeda statis, latihan ini
                        efektif untuk melatih otot-otot kaki dan meningkatkan kesehatan jantung.</li>
                    <li><b>Aerobik:</b> Latihan ini melibatkan serangkaian gerakan berirama yang dilakukan dalam waktu
                        tertentu, membantu meningkatkan detak jantung dan membakar kalori.</li>
                    <li><b>HIIT (High-Intensity Interval Training):</b> Latihan ini melibatkan periode intensitas tinggi
                        yang diikuti oleh periode pemulihan singkat. HIIT sangat efektif untuk membakar kalori dalam waktu
                        singkat.</li>
                    <li><b>Renang:</b> Renang melibatkan hampir semua otot tubuh dan merupakan latihan kardio yang sangat
                        baik untuk meningkatkan kebugaran kardiovaskular dan membakar kalori.</li>
                </ol>
                Manfaat Latihan Kardio:
                <ol>
                    <li><b>Penurunan Berat Badan:</b> Latihan kardio membantu membakar kalori dan lemak tubuh, yang esensial
                        dalam proses penurunan berat badan.</li>
                    <li><b>Kesehatan Jantung:</b> Latihan ini melibatkan serangkaian gerakan berirama yang dilakukan dalam
                        waktu tertentu, membantu meningkatkan detak jantung dan membakar kalori.</li>
                    <li><b>Pengurangan Stres:</b> Aktivitas fisik membantu melepaskan endorfin, hormon yang membantu
                        mengurangi stres dan meningkatkan mood.</li>
                    <li><b>Peningkatan Energi:</b> Latihan kardio secara teratur dapat meningkatkan tingkat energi harian
                        dan mengurangi kelelahan.</li>
                    <li><b>Kesehatan Metabolik:</b> Meningkatkan sensitivitas insulin dan mengurangi risiko penyakit
                        metabolik seperti diabetes tipe 2.</li>
                </ol>
                </p>
                </p>
                <h4 class="text-body mb-4">Kombinasi Weightloss & Cardio untuk hasil yang lebih optimal</h4>
                <p class="mb-4">Untuk mencapai hasil penurunan berat badan yang optimal, kombinasi antara pengaturan pola
                    makan yang sehat dan
                    latihan kardio yang teratur sangat penting. Selain itu, menambahkan latihan kekuatan dapat membantu
                    mempertahankan massa otot,
                    yang penting untuk meningkatkan metabolisme dan membakar lebih banyak kalori bahkan saat istirahat.
                </p>
            </div>
        </div>
    </div>
@endsection
