@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">

            <form action="{{ route('service.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Nama Paket</label>
                    <input type="text" class="form-control" placeholder="Nama Paket" name="service_name">
                </div>
                <div class="mb-3">
                    <label for="">Harga</label>
                    <input type="number" class="form-control" placeholder="Harga" name="price">
                </div>
                <div class="mb-3">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" placeholder="Deskripsi" name="description">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
