@extends('layout.template')

@php
    $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
@endphp

@section('body')
    @include('layout.function')
    <script>
        // callMenu("class");
    </script>
    <div id="container-all" class="container-fluid p-5">
        <div class="mb-5 text-center">
            @if (session('message'))
                <div class="alert alert-success">
                    <b>Success!</b> {{ session('message') }}
                </div>
            @endif
            <h5 class="text-primary text-uppercase">Jadwal Kelas</h5>
            <h1 class="display-3 text-uppercase mb-0">Jam Kerja</h1>
            @if (auth()->check() && auth()->user()->role == 0)
                <a href="{{ route('class-add') }}" class="rounded-pill text-white p-6"
                    style="background-color: rgb(94, 91, 253); border: none; outline:none; padding: 5px 15px">Edit
                    Jadwal</a>
            @endif
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase rounded-pill mb-5">
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white active" data-bs-toggle="pill" href="#tab-1">Senin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-2">Selasa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-3">Rabu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-4">Kamis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-5">Jum'at</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-6">Sabtu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-7">Minggu</a>
                </li>
            </ul>
            <div class="tab-content">

                @for ($i = 0; $i < 7; $i++)
                    <div id="tab-{{ $i + 1 }}"
                        @if ($i == 0) class="tab-pane fade p-6 show active"
                        @else class="tab-pane fade p-6" @endif>
                        <div class="row g-5 p-6 justify-content-center">
                            @foreach ($schedules as $schedule)
                                @if ($schedule->hari == $hari[$i])
                                    <div class="col-lg-3 col-md-4 col-sm-6 ">
                                        <div class="bg-dark rounded text-center py-5 px-3">
                                            <h6 class="text-uppercase text-light mb-3">{{ $schedule->start }} -
                                                {{ $schedule->end }}</h6>
                                            <h5 class="text-uppercase text-primary">{{ $schedule->description }}</h5>
                                            @if (auth()->check() && auth()->user()->role == 0)
                                                <a href="{{ route('class-delete', ['id' => $schedule->id]) }}"
                                                    class="rounded-pill text-white p-6"
                                                    style="background-color: rgb(94, 91, 253); border: none; outline:none; padding: 5px 15px">Hapus</a>
                                                <a href="{{ route('class-edit', ['id' => $schedule->id]) }}"
                                                    class="rounded-pill text-white p-6"
                                                    style="background-color: rgb(94, 91, 253); border: none; outline:none; padding: 5px 15px">Edit</a>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //     const tabs = document.querySelectorAll('.nav-link');
        //     tabs.forEach(function(tab, index) {
        //         tab.addEventListener("click", function(e) {
        //             for (i = 0; i < 7; i++) {
        //                 const t = document.querySelector("#tab-" + (index - 6));
        //                 if (i !== index - 6) {
        //                     t.classList.remove("show");
        //                     t.classList.remove("active");
        //                     t.classList.remove("fade");
        //                 } else {
        //                     t.classList.add("show");
        //                     t.classList.add("active");
        //                     t.classList.add("fade");

        //                 }
        //             }
        //         });
        //     });
        // });
    </script>
@endpush
