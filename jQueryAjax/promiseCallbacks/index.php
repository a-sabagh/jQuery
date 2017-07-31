<!DOCTYPE html>
<html>
    <head>
        <title>jQueryAjax $.get</title>
        <meta charset="utf-8">
        <script src="../../jquery-core/jquery-3.2.1.min.js"></script>
        <script>
        $(document).ready(function(){
            $("#btn-load-txt").click(function(){
                var jqxhr = $.get("file.txt" , function(data){
                    $("#content-txt").text(data);
                });
                jqxhr.done(function(){ alert("successfully done") });
                jqxhr.fail(function(){ alert("fail xhr") });
                jqxhr.always(function(){ alert("xhr finished"); });
            });
        });
        </script>
    </head>
    <body>
        <p id="content-txt"></p>
        <p style="color: tomato">get from file.txt: <button id="btn-load-txt">load content by click</button></p><hr>
    </body>
</html>
