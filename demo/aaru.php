<!DOCTYPE html>
<html>
    <head>
        <title> nagar palika complaint </title>
        <link rel="stylesheet" href="style.css">
    </head>
         <body>
            <div class="contact-title">
                <h2>complainant  registration</h2>
            </div>
           
            <div class="contact-form" >
                <form id="contact-form" method="post" action="gmail.php">
                    <input name="name" type="text" class="form-control" placeholder=" your name" required><br>
                    <input name="email" type="email" class="form-control" placeholder=" your Email" required><br>
                    <input name="contect" type="number" class="form-control" placeholder=" contect no." required><br>
                    <input name="address" type="text" class="form-control" placeholder=" address" required><br>
                    <input name="ward" type="number" class="form-control" placeholder=" ward no." required><br>
                    <input name="pin" type="number" class="form-control" placeholder="pin code " required><br>
                    <textarea name="massage" class="form-control" placeholder="complaint details" row="4" required></textarea><br>
                    <input name="send" type="submit" class="form-control submit" value=" SEND MASSAGE">
                 </form>
            </div>
         
         </body>
</html>