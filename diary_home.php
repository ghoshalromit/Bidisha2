<html lang="en">
 <head>
  <title>My Account</title>
  <style media="screen">
    a{
      color: #000;
    }
    a:hover{
      color: #fff;
    }
    body{
        background: #fff url(images/board.jpeg) 0 0 no-repeat;
        background-attachment: fixed;
        background-size: 100% 100vh;
        background-image: url("4.jpg");
        background-position: center;
        /*width:100%;*/
        height:100%;

        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
    .btn{
      width: 100%;
      height:40px;
      background-color:lightblue;
    }
    .btn2{
      width: 100px;
      margin-left: 600px;

    }
    textarea {
      top:0em;
     vertical-align: top;
     margin-left: 350px;
     height:400px;
     width: 600px;
     resize:none;
 }
 input[type=date]
 {
      width:150px;
      height:50px;
      background-color:black;
      color:white;
      font-size: large;  
 }
  </style>
 </head>
 <body>
   <form class="" action="home.php" method="post">
          <div class="welcome">
             <input type="date" name="dtsearch" value="" style="width:100%;">
             <button type="submit" name="search" value="search" class="btn ripple">Search</button>
             <h2><font color="red">Welcome <?php echo strtoupper(@$_SESSION['name']); ?></font></h2>
           <h3><font color="blue" >Today is <?php echo date("d-m-Y"); ?></font></h3>
       <center><h1><font color="yellow" ><u>Give Today's Entry</u></font></h1></center><br><br>
        
        <textarea name="entry" class="inputlg"  rows = "20" cols = "60"><?=@$str?>
        
        </textarea>
        <br><br>
        <button type="submit" name="submit" value="Submit" class="btn ripple btn2">Submit</button>
        <button type="submit" name="logout" value="Submit" class="btn ripple btn2">Logout</button>
       </div>
     </div>
</form>
 </body>
 <script src="js/jquery-3.2.1.slim.js" charset="utf-8"></script>
 <script src="js/bootstrap.js" charset="utf-8"></script>
</html>
