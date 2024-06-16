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
            <form action="{{ route('team-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <label for="file">Foto</label>
                    <input id="file" type="file" name="file" accept="png, jpg, jpeg, webp" required />
                </div>
                <div class="time-container">
                    <label for="name">Nama</label>
                    <input id="name" type="text" name="name" required />
                </div>
                <div class="time-container">
                    <label for="role">Role</label>
                    <input id="role" type="text" name="role" required />
                </div>
                <div class="time-container">
                    <label for="nomor">no_hp</label>
                    <input id="nomor" type="text" name="nomor" required />
                </div>
                <div class="time-container">gunakan format +628123...</div>
                <button type="submit">Tambah</button>
            </form>
        </div>
    </div>
@endsection
