@extends('layouts.app')

@section('page-title', 'Passengers Index')
@section('main-content')
    <section id="passengers" class="bg-warning-subtle">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="mt-3 mb-4">
                        Passengers List
                    </h1>
                </div>
                <div class="row">
                    @forelse ($passengers as $passenger)
                        <div class="col-4 mt-3 mb-3">
                            <div class="card box bg-success-subtle">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        NAME: {{ $passenger->nome}}
                                    </h5>
                                    <h5 class="card-title mb-2 text-body-secondary">
                                        LASTNAME: {{ $passenger->cognome}}
                                    </h5>
                                    <p class="card-text">
                                        DATE OF BIRTH: {{ $passenger->data_nascita}}
                                    </p>
                                    <p class="card-text">
                                        CLASS: {{ $passenger->classe }}
                                    </p>
                                    <p class="card-text">
                                        PASSENGER CODE: {{ $passenger->numero_passeggero }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h2>
                            No Passangers available at the moment
                        </h2>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection
