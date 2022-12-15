@extends('layouts/app')

@section('content')
    <div class="home">

        <div class="container">
            <div class="row">

                @foreach ($db as $item)
                    <div class="col-2 p-4">

                        <div class="card">
                            <figure>
                                <img src=" {{ $item['thumb'] }} " alt="">
                            </figure>

                            <p class="p-2">
                                {{ $item['title'] }}
                            </p>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>

    </div>
@endsection
