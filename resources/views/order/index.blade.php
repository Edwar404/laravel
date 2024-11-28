@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <div class="mb-3" align="right">
                <a href="{{ route('trans_order.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Pelanggan</th>
                        <th>NO Transaksi</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $key => $val)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $val->customer->customer_name }}</td>
                            <td>{{ $val->order_code }}</td>
                            <td>{{ $val->order_date }}</td>
                            <td>{{ $val->order_end_date }}</td>
                            <td>{{ $val->order_status }}</td>
                            <td>
                                <a href="{{ route('trans_order.edit', $val->id) }}" class="btn btn-icon btn-secondary">
                                    <i class="tf-icons bx bx-show"></i>
                                </a>
                                <form method="post" action="{{ route('trans_order.destroy', $val->id) }}" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-icon btn-danger"><i class="tf-icons bx bx-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
