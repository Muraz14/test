@extends('layouts.app')

@section('title', 'Home')


@push('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endpush


@section('content')
<div>
    @foreach ($persons as $person)
        <div class="person">
            <img src="{{ $person['img'] }}">
            <div>
                <h4>{{ $person['name'] }}</h4>
                <p @class(['green' => $person['status'], 'red' => !$person['status']])>
                @if ($person['status'])
                    Active
                @else
                    Inactive
                @endif
                </p>
            </div>
        </div>
    @endforeach
</div>
@endsection


@push('js')
    <script src="../js/app.js"></script>
@endpush