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

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
</head>
<body style="background-image: url(test.png);">
  
    <table style="background-color: white;margin:5%;opacity: 0.9">
    <thead>
      <tr>
        <th>Recipie</th>
        <th>URL</th>
      </tr>
    </thead>
    <tbody>
    <?php
    require 'config.php';
    $query = "select * from Recipies";
    $choices = $_POST['ing'];
    // foreach ($choices as $c)
    // {
    //   echo "<br>".$c;
    // }
    // echo "hey there!      ".in_array("Turmeric ",$choices)." <br>     ";
    if(isset($_POST['ing']))
    {if($result=mysqli_query($dbConn,$query))
    {
        while($row = mysqli_fetch_array($result))
        {
          $rec =0;
          $sel = 0;
          for($i=2;$i<12;$i++)
          {
            //echo "<br>".$row[$i];
            $fld = mysqli_fetch_field_direct($result,$i)->name;
            //echo $fld;
            if($row[$i]==1)
            {
               $rec++;
               // echo $fld."   ".in_array($fld,$choices)."<br>";
              if(in_array($fld,$choices)){
                $sel++;
               //echo "<br>".$s;
              }
            }
          }
          // echo $sel."  ".$rec;
          if($sel/$rec*100>=80)
          {
          ?>
    <tr>
      <td><?php echo $row[0] ?></td>
      <td><a href="<?php echo $row[1] ?>"><?php echo $row[1] ?></a></td>
    </tr>
          <?php
        }
      }
    }
    }
    ?>
    
    </tbody>
    </table>
        
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