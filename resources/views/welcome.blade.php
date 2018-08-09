<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Theme Made By www.w3schools.com - No Copyright -->
      <title>বিশ্বজোড়া পাঠশালা</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style type="text/css">
      <style>
         .container {
         padding: 80px 120px;
         }
        
      </style>
   </head>

     <form method="post" action="">
     @csrf 
   
    
              
               <div class="col-md-8">
                  <div class="row">
                     <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                     </div>
                   
                  </div>
            <input class="form-control"  id="sms" name="sms" placeholder="Message" type="text" required>
                  <br>
                  <div class="row">
                     <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="submit">Send</button>
                     </div>
                  </div>
               </div>

         
   </form>
   </body>
</html>
