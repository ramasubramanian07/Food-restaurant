<header class="header">

   <div class="flex">

      <a href="#" class="logo">Master Health</a>

      <nav class="navbar">
         <!--a href="login.php">add products</a-->
         <a href="products.php">view products</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>
      <nav class="navbar">
         <a href="index.php">Back</a>
      </nav>

   </div>

</header>