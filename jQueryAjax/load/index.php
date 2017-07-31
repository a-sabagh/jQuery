<!DOCTYPE html>
<html>
    <head>
        <title>jQueryAjax load</title>
        <meta charset="utf-8">
        <script src="../../jquery-core/jquery-3.2.1.min.js"></script>
        <script>
        $(document).ready(function(){
            $("#btn-load-txt").click(function(){
                $("#content-txt").load("file.txt" , function( response, status, xhr ){
                    alert("Response: " + response);
                    alert("Status: " + status);
                    alert("xhr.status: " + xhr.status);
                });
            });
            $("#btn-load-html").click(function(){
                $("#content-html").load("file.html #ajax-load" , function( response, status, xhr ){
                    alert("Response: " + response);
                    alert("Status: " + status);
                    alert("xhr.status: " + xhr.status);
                });
            });
        });
        </script>
    </head>
    <body>
        <p id="content-txt"></p>
        <p style="color: tomato">load from file.txt: <button id="btn-load-txt">load content by click</button></p><hr>
        
        <p id="content-html"></p>
        <p style="color: tomato">load from file.html: <button id="btn-load-html">load content by click</button></p><hr>
    </body>
</html>
