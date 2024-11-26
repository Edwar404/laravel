@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">Edit Pengguna</h3>
        <div class="card-body">

            <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Nama</label>
                    <input value="{{ $user->name }}" type="text" class="form-control" placeholder="Nama" name="name">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input value="{{ $user->email }}" type="text" class="form-control" placeholder="Email"
                        name="email">
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="text" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
