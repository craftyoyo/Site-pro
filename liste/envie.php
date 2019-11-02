<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.3.23/plyr.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.3.23/plyr.polyfilled.min.js">
  </script>
  <title>Things list</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">description</th>
              <th scope="col">Price</th>
              <th scope="col">Link</th>
            </tr>
          </thead>
          <tbody>
            <?php
        $con=mysqli_connect("127.0.0.1","","","");
        // Check connection
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con,"SELECT * FROM envie");


$sum = 0;
        while($row = mysqli_fetch_array($result))
        {
           $sum += $row['Prix'];
        echo "<tr>";
        echo "<th scope='row'>"  . $row['id'] . "</th>";
        //echo "<td>" . $row['url'] . "</td>";
        echo "<td>" . $row['txt'] . "</td>";
        echo "<td>" . $row['Prix'] . "€</td>";
        echo "<td><a href='". $row['url'] ."'>link</a></td>";
        echo "</tr>";
        }


echo "  </tbody>
  </table>";
$sous = 492.56;
$tot = $sous - $sum;
        echo "Total: ". $sum ."€ </br>";
        //echo "$sous - $sum =  $tot";
        //mysqli_close($con);

        ?><br><?php header("Content-Type: text/html; charset=utf-8"); ?>

            <?php
        session_start();
    
        $succes = '';
        $erreur = '';
          if(isset($_POST['usernameadm']) AND isset($_POST['password'])){
            $username_post = $_POST['usernameadm'];
            $password_post = $_POST['password'];
            $usernameadm = '';
            $password = '';
            if($username_post == $usernameadm){
              if($password_post == $password){
                $_SESSION['usernameadm'] = $usernameadm;
                $_SESSION['id'] = 98562874562555648633534121355435;
                echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
              }else{
                $erreur.= 'Wrong username or password.';
              }
            }else{
              $erreur.= 'Wrong username or password.';
            }
          }
          if(isset($_GET['deconnexion'])){
            session_destroy();
            echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
          }
        
        
        
        ?>
            <?php if(isset($erreur) AND $erreur != ''){ ?>
            <div style="background-color:red;color:white;padding:10px;">
              <?= $erreur ?>
            </div>
            <?php } ?>
            <?php if(!isset ($_SESSION['usernameadm']) AND !isset ($_SESSION['id'])){ ?>

            <form method="post" action="envie.php">
              <input name="usernameadm" type="text" placeholder="Username" required />

              <input name="password" type="text" placeholder="Password" required />

              <button type="submit" style="visibility: hidden;">Connexion</button>
            </form>
            <?php }else{ ?>
              <div class="container">
            <div class="row">
            <div class="col-md-3">
     
            <h5>Add things</h5>
            <form id="form" action="insert.php?bdd=envie&loc=envie.php&safe=" method="post">
              <p>

                <input type="text" name="first_name" id="firstName" placeholder="full url to the product">
              </p>
              <p>

                <input type="text" name="last_name" id="lastName" placeholder="Short decription">
              </p>
              <p>

                <input type="text" name="prix" id="prix" placeholder="price without €">
              </p>

              <input type="submit" value="Submit">
            </form>
</div>
    

            
            
            
          <div class="col-md-3">
          <h5>Delete things</h5>
        
            <?php
   
        // Check connection
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con,"SELECT * FROM envie");



        while($row = mysqli_fetch_array($result))
        {
          echo '<ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          <a href=\'delete.php?bdd=envie&id='  . $row['id'] . '&loc=envie.php&safe=JKH7686\'>Remove '  . $row['txt'] . '</a>
           
          </li>
         
        </ul>';
      //echo "<ul>";
       // echo '<li><a href=\'delete.php?id='  . $row['id'] . '&loc=index.php&safe=JKH7686\'>Delete row '  . $row['id'] . '</a></li>';
         // echo "</ul>";
        }


?>
  </div>
        </div>
        </div>
            <a href="envie.php?deconnexion=1" class="btntheme" title="Déconnexion"><button type="button" class="btn btn-danger">LogOut</button></a>
           
            <?php } ?>
</body>

</html>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
