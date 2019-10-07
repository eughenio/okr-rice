@extends('../template/master')

@section('content')
<h1>OKRs</h1>
<hr />
<a href="{{ route('okrCreate') }}" class="btn btn-primary">Cadastrar um OKR</a>
<a href="{{ route('gantt') }}" class="btn btn-primary">Gantt</a>

@component('okr.listOkr', ['okrs' => $okrs])@endcomponent

<a href="{{ route('okrCreate') }}" class="btn btn-primary">Cadastrar um OKR</a>
<a href="{{ route('gantt') }}" class="btn btn-primary">Gantt</a>
@endsection