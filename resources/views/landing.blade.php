@extends('layouts.main')

@section('content')
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">Tabang Calamity</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">
                    Kailangan mo tulong. Pindutin mo ako. Nandyan ako sa tabi mo. Hindi ka nag iisa.
                    <br><br>
                    <i>Masapul mo't Saranay, pisilin nak,
                        adda ak lng abay mo,
                        dika't agmaymaysa.</i>
                </h2>
                <a class="btn btn-success js-scroll-trigger" href="{{ route('form') }}">Pindutin para sa Tulong</a>
            </div>
        </div>
    </header>
@endsection
