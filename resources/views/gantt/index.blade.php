<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.css" rel="stylesheet">
	<style type="text/css">
		html, body{
            height:100%;
            padding:0px;
            margin:0px;
            overflow: hidden;
        }
	</style>
	<title>OKR</title>
</head>
<body>
	<div id="gantt_here" style='width:100%; height:100%;'></div>
	


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
</body>
</html>