data = $("canvas#attendee_stats").data('stats');
var data = [
	{
		value: data[1],
		color:"#F7464A",
    highlight: "#FF5A5E",
    label: "Man"
	},
	{
		value: data[2],
    color: "#46BFBD",
    highlight: "#5AD3D1",
    label: "Woman"
	},
	{
    value: data[3],
    color: "#FDB45C",
    highlight: "#FFC870",
    label: "None"
	}
];
new Chart($("#attendee_stats").get(0).getContext("2d")).Doughnut(data, { animationEasing: null, animationSteps: 40 });

var data = {
	labels: ["Food Allergy", "Medicine Allergy", "Health Condition"],
	datasets: [
		{
			label: "My First dataset",
			fillColor: "rgba(220,220,220,0.5)",
			strokeColor: "rgba(220,220,220,0.8)",
			highlightFill: "rgba(220,220,220,0.75)",
			highlightStroke: "rgba(220,220,220,1)",
			data: $("canvas#medical_stats").data('stats')
		}
	]
};

new Chart($("#medical_stats").get(0).getContext("2d")).Bar(data, { animationSteps: 50 });

var data = {
  labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6"],
  datasets: [
    {
      label: "Goal",
      fillColor: "rgba(220,220,220,0.2)",
      strokeColor: "rgba(220,220,220,1)",
      pointColor: "rgba(220,220,220,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(220,220,220,1)",
      data: $("canvas#attending_stats").data('goal')
    },
    {
      label: "Attending",
      fillColor: "rgba(151,187,205,0.2)",
      strokeColor: "rgba(151,187,205,1)",
      pointColor: "rgba(151,187,205,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(151,187,205,1)",
      data: $("canvas#attending_stats").data('real')
    }
  ]
};
new Chart($("#attending_stats").get(0).getContext("2d")).Line(data, { animationSteps: 50 });