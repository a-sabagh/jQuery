<!DOCTYPE html>
<html>
<head>
    <title>jQueryAjax $.get</title>
    <meta charset="utf-8">
    <script src="../../jquery-core/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#btn-load-php").click(function () {
                var files = {
                    0 : {
                        name : "gnutec1.png",
                        size : "1543523",
                        type : "image/png"
                    },
                    1 : {
                        name: "gnutec2.png",
                        size : "1543523",
                        type : "image/png"
                    },
                    2 : {
                        name : "gnutec3.png",
                        size : "1543523",
                        type : "image/png"
                    }
                };
                $.ajax({
                    url: 'file.php',
                    type: "POST",
                    data: files,
                    success: function (response) {
                        $("#content-php").text(response);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <pre id="content-php"></pre>
    <p style="color: tomato">post from file.php: <button id="btn-load-php">load content by click</button></p><hr>
</body>
</html>