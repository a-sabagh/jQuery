<!DOCTYPE html>
<html>
    <head>
        <title>jQueryAjax load</title>
        <meta charset="utf-8">
        <style>
            body{padding: 30px;}
            *{font-family:tahoma;}
            .menu-label{ width: 160px; display: inline-block;}
        </style>
        <script src="../../jquery-core/jquery-3.2.1.min.js"></script>
        <script>
            function saveAccessGroup(){
                $.ajax({
                    url: "file.php",
                    type: "post",
                    data: $("form").serialize(),
                    success: function(respons){
                        $("p").html(respons);
                    }
                });
            }
        </script>
    </head>
    <body>
        <p id="content-txt"></p>
        <form method="post" action="javascript:saveAccessGroup();">
            <input name="group_name" class="form-control" type="text">
            <input type="checkbox" name="checkarr[]" value="1">
            <input type="checkbox" name="checkarr[]" value="2">
            <input type="checkbox" name="checkarr[]" value="3">
            <input type="checkbox" name="checkarr[]" value="4">
            <input type="checkbox" name="checkarr[]" value="5">
            <input name="save_access_group" value="submit" type="submit">
        </form>
    </body>
</html>
