$(document).ready(function(){

    //Inicio Graficos
    for (var i = 0; 2 >= i; i++) {
        idChart = "myChart"+i;
       var ctx = document.getElementById(idChart).getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
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
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    }
    // FIn Grafico


    // Inicio Buscador Productos

    (function ($) {
        $('#buscador').keyup(function () {
            var rex = new RegExp($(this).val(), 'i');
            $('#resultadoB div').hide();
            $('#resultadoB div').filter(function () {
                return rex.test($(this).text()+ $(this).siblings('div').text());
            }).show();
        })
    }($));

    // Fin buscador

    //Productos vendidos

    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

    $('#productoDesde').val(today);
    $('#productoHasta').val(today);

    $('#productoDesde').change(function(){
        let productoDesde = $('#productoDesde').val();
        let productoHasta = $('#productoHasta').val();
        alert(productoDesde +"-"+ productoHasta);
    })

     $('#productoHasta').change(function(){
        let productoDesde = $('#productoDesde').val();
        let productoHasta = $('#productoHasta').val();
        alert(productoDesde +"-"+ productoHasta);
    })


    //Fin Productos Vendidos
 



})

