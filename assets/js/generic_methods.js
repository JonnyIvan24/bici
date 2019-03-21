let localhost = 'http://localhost/bici/';

function confirm_(id) {
    var r = confirm("¿Esta segruo de eliminar la bici "+id+"?");
    if (r === true) {
        location.href = 'resources/bici/delete.php?id='+id;
    }
}

function updateTable() {
    var numBicis = $('#bicisResults').children('tr');
    let url = localhost+'resources/bici/indexJSON.php';
    fetch(url, {
        headers:{
            'Access-Control-Allow-Origin': '*'
        }
    }).then(response => response.json())
        .then( data => {
            if (data.length === numBicis.length){
                $.each(data, function (index, element) {
                    $('#dist'+element.id).text(parseFloat(element.dist_tot).toFixed(2)+ ' m');
                    $('#vel'+element.id).text(((element.velocidad/15)/3.6**2).toFixed(2)+ ' Km/h');
                });
            }else {
                alert('Se desincronizó la actualización, se volvera a refrescar la página');
                location.href = localhost;
            }
            })
        .catch( console.error);
}

function bicis(string){
    let url = localhost+'resources/bici/indexJSON.php';
    fetch(url, {
        headers:{
            'Access-Control-Allow-Origin': '*'
        }
    }).then(response => response.json())
        .then( data => {
            var html = '';
            $.each(data, function (index, elemnt) {
                html = "<tr>"+
                    '<td>'+elemnt.id+'</td>'+
                    '<td id="dist'+elemnt.id+'">'+parseFloat(elemnt.dist_tot).toFixed(2)+' m</td>'+
                    '<td id="vel'+elemnt.id+'">'+(((elemnt.velocidad/15)/3.6**2).toFixed(2))+' Km/h</td>'+
                    '<td colspan="10%">'+
                    '<ul class="nav nav-pills justify-content-end">'+
                    '<li class="nav-item dropdown">'+
                    '<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"></a>'+
                    '<div class="dropdown-menu">'+
                    '<a class="dropdown-item" href="layouts/bici/actualizar.php?id='+elemnt.id+'">Editar</a>'+
                    '<a class="dropdown-item" onclick="confirm_('+elemnt.id+');">Eliminar</a>'+
                    '</div></li></ul></td></tr>';
                $("#bicisResults").append(html);
            })
        })
        .catch( console.error);
}

$(document).ready(function () {
    //updateTable();
    bicis(setInterval( function () {
        updateTable();
    },1000));
});