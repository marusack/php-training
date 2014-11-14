$(function(){
    $("#search-name").keyup(function(){
        $.ajax({
            url:'filterProvince.php',
            data: {"data":inputValue},
            success: function (response){
                console.log(response);
            }
        });
    });
});


