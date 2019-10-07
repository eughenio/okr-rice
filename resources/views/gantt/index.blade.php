@extends('../template/master')

@section('styles')
<link href="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.css" rel="stylesheet">
<style type="text/css">
	html, body{
        height:100%;
        padding:0px;
        margin:0px;
        overflow: hidden;
    }

    .container{
    	height: 100%;
    }
</style>
@endsection


@section('content')
<h1>OKRs</h1>
<hr />
<a href="{{ route('okr') }}">Voltar para lista</a>
<div id="gantt_here" style='width:100%; height:100%;'></div>
@endsection

@section('jscript')
<script src="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.js"></script>
	<script type="text/javascript">
		gantt.config.date_format = "%Y-%m-%d %H:%i:%s";
		gantt.config.scales = [
		    {unit: "month", step: 1, format: "%F, %Y"},
		    {unit: "week", step: 1, format: function (date) {
		        return "Week #" + gantt.date.getWeek(date);
		    }}
		];
	    gantt.init("gantt_here");
	    gantt.load("{{ route('ganttData') }}");
	</script>
	<script src="https://docs.dhtmlx.com/gantt/codebase/locale/locale_pt.js?v=6.2.6"></script>
@endsection