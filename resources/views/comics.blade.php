@extends('layouts.app')

@section('content')
    <section id="comics">
        <div class="container">
            <div class="row py-5">
                
                    @foreach ($comics as $comic)
                    <div class="col-2 d-flex">
                        <div class="card my-2 text-uppercase">
                            <div class="card-img">
                                <img src="{{ $comic['thumb']}}" alt="">
                            </div>
                            <div class="text-center my-1">
                                {{$comic['series']}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                
            </div>
        </div>
    </section>
@endsection