@extends('../template/master')

@section('content')

@foreach($okrs as $okr)
    {{ $okr }}
@endforeach

<a href="{{ route('okrCreate') }}">Cadastrar um OKR</a>
@endsection