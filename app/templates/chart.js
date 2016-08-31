
var controller = new Vue({
    el: '#chart_demo',
    data: {

    },
    methods: {
        init: function() {
            this.draw_chart_1();
            this.draw_chart_2();
            this.draw_chart_3();
            this.draw_chart_4();
            this.draw_chart_5();
            this.draw_chart_6();
            this.draw_chart_7();
            this.draw_chart_8();
        },

        draw_chart_1: function() {
            // Get Chart Data
            var objData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "My First dataset",
                        fill: false,
                        lineTension: 0.1,
                        backgroundColor: "rgba(75,192,192,0.4)",
                        borderColor: "rgba(75,192,192,1)",
                        borderCapStyle: 'butt',
                        borderDash: [],
                        borderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        pointBorderColor: "rgba(75,192,192,1)",
                        pointBackgroundColor: "#fff",
                        pointBorderWidth: 1,
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(75,192,192,1)",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointHoverBorderWidth: 2,
                        pointRadius: 1,
                        pointHitRadius: 10,
                        data: [65, 59, 80, 81, 56, 55, 40],
                        spanGaps: false,
                    }
                ]
            };

            // Config Options
            var objOptions = {};

            // Draw Chart
            var elChart = $('#chart_demo_1')[0];
            var objChart = new Chart(elChart, {
                type: 'line',
                data: objData,
                options: objOptions
            });
        },

        draw_chart_2: function() {
            // Get Chart Data
            var objData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "My First dataset",
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1,
                        data: [65, 59, 80, 81, 56, 55, 40],
                    }
                ]
            };

            // Config Options
            var objOptions = {};

            // Draw Chart
            var elChart = $('#chart_demo_2')[0];
            var objChart = new Chart(elChart, {
                type: 'bar',
                data: objData,
                options: objOptions
            });
        },

        draw_chart_3: function() {
            // Get Chart Data
            var objData = {
                labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
                datasets: [
                    {
                        label: "My First dataset",
                        backgroundColor: "rgba(179,181,198,0.2)",
                        borderColor: "rgba(179,181,198,1)",
                        pointBackgroundColor: "rgba(179,181,198,1)",
                        pointBorderColor: "#fff",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(179,181,198,1)",
                        data: [65, 59, 90, 81, 56, 55, 40]
                    },
                    {
                        label: "My Second dataset",
                        backgroundColor: "rgba(255,99,132,0.2)",
                        borderColor: "rgba(255,99,132,1)",
                        pointBackgroundColor: "rgba(255,99,132,1)",
                        pointBorderColor: "#fff",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(255,99,132,1)",
                        data: [28, 48, 40, 19, 96, 27, 100]
                    }
                ]
            };

            // Config Options
            var objOptions = {};

            // Draw Chart
            var elChart = $('#chart_demo_3')[0];
            var objChart = new Chart(elChart, {
                type: 'radar',
                data: objData,
                options: objOptions
            });
        },

        draw_chart_4: function() {
            // Get Chart Data
            var objData = {
                datasets: [{
                    data: [
                        11,
                        16,
                        7,
                        3,
                        14
                    ],
                    backgroundColor: [
                        "#FF6384",
                        "#4BC0C0",
                        "#FFCE56",
                        "#E7E9ED",
                        "#36A2EB"
                    ],
                    label: 'My dataset' // for legend
                }],
                labels: [
                    "Red",
                    "Green",
                    "Yellow",
                    "Grey",
                    "Blue"
                ]
            };

            // Config Options
            var objOptions = {};

            // Draw Chart
            var elChart = $('#chart_demo_4')[0];
            var objChart = new Chart(elChart, {
                type: 'polarArea',
                data: objData,
                options: objOptions
            });
        },

        draw_chart_5: function() {
            // Get Chart Data
            var objData = {
                labels: [
                    "Red",
                    "Blue",
                    "Yellow"
                ],
                datasets: [
                    {
                        data: [300, 50, 100],
                        backgroundColor: [
                            "#FF6384",
                            "#36A2EB",
                            "#FFCE56"
                        ],
                        hoverBackgroundColor: [
                            "#FF6384",
                            "#36A2EB",
                            "#FFCE56"
                        ]
                    }
                ]
            };

            // Config Options
            var objOptions = {};

            // Draw Chart
            var elChart = $('#chart_demo_5')[0];
            var objChart = new Chart(elChart, {
                type: 'pie',
                data: objData,
                options: objOptions
            });
        },

        draw_chart_6: function() {
            // Get Chart Data
            var objData = {
                labels: [
                    "Red",
                    "Blue",
                    "Yellow"
                ],
                datasets: [
                    {
                        data: [300, 50, 100],
                        backgroundColor: [
                            "#FF6384",
                            "#36A2EB",
                            "#FFCE56"
                        ],
                        hoverBackgroundColor: [
                            "#FF6384",
                            "#36A2EB",
                            "#FFCE56"
                        ]
                    }
                ]
            };

            // Config Options
            var objOptions = {};

            // Draw Chart
            var elChart = $('#chart_demo_6')[0];
            var objChart = new Chart(elChart, {
                type: 'doughnut',
                data: objData,
                options: objOptions
            });
        },

        draw_chart_7: function() {
            // Get Chart Data
            var objData = {
                datasets: [
                    {
                        label: 'First Dataset',
                        data: [
                            {
                                x: 20,
                                y: 30,
                                r: 15
                            },
                            {
                                x: 40,
                                y: 10,
                                r: 10
                            }
                        ],
                        backgroundColor:"#FF6384",
                        hoverBackgroundColor: "#FF6384",
                    }
                ]
            };

            // Config Options
            var objOptions = {};

            // Draw Chart
            var elChart = $('#chart_demo_7')[0];
            var objChart = new Chart(elChart, {
                type: 'bubble',
                data: objData,
                options: objOptions
            });
        },

        draw_chart_8: function() {
            var objChart = new JustGage({
                id: "chart_demo_8",
                value: 25,
                min: 10,
                max: 100,
                title: "Visitors",
                levelColorsGradient: false
            });
        }
    }

});

$(function() {
    controller.init();
});

