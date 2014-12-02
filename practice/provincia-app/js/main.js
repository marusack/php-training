
$(document).ready(function(){
    
        
    $("#inputsearch").keyup(function(){//podria cambiar a on keyup porque cuando no encuentra por cada letra q se agrega crea un nuevo li
        
        var value = $(this).val();
            if (value.length>=2){
                     var value = $("#inputsearch").val();
                     if (value.length>=1){
                     

        
            $.ajax({
                type: "GET",
                url: " /php-training2/php-training/practice/provincia-app/filterProvince.php ",
                data: {"value": value},
                success: function(response){
                    if(response.length>0){
                            console.log(response);

                            $('#provinciasLista').html('');

                            for (var i = 0; i< response.length; i++){
                                $('#provinciasLista').append('<br>'+'<li>'+response[i].name+'</li>'+'<br>');

                            }
                        }
                    
                    else {
                        alert('Existen '+ response.length +' resultados coincidentes para la provincia'); 
                            $('#provinciasLista').add('<br>'+'<li></li>'+'<br>');
                    }
                }
            });
        };
        };
        });
        });

$("#provinciasLista").on('click','li',function(){
        var provincia;
        provincia=$(this).text();
    $.ajax({
        type: "GET",
        url: " /php-training2/php-training/practice/provincia-app/filterCity.php ",//falta hacer filter city
        data: {"provincia": provincia},//valor resultante de tomar lo contenido por el elemento html
        success: function(response1) {
            if(response1.length>0){
            
                            $('#provinciasCity').html('');
                            alert('Existen '+ response1.length +' resultados coincidentes para ciudades relativas a la prov seleccionada'); 
                            for (var i = 0; i< response1.length; i++){
                                $('#provinciasCity').append('<br>'+'<li>'+response1[i].name+'</li>'+'<br>');
                            }
                        }
                        else{
                            alert('Existen '+ response1.length +' resultados coincidentes para ciudades relativas a la prov seleccionada'); 
                            $('#provinciasCity').add('<br>'+'<li></li>'+'<br>');
                        }
            
        }
            });
    });

      //$("#results").on('click', 'li', function() { alert($(this).text()) });