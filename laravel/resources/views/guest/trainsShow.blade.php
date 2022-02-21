@extends('guest.layout.base')

@section('documentTitle')
    Trains
@endsection

@section('content')
<div class="container-fluid-content">
    <ul>
        <li>{{ $train->id }}</li>
        <li>{{ $train->azienda }}</li>
        <li>{{ $train->stazione_partenza }}</li>
        <li>{{ $train->stazione_arrivo }}</li>
        <li>{{ $train->giorno }}</li>
        <li>{{ $train->orario_partenza }}</li>
        <li>{{ $train->orario_arrivo }}</li>
        <li>{{ $train->codice_treno }}</li>
        <li>{{ $train->numero_carrozze }}</li>
        <li>{{ $train->in_orario }}</li>
        <li>{{ $train->cancellato }}</li>
    </ul>
</div>
<div class="button-content">
    <button class="myButton">
        <a href="{{route('trains')}}">HOME</a>
    </button>
</div>
@endsection

@section('scripts')
  <script src="{{asset('js/app.js')}}"></script>
@endsection