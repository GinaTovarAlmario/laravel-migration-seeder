@extends('layouts.app')

@section('page-title', 'Trains Index')

@section('main-content')
    <section class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>
                    TRAINS
                </h1>
            </div>
            <div class="row">
                @forelse ($trains as $train)
                    <div class="col-4 mt-3 mb-3">
                        <div class="card box">
                            <div class="card-body">
                                <h5 class="card-title">
                                    DEPARTURE: {{$train->stazione_di_partenza}}
                                </h5>
                                <h5 class="card-title mb-2 text-body-secondary">
                                    ARRIVAL: {{$train->stazione_di_arrivo}}
                                </h5>
                                <p class="card-text">
                                    DEPARTURE TIME: {{$train->orario_di_partenza}}
                                </p>
                                <p class="card-text">
                                    ARRIVAL TIME: {{$train->orario_di_arrivo}}
                                </p>
                                <p class="card-text">
                                    {{$train->azienda}}
                                </p>
                                <p class="card-text">
                                    TRAIN CODE: {{$train->codice_treno}}
                                </p>
                                <p class="card-text">
                                    CARRIAGE: {{$train->numero_carrozze}}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <h2>
                        No Trains available at the moment
                    </h2>
                @endforelse
            </div>
        </div>
    </section>
@endsection
