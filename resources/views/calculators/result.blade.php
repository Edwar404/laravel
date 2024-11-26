@extends('calculators.index')
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h1>Calculate {{ $operator }}</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('result') }}" method="post">
                @csrf
                <input type="hidden" name="operator" value="{{ $operator }}">
                <div class="form-group mb-3">
                    <label for="" class="form-label">First Number</label>
                    <input type="text" name="number1" class="form-control" placeholder="Input first number"
                        value="{{ old('number1') }}">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="form-label">Second Number</label>
                    <input type="text" name="number2" class="form-control" placeholder="Input second number"
                        value="{{ old('number2') }}">
                </div>
                <button class="btn btn-primary mb-1">Count</button>
            </form>
        </div>
        <div class="card-footer">
            <h3 class="">Result: {{ $result }} </h3>
        </div>
    </div>
@endsection
