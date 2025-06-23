
import ApexCharts from 'apexcharts'

/* Apexcharts (#bar) */
	
export function sales(myVarVal, hexToRgba) {
	var options = {
		series: [{
			name: 'Net Profit',
			type: 'column',
			data: [22, 34, 56, 37, 35, 21, 34, 60, 78, 56, 53, 89],
		}, {
			name: 'Sales',
			type: 'column',
			data: [42, 50, 70, 57, 55, 58, 43, 80, 54, 23, 34, 77],
		}],
		chart: {
			height: 380,
			foreColor: 'rgba(142, 156, 173, 0.9)',
		},
		stroke: {
			width: [0, 2, 4],
			curve: "smooth"
		},
		grid: {
		  borderColor: '#f7f9fa',
		},
		colors: [myVarVal ,"#44c4fa",],
		plotOptions: {
			bar: {
				borderRadius: 4,
				horizontal: false,
				columnWidth: '30%',
			},
		},
		dataLabels: {
			enabled: false,
		},
		legend: {
			show: true,
			position: 'bottom',
			labels: {
				color: 'rgba(142, 156, 173, 0.9)'
			},
			fontFamily: 'Hind Siliguri',
		},
		stroke: {
			show: true,
			width: 4,
			colors: ['transparent']
		},
		yaxis: {
			title: {
				style: {
					color: '#e6ebf1',
					fontSize: '14px',
					fontFamily: 'Hind Siliguri',
					fontWeight: 600,
					cssClass: 'apexcharts-yaxis-label',
				},
			},
			labels: {
				rotate: -90,
				style: {
					fontFamily: 'Hind Siliguri',
					cssClass: 'summaryyaxis',
				}
			}
		},
		xaxis: {
			type: 'month',
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			axisBorder: {
				show: true,
				color: '#e6ebf1',
				offsetX: 0,
				offsetY: 0,
			},
			axisTicks: {
				show: true,
				borderType: 'solid',
				color: '#e6ebf1',
				width: 6,
				offsetX: 0,
				offsetY: 0
			},
			labels: {
				rotate: -90,
				style: {
					fontFamily: 'Hind Siliguri',
					cssClass: 'summaryxaxis',
				}
			}
		},
		markers: {
			size: 0
		}
	};
	  document.getElementById("statistics").innerHTML= " ";
	  var chart = new ApexCharts(document.querySelector("#statistics"), options);
	  chart.render();
}
	
/* Apexcharts (#bar) closed */
