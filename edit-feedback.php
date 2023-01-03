<?php include 'inc/header.php'; ?>

<?php
  //PDO style
  $id = 6;
  $sql = "SELECT * FROM feedback WHERE id = '".$id."'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
    if($stmt->rowCount()>0){
        foreach(($stmt->fetchAll()) as $key => $row){

        
?>
   
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null; ?> " id="name" value="<?php echo $row["name"]; ?>" name="name" placeholder="Enter your name">
        <div class="invalid-feedback">
          <?php echo $nameErr; ?> 
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo $emailErr ? 'is-invalid' : null; ?>" id="email" value="<?php echo $row["email"]; ?>" name="email" placeholder="Enter your email">
        <div class="invalid-feedback">
          <?php echo $emailErr; ?> 
        </div>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <input type="text" class="form-control <?php echo $bodyErr ? 'is-invalid' : null; ?>" id="body" value="<?php echo $row["body"]; ?>" name="body" placeholder="Enter your feedback">
        <div class="invalid-feedback">
          <?php echo $bodyErr; ?> 
        </div>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>

   <?php
        }
    }else{
        echo "no data found";
    }

   ?>

<?php include 'inc/footer.php'; ?>
