<html>
    <head>
        <script scr="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
        <title>Ajax</title>
        <style>
            .container{
                position: absolute; /* or absolute */
                top: 50%;
                left: 50%;
            }
            .ciudad{
                display: none
            }
        </style>
    </head>
    <body class="container">
        <select class="provincia">
            <option>Corrientes</option>
            <option>Chaco</option>
        </select>
        <select class="ciudad">

        </select>
        <script>
            $(".provincia").change(function() {
                $(".ciudad").show();
                $.ajax({
                    url: 'main.php',
                    data: {'provincia': $(".provincia").val()},
                    type: 'GET',
                    beforeSend: fuction() {
                        
                    }
                    success: function(data) { 
                        console.log(data);
                        $('ciudad').append($('<option></option>').text(data));
                    }
                    error: function(error){
                        $('body').append('<div>' + error + '</div>');
                    }
                    complete: function() {
                        
                    }
                });
            });
        </script>
    </body>
</html>