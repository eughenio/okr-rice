@extends('../template/master')

@section('content')
<h1>OKRs</h1>
<hr />
<form action="{{ route('okrStore') }}" method="post">
@csrf
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="objective">Objetivo:</label>
			<input type="text" class="form-control" name="objective" id="objective" placeholder="Digite o Objetivo!" />
		</div>
		<div class="form-group col-md-6">
			<label for="result">Resultado:</label>
			<input type="text" class="form-control" name="result" id="result" placeholder="Digite o Resultado!" /> 
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="quarter_year">Quarter:</label>
			<input type="text" class="form-control" name="quarter_year" id="quarter_year" placeholder="Digite o Quarter" />
		</div>
		<div class="form-group col-md-6">
			<label for="priority">Prioridade:</label>
			<input type="text" class="form-control" name="priority" id="priority" placeholder="Digite a Prioridade!" /> 
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="progress">Porcentagem:</label>
			<input type="text" class="form-control" name="progress" id="progress" placeholder="Digite quantos %!" />
		</div>
		<div class="form-group col-md-6">
			<label for="duration">Tempo Estimado:</label>
			<input type="text" class="form-control" name="duration" id="duration" placeholder="Digite a Estimativa de entrega!" /> 
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="area_id">Área:</label>
			<select class="custom-select" name="area_id" id="area_id">
				<option selected>Escolha área do OKR</option>
				@foreach($areas as $area)
					<option value="{{ $area->id }}">{{ $area->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group col-md-6">
			<label for="start_date">Data de Início:</label>
			<input type="text" class="form-control" name="start_date" id="start_date" placeholder="Digite quando começa!" />
		</div>
		
	</div>
	<div class="form-row">
		<div class="form-group col-md-3">
			<label for="reach">Alcance:</label>
			<select class="custom-select" name="reach" id="reach">
				<option selected>Escolha o Alcance</option>
				<option value="100">1. Alcance muito baixo</option>
				<option value="200">2. Alcance baixo</option>
				<option value="400">3. Alcance médio</option>
				<option value="800">4. Alcance alto</option>
				<option value="1600">5. Alcance muito alto</option>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label for="impact">Impacto:</label>
			<select class="custom-select" name="impact" id="impact">
				<option selected>Escolha o Impacto</option>
				<option value="0.25">1. Impacto muito baixo</option>
				<option value="0.5">2. Impacto baixo</option>
				<option value="1">3. Impacto médio</option>
				<option value="2">4. Impacto alto</option>
				<option value="3">5. Impacto muito alto</option>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label for="confidence">Confiança:</label>
			<select class="custom-select" name="confidence" id="confidence">
				<option selected>Escolha a Confiança</option>
				<option value="20">1. Confiança muito baixo </option>
				<option value="50">2. Confiança baixo </option>
				<option value="70">3. Confiança médio </option>
				<option value="80">4. Confiança alto </option>
				<option value="100">5. Confiança muito alto </option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label for="effort">Esforço:</label>
			<select class="custom-select" name="effort" id="effort">
				<option selected>Escolha o Esforço</option>
				<option value="1">1. Esforço muito baixo</option>
				<option value="2">2. Esforço baixo</option>
				<option value="5">3. Esforço médio</option>
				<option value="10">4. Esforço alto</option>
				<option value="15">5. Esforço muito alto</option>
			</select>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-12 okr-button-submit">
			<input type="submit" value="Cadastrar" class="btn btn-primary" />
			<input type="submit" value="Cadastrar com time" formaction="{{ route('okrStorePlusTeam') }}" class="btn btn-secondary" />
		</div>
	</div>
</form>

<a href="{{ route('okr') }}">Voltar para lista</a>
@endsection