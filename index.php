<?php
require_once ('mailsender.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <title>Mail</title>
</head>
<body>
    <div class="container-fluid text-center main">
        <h1 class="header"><span class="glyphicon glyphicon-envelope"></span> WELCOME TO THE MAILING APP</h1>

        <form action="<?php echo (htmlspecialchars($_SERVER['PHP_SELF']))?>" class="form text-center" method="post" enctype="multipart/form-data">
           <div class="row">
               <div class="col-sm-4 form-group">
                     <input type="text" class="form-control" name="sender_name" placeholder="From" />
               </div>
               <div class="col-sm-8 form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject"/>
               </div><br/>
           </div>
            <textarea class="form-control recipient" rows="8" placeholder="Enter the email of the recipients separated by a semicolon(;)"
                      name="recipients"></textarea>
            <textarea class="form-control msg-body" rows="8" placeholder="Message Body" name="body"></textarea>
            <input type="submit" class="btn-primary btn-lg send" value="send" name="send"/>
        </form>
    </div>
</body>
</html>