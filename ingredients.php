<!DOCTYPE html>
<html>
<head>
  
    <link href="icon.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>
      <title>Cook IT</title>
      <!--Let browser know website is optimized for mobile-->
      <script type="text/javascript" src="jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize.min.js"></script>
      <style type="text/css">
        
  html {
    font-family: GillSans, Calibri, Trebuchet, sans-serif;
  }
        
      </style>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
</head>
<body style="background-image: url(test.png);">
    
    <form action="recipies.php" method="post" style="background-color: white;padding: 5%;margin:5%;opacity: 0.9">
    <h1 class="flow-text" align="center" style="font-size: 3rem;font-style: italic;">Cook IT</h1>
    <?php
    require 'config.php';
    $query = "select * from ingredients";
    //echo $query;
    if($result=mysqli_query($dbConn,$query))
    {
        while($row = mysqli_fetch_array($result))
        {
          ?>
    <p>
      <input type="checkbox" id="test<?php echo $row[0] ?>" value="<?php echo $row[1] ?>" name="ing[]"/>
      <label for="test<?php echo $row[0] ?>"><?php echo $row[1] ?></label>
    </p>
          <?php
        }
    }
    ?>
    <button id="checkBtn" class="waves-effect waves-light btn" style="margin-left: 40%">Click to continue</button>
    
    </form>
        
       <script type="text/javascript">
         $(document).ready(function(){
      $('.parallax').parallax();
      $('#checkBtn').click(function() {
      checked = $("input[type=checkbox]:checked").length;
      //alert(checked);
      if(checked<4) {
        alert("You must select at least 4 ingredients.");
        return false;
      }

    });
    });
       </script> 
</body>
</html>