<!DOCTYPE html>
<html>
    <head>
        <title>jQueryAjax $.ajax</title>
        <meta charset="utf-8">
        <script src="../../jquery-core/jquery-3.2.1.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#btn-load-php").click(function () {
                    var jqxhr = $.ajax({
                        url: "file.php",
                        type: "GET",
                        cache: false,
                        data: {
                            fullname: "Abolfazl",
                            lastseen: "2 PM"
                        },
                        success: function (response) {
                            $("#content-php").text(response);
                        },
                        beforeSend: function() {
                            $("#content-php").text("Loading...");
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <p id="content-php"></p>
        <p style="color: tomato">get from file.php: <button id="btn-load-php">load content by click</button></p><hr>
    </body>
</html>
