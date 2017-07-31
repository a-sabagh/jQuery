<!DOCTYPE html>
<html>
    <head>
        <title>jQueryAjax $.get</title>
        <meta charset="utf-8">
        <script src="../../jquery-core/jquery-3.2.1.min.js"></script>
        <script>
        $(document).ready(function(){
            $("#btn-load-php").click(function(){
                var jqxhr = $.post("file.php" , {name: "henry" , time: "07 AM"});
                jqxhr.done(function(data){
                    alert("Request Successfully");
                    $("#content-php").text(data);
                });
                jqxhr.fail( function(){ alert("Request Fail") } );
                jqxhr.always( function(){ alert("Request Finished") });
            });
        });
        </script>
    </head>
    <body>
        <p id="content-php"></p>
        <p style="color: tomato">post from file.php: <button id="btn-load-php">load content by click</button></p><hr>
    </body>
</html>