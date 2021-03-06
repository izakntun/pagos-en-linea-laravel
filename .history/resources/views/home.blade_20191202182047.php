@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Make Payment</div>

                <div class="card-body">
                    <form action="" method="POST" id="paymentForm">
                        @csrf
                        <div class="row">
                            <div class="col-auto">
                                <label for="">How mucho you want to pay?</label>
                                <input
                                    type="number"
                                    name="value"
                                    min="5"
                                    step="0.01"
                                    class="form-control"
                                    value="{{ mt_rand(500, 100000) / 100 }}"
                                    required>
                                <small class="form-text text-muted">
                                        "Use values with up to two decimal positions, using dot ".""
                                </small>
                            </div>
                            <div class="col-auto">
                                <label for="">Currency</label>
                                <select name="currency" class="custom-select" id="" required>
                                    @foreach ($currencies as $currency)
                                        <option value="{{ $currency->iso }}">
                                            {{ strtoupper($currency->iso) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div></div>
                        <div class="text-center mt-3">
                            <button type="submit" id="payButton" class="btn btn-primary btn-large">Pay</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
