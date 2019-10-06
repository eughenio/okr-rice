<div id="list-okrs">
	<div class="row">
@foreach($okrs as $okr)
<div class="col-sm-4">
	<div class="card card-okr okr-{{ $okr->id }}">
		<div class="card-header">
			{{ $okr->area->name }}
		</div>
  		<div class="card-body card-okr-body card-okr-body-{{ $okr->id }}">
  			<h5 class="card-title card-okr-title card-okr-title-{{ $okr->id }}">{{ $okr->objective }}</h5>
			Resultado: {{ $okr->result }}
		</div>
    </div>
</div>
@endforeach
</div>
</div>