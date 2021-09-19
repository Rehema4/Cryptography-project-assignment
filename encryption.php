<?php 
    include('encrypt.php');
    
    
   
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Encrypt Message</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>


       <div class="container contact-form">
            
            <form action="encryption.php" method="post">
                <h3>Send your message </h3>
               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for=""><b>The message to be sent:</b></label>
                            <textarea name="txtMsg" class="form-control" value=" <?php echo $message; ?>" style="width: 100%; height: 150px;"></textarea>
                        </div> 

                        <div class="form-group">
                            <label for=""><b>Recepient email:</b></label>
                            <input type ="email" name="txtEmail" class="form-control" >
                        </div>


                        <div class="form-group">
                            <input type="submit" name="btnEncypt" class="btnEncrypt" value="Encrypt Message" />
                        </div>
                    </div>
                </div>
            </form>    
        </div>

    </body>
</html>