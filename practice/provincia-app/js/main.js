//$(function(){
//    $("#search-name").keyup(function(){
//        $.ajax({
//            url:'filterProvince.php',
//            data: {"data":inputValue},
//            success: function (response){
//                console.log(response);
//            }
//        });
//    });
//});


$(document).ready(function(){
    $(function(){

    $("#inputsearch").keyup(function(){
        
        var value = $(this).val();
        
        if (value.length >= 0){
            consulta = $("#inputsearch").val();
        var $this = $(this);
        var nameLength = $this.val().length;
        //hace la búsqueda

        if (nameLength >= 2) {
            $.ajax({
                type: "GET",
                url: "/php-training2/php-training/practice/bugtracker/filterProvince.php",//http://localhost/php-training2/php-training/practice/bugtracker/filterProvince.php
                data: {"consulta": consulta},
                success: function(respuesta){
                    console.log(respuesta);
                }
            });
        };
//            $.ajax({
//                url: 'provinces.php',
//                data: {"data": value},
//                success: function(response){
//                    $.each(response, function(value){
//                        alert(value);
//                    })
//                }
//            })
        };
    })
})                                               
});
$("#provinciasLista li").append('<li>'+'informatorio'+'</li>');

$("#provinciasLista").on('click','li', function(){
                                                      alert(this).text()
                                                                            })
        
