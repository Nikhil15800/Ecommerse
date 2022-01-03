<?php
require "extra/db_connect.php"; 
require "extra/nav.php";
?>

<!doctype html >
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <title>Home</title>
          </head>
          <body>
            <?php
            //select query from database ;
            $sql = "SELECT * FROM `stock`";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_num_rows($result);
            //echo ($row);
            //echo "Record found form database : <br>";

if($row>0){?>

    <div style = 'display:flex'>
    <?php while($row = mysqli_fetch_assoc($result)) {?>
      <div class='card' style='width: 18rem; margin-left: 20px; margin-top:10px; '>
        <img src= <?php echo $row['image'];?> width="100" height="250" class='card-img-top' alt='...'>
        <div class='card-body'>
          <h5 class='card-title'> <?php echo $row['product'];?> </h5>
          <p class='card-text'> <h6>category : </h6> <?php echo $row['category'];?> </p>
          <p class='card-text'> <h6>Price : </h6> <?php echo $row['price'];?> <h6>Rupee</h6> </p>
          <p><?php echo $row['sno'];?></p>
          <a href='/ecommerse/order.php' class='btn btn-primary'>BUY</a>
          <a href='/ecommerse/cart.php' class='btn btn-primary'>Add Cart</a>
        </div>
      </div>     
<?php
    }
}
else{
  echo"no";
}
?>
</div>

                  <!-- Optional JavaScript -->
                  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                </body>
              </html>