@extends('../template/master')

@section('content')
<h1>OKRs</h1>
<hr />
<a href="{{ route('okrCreate') }}">Cadastrar um OKR</a>
@component('okr.listOkr', ['okrs' => $okrs])@endcomponent

<a href="{{ route('okrCreate') }}">Cadastrar um OKR</a>
@endsection