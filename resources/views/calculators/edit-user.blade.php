@extends('calculators.index')
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h1>{{ $title ?? '' }}</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group mb-3">
                    <label for="" class="form-label">Nama</label>
                    <input value="{{ $user->name ?? '' }}" type="text" name="name" id="" class="form-control"
                        placeholder="Input Name">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="form-label">Email</label>
                    <input value="{{ $user->email ?? '' }}" type="email" name="email" id=""
                        class="form-control" placeholder="Input Email">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" id="" class="form-control" placeholder="Input Password">
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
