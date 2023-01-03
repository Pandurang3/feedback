<?php include 'inc/header.php'; ?>

<?php
  // $feedback = [
  //   [
  //     'id' => '1',
  //     'name' => 'Beth Williams',
  //     'email' => 'beth@gmail.com',
  //     'body' => 'PHP is Ok language to learn'
  //   ],
  //   [
  //     'id' => '2',
  //     'name' => 'walt Williams',
  //     'email' => 'walt@gmail.com',
  //     'body' => 'PHP is easy language to learn'
  //   ],
  //   [
  //     'id' => '3',
  //     'name' => 'Bill Williams',
  //     'email' => 'bill@gmail.com',
  //     'body' => 'PHP is hard language to learn'
  //   ],
  // ];


  //mysqli style
  // $sql = 'SELECT * FROM feedback';
  // $result = mysqli_query($conn, $sql);
  // $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //PDO style
  $sql = "SELECT * FROM feedback";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

?>
   
    <h2>Past Feedback</h2>

    <?php if(empty($stmt)): ?>
      <p class="lead mt3">There is no Feedback</p>
    <?php endif; ?>  

    <?php foreach($stmt as $item): ?>
     
      <div class="card my-3 w-75">
        <div class="card-body text-center">
         <?php echo $item['body']; ?>
         <div class="text-secondary mt-2">
            By <?php echo $item['id'] . " " . $item['name']; ?> On <?php echo $item['date']; ?>
         </div>
        </div>
        <div class="row">
          <div class="col-sm-12 text-center mb-3">
            <button>Edit</button>
            <button>DELETE</button>
          </div>
        </div>
      </div>

    <?php endforeach;  ?>

   

<?php include 'inc/footer.php'; ?>
