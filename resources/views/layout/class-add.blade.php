@extends('layout.template')

@section('style')
    <style>
        .time-container {
            margin: 10px 0;
        }

        .time-container input {
            border-radius: 15px;
            padding: 5px;
        }

        .time-container label {
            min-width: 150px;
            text-align: left;
        }

        .schedule {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        textarea {
            border-radius: 10px;
            padding: 5px;
        }

        button {
            margin: 10px 0;
            width: 300px;
            padding: 5px 0;
            border-radius: 10px;
            outline: none;
            border: none;
            background-color: rgb(81, 104, 231);
            color: white;
        }

        button:hover {
            background-color: rgb(55, 77, 201);
        }
    </style>
@endsection

@section('body')
    <div class="container-fluid p-5" style="width:100%;">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">EDIT JADWAL</h5>
        </div>
        @if (session('message'))
            <div class="alert alert-success">
                <b>Success!</b> {{ session('message') }}
            </div>
        @endif
        <div class="mb-5 text-center schedule">
            <form action="{{ route('class-store') }}" method="POST">
                @csrf
                <div class="time-container">
                    <label for="timestart">Waktu Mulai</label>
                    <input id="timestart" type="time" name="timestart" value="13:30" />
                </div>
                <div class="time-container">
                    <label for="timeend">Waktu Berakhir</label>
                    <input id="timeend" type="time" name="timeend" value="13:30" />
                </div>
                <div class="time-container" style="margin: 10px 0;">
                    <label for="timeday">Hari</label>
                    <select name="timeday" id="timeday" style="width: 120px; padding: 10px; border-radius: 15px;">
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                </div>
                <div class=""
                    style="height: 100%;display:flex;flex-direction:column;width:100%; justify-content:center;align-items:center;">
                    <label for="timedesc">Deskripsi</label>
                    <textarea style="width: 300px;" required id="timedesc" name="timedesc"></textarea>
                </div>
                <button type="submit">Tambah</button>
            </form>
        </div>
    </div>
@endsection
