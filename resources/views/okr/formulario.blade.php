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

		<label for="percentage">Porcentagem:</label>
		<input type="text" name="percentage" id="percentage" placeholder="Digite Sua Porcentagem Aqui!" />

		<label for="area_id">Área:</label>
		<select name="area_id" id="area_id">
			@foreach($areas as $area)
				<option value="{{ $area->id }}">{{ $area->name }}</option>
			@endforeach
		</select>

		<input type="submit" value="Cadastrar" />
		<input type="submit" value="Cadastrar com time" formaction="{{ route('okrStorePlusTeam') }}" />
	</fieldset>
</form>

<a href="{{ route('okr') }}">Voltar para lista</a>
@endsection