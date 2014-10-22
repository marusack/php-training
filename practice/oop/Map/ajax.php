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
        <select class="province">
            <?php require_once 'main.php'; ?>
            <?php foreach ($provinces as $province): ?>
            <option><?php echo $province->getName(); ?></option>
            <?php endforeach; ?>
        </select>
        <select class="ciudad">

        </select>
        <script>
            $(".province").change(function(){
                $(".ciudad").show();
                $.ajax({
                    url: './datas.php',
                    data: {'provincia': $(".provincia").val()},
                    contentType: 'application/json; charset=UTF-8',
                    type: 'GET',
                    // beforeSend: fuction() {}
                    success: function(cities) {
                        // console.log(cities);
                        $.each(cities.city, function () {
                            $('.ciudad').append($('<option></option>').text(this));
                        });
                    },
                    error: function (error) {
                        $('body').append('<div>' + error + '</div>');
                    }
                    // complete: function() {}
                });
            });
        </script>
    </body>
</html>