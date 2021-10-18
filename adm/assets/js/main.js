//FADE AUTO
$(function(){
    setTimeout(function() {
    $('#autofade').fadeOut('slow');}, 7000);
     });


     
     
// Tabela
    $(document).ready( function () {
    $('#tabela').DataTable();
    } );

    $(document).ready( function () {
    $('#tabela_noticias').DataTable();
    } );

   
    
// Chart
// import Chart from 'Chart.js';
// var ctx = document.getElementById('myChart').getContext('2d');
// var cao = document.getElementById('cao').value;
// var gato = document.getElementById('gato').value;
// var cavalo = document.getElementById('cavalo').value;
// var casos = document.getElementById('casos').value;
// var dicas = document.getElementById('dicas').value;
// var espe = document.getElementById('especialidades').value;
// var proj = document.getElementById('projetos').value;

// var myChart = new Chart(ctx, {
//         type: 'pie',
//         data: {
//             labels: ['Cão', 'Gato', 'Cavalo', 'Casos e Histórias', 'Especialidades', 'Dicas e Curiosidades', 'Projetos'],
//             datasets: [{
//                 label: '# de Conteúdos',
//                 data: [cao, gato, cavalo, casos, espe, dicas, proj ],
//                 backgroundColor: [
//                     'rgba(255, 99, 132, 0.4)',
//                     'rgba(54, 162, 235, 0.4)',
//                     'rgba(255, 206, 86, 0.4)',
//                     'rgba(94, 129, 172, 0.4)',
//                     'rgba(138, 43, 226, 0.4)',
//                     'rgba(55, 178, 77, 0.4)',
//                     'rgba(155, 27, 48, 0.4)'
//                 ],
//                 borderColor: [
//                     'rgba(255, 99, 132, 1)',
//                     'rgba(54, 162, 235, 1)',
//                     'rgba(255, 206, 86, 1)',
//                     'rgba(94, 129, 172, 1)',
//                     'rgba(138, 43, 226, 1)',
//                     'rgba(55, 178, 77, 1)',
//                     'rgba(155, 27, 48, 1)'
//                 ],
//                 borderWidth: 1
//             }]
//         },
//         options: {
//         responsive: true,
//         maintainAspectRatio: false,
        
//         }
//     });