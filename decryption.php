<?php 
    include('decrypt.php');
    
  
   
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Decrytpt Message</title>
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
            
            <form action="decryption.php" method="post">
                <h3>Decrypt your message </h3>
               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder=" The encrypted message" style="width: 100%; height: 150px;"></textarea>
                        </div> 

                        <div class="form-group">
                            <input type="text" name="txtKey" class="form-control" placeholder=" The key" >
                        </div> 
                        <div class="form-group">
                            <input type="submit" name="btnDecrypt" class="btnEncrypt" value="Decrypt Message" />
                        </div>
                    </div>
                </div>
            </form>
            <div class="container">
                <div class="form-group">
                     <label for=""><b>The message sent is :</b></label>
                    <textarea name="txtMsg" rows="5" columns="30" class="form-control" placeholder=" <?php echo Decryption($message,$secret_key) ?>" style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>

            
            
                
        </div>

    </body>
</html>