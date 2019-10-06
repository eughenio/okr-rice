@extends('../template/master')

@section('content')
<h1>OKRs</h1>
<hr />
<form action="{{ route('okrStore') }}" method="post">
	@csrf
	<fieldset>
		<label for="objective">Objetivo:</label>
		<input type="text" name="objective" id="objective" placeholder="Digite Seu Objetivo Aqui!" />

		<label for="result">Resultado:</label>
		<input type="text" name="result" id="result" placeholder="Digite Seu Resultado Aqui!" />
		
		<label for="quarter_year">Quarter:</label>
		<input type="text" name="quarter_year" id="quarter_year" placeholder="Digite Seu Quarter Aqui!" />
		
		<label for="priority">Prioridade:</label>
		<input type="text" name="priority" id="priority" placeholder="Digite Sua Prioridade Aqui!" />

		<label for="progress">Porcentagem:</label>
		<input type="text" name="progress" id="progress" placeholder="De 0 a 1!" />

		<label for="duration">Duração:</label>
		<input type="text" name="duration" id="duration" placeholder="Digite Sua Duração Aqui!" />

		<label for="area_id">Área:</label>
		<select name="area_id" id="area_id">
			@foreach($areas as $area)
				<option value="{{ $area->id }}">{{ $area->name }}</option>
			@endforeach
		</select>

		<label for="start_date">Data de Início:</label>
		<input type="text" name="start_date" id="start_date" placeholder="Data de Início Aqui!" />

		<input type="submit" value="Cadastrar" />
		<input type="submit" value="Cadastrar com time" formaction="{{ route('okrStorePlusTeam') }}" />
	</fieldset>
</form>

<a href="{{ route('okr') }}">Voltar para lista</a>
@endsection