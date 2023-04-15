<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
 </head>

   <h1>Blood Donation Camp</h1>
   <body bgcolor="F88917">
       <div><h2>Registration Form</h2></div>
       <form action="connect.php" method="POST">
        <label for="user">Name:</label><br>
        <input type="text" name="name" id="name" required />

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required />
       
        <label for="phone">Phone:</label><br>
        <input type="text" name="phone" id="phone" required />

        <label for="bgroup">Blood Group: </label>
        <input type="text" name="bgroup" id="bgroup" required />

        <input type="submit" name="submit" id="submit" />                   />
     </form> 
   </body>
</html>