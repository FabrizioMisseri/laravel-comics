@extends('layouts/app')

@section('content')
    <section>
        <h2>
            ciao sono shop
        </h2>
        <h4>
            <a href=" {{ route('home') }} " style="display: inline-block">
                torna alla home
            </a>
        </h4>
    </section>
@endsection
