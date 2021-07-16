$(document).ready(function(){

    function createShipment()
    {
        let idShipment = Math.floor(Math.random() * 10000)+1;
        let idCourier = Math.floor(Math.random() * 3)+1;
        let idProduct = Math.floor(Math.random() * 3)+1;
        let idStatus = Math.floor(Math.random() * 2)+1;
    
        console.log(idShipment+" "+idCourier+" "+idProduct+" "+idStatus);
        /*
        $.ajax({
            url: 'controllers/Shipment.php',
            type: 'post',
            dataType: 'json',
            data: {idShipment:idShipment, idCourier:idCourier, idProduct:idProduct,idStatus:idStatus},
        })
        .done(function(xx) {
    
            console.log(xx); 
        })
        .fail(function(resp) {
            console.log(resp);
        })*/

        $.ajax({
            url: 'controllers/shipmentInsert.php',
            type: 'post',
            dataType: 'json',
            data: {idShipment:idShipment, idCourier:idCourier, idProduct:idProduct,idStatus:idStatus},
        })
        .done(function(xx) {
    
            console.log(xx); 
        })
        .fail(function(resp) {
            console.log(resp);
        })
    }


    $("#btn-send").click(function()
    {
        createShipment();
    });


});

function Delete(ide)
{
    let id = ide;
    id = id.split("-");
    id= id[2];
    console.log(id);
    $.ajax({
        url: 'controllers/shipmentDelete.php',
        type: 'post',
        dataType: 'json',
        data: {id:id},
    })
    .done(function(xx) {

        console.log(xx); 
    })
    .fail(function(resp) {
        console.log(resp);
    })
}

function ChangeStatus(ide)
{
    let id = ide;
    id = id.split("-");
    id= id[2];
    console.log(id);
    $.ajax({
        url: 'controllers/shipmentChange.php',
        type: 'post',
        dataType: 'json',
        data: {id:id},
    })
    .done(function(xx) {

        console.log(xx); 
    })
    .fail(function(resp) {
        console.log(resp);
    })
}