@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">

            <form action="{{ route('customer.update', $customer->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Nama Pelanggan</label>
                    <input value="{{ $customer->customer_name }}" type="text" class="form-control" placeholder="Nama"
                        name="customer_name">
                </div>
                <div class="mb-3">
                    <label for="">Telepon</label>
                    <input value="{{ $customer->phone }}" type="number" class="form-control" placeholder="Telepon"
                        name="phone">
                </div>
                <div class="mb-3">
                    <label for="">Alamat</label>
                    <input type="text" value="{{ $customer->address }}" class="form-control" placeholder="Alamat"
                        name="address">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
