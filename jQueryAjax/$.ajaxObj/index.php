<!DOCTYPE html>
<html>
    <head>
        <title>jQueryAjax $.get</title>
        <meta charset="utf-8">
        <script src="../../jquery-core/jquery-3.2.1.min.js"></script>
        <script>
        $(document).ready(function(){
            $("#btn-load-php").click(function(){
                var data0 = {numberId: "1", companyId : "531"};
                
                var json = JSON2.stringify(data0 ); 
                
                $.ajax({
                 type: "POST",
                 url: "file.php",
                 data: json,
                 contentType: "application/json; charset=utf-8",
                 dataType: "json",
                 success: function(msg) {
                 alert('In Ajax');
                 }
                });});

        });
        </script>
    </head>
    <body>
        <p id="content-php"></p>
        <p style="color: tomato">post from file.php: <button id="btn-load-php">load content by click</button></p><hr>
    </body>
</html>