<html>
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
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
                    url: 'datas.php',
                    data: {'province':$(".province").val()},
//                    contentType: 'application/json; charset=UTF-8',
                    type: 'GET',
                    // beforeSend: fuction() {}
                    success: function(data) {
                        $(".ciudad").html('');
                        // console.log(cities);
                        for (var i = 0; i < data.length; i++) {
                            $('.ciudad').append($('<option></option>').text(data[i]));
                        };
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