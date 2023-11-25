@extends('layouts.master')

@section('content')
<main role="main" class="container">
    <h1 class="mt-5">Home</h1>

    <div class="row mt-5">
        @for ($i = 0; $i < count($blogs); $i++)

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>{{$blog[$i]['title']}}</h2>
                    <p>{{$blog[$i]['body']}}</p>
                </div>
            </div>
        </div>

        @endfor
    </div>
</main>
@endsection

