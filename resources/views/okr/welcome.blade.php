@extends('../template/master')

@section('content')

@component('okr.listOkr', ['okrs' => $okrs])@endcomponent

<a href="{{ route('okrCreate') }}">Cadastrar um OKR</a>
@endsection