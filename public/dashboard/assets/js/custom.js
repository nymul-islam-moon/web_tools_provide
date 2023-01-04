
// Accordion
$('.accordion').accordion({
    heightStyle: 'content',
    collapsible: true
});

// Available Products

// For a pie chart

let ctx = document.getElementById("myChart_s");
let myChart_s = new Chart(ctx,{
    type: 'pie',
    data : {
        datasets: [{
            data: [10, 20, 30],
            backgroundColor: [
                'Red',
                'Yellow',
                'Blue'
            ]
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
            'Red',
            'Yellow',
            'Blue'
        ]
    },
});




