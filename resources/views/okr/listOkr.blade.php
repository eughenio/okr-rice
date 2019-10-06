<div id="list-okrs">
@foreach($okrs as $okr)
	<div class="card okr okr-{{ $okr->id }}">
		<div class="card-header">
			{{ $okr->area->name }}
		</div>
  		<div class="card-body card-body-{{ $okr->id }}">
  			<h5 class="card-title card-title-{{ $okr->id }}">{{ $okr->objective }}</h5>
			Resultado: {{ $okr->result }}
		</div>
    </div>
@endforeach
</div>