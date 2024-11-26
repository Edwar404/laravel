@extends('calculators.index')
@section('content')
    <form action="{{ route('calculate/calculateMinus') }}" method="post">
        @csrf
        <input type="hidden" name="operator" value="{{ operator }}">
        <div class="input-group mb-3">
            <label for="" class="form-label">First Number</label>
            <input type="text" name="number1" class="form-control" placeholder="Input first number"
                value="{{ old('number1') }}">
        </div>
        <div class="input-group mb-3">
            <label for="" class="form-label">Second Number</label>
            <input type="text" name="number2" class="form-control" placeholder="Input second number"
                value="{{ old('number2') }}">
        </div>
        <button class="btn btn-primary">Count</button>
    </form>

    <h3 class="mt-5">Result: {{ $result }} </h3>
@endsection
