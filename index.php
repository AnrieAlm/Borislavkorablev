<?php include 'header.php'; ?>


<section id="start-info">
    <ul>
        <li><img class="hover-effect" src="logo.png" width="50" /></li>
        <li><h1>BORISLAV KORABLEV</h1></li>
    </ul>
</section>

<section id="slider-full">
  <section class="write">
    <div class="write-content"> 
      <h2>Card Title</h2>
      <p>This is the content of the card..</p>
    </div>
  </section>
  <section class="slider">
    <figure>
      <img src="beer3.png" alt="Beer 3" />
      <img src="beer4.png" alt="Beer 4" />
    </figure>
  </section>
</section>
<section id="slider-full2">
  <section class="write">
    <div class="write-content"> 
      <h2>Card Title</h2><br>
      <p>This is the content of the card..</p>
    </div>
  </section>
  <section class="slider reverse">
    <figure>
      <img src="beer3.png" alt="Beer 3" />
      <img src="beer4.png" alt="Beer 4" />
    </figure>
  </section>
</section>



<section id="categories">
    <h1>Categories</h1>
    <div class="navbar">
      <label><input type="checkbox" value="digital"> Digital Design</label>
      <label><input type="checkbox" value="packaging"> Packaging</label>
      <label><input type="checkbox" value="editorial"> Editorial Design</label>
      <label><input type="checkbox" value="prepress"> Pre-press</label>
      <label><input type="checkbox" value="marketing"> Marketing & Advertising</label>
      <label><input type="checkbox" value="print"> Print Design</label>
      <label><input type="checkbox" value="illustration"> Illustration</label>
      <label><input type="checkbox" value="typeface"> Typeface Design</label>
    </div>
</section>

<section class="container">
    <div class="grid-item">
      <img src="beer.png" alt="Beer 1">
      <span>Image 1</span>
    </div>
    <div class="grid-item">
      <img src="beer4.png" alt="Beer 2">
      <span>Image 2</span>
    </div>
    <div class="grid-item">
      <img src="beer2.png" alt="Beer 3">
      <span>Image 3</span>
    </div>

    <!-- Image 4: Full height, Column 3 -->
    <div class="grid-item ">
      <img src="beer2.png" alt="Beer 4">
      <span>Image 4</span>
    </div>

    <!-- Image 5: Row 1, Column 4 -->
    <div class="grid-item ">
      <img src="beer.png" alt="Beer 5">
      <span>Image 5</span>
    </div>

    <!-- Image 6: Row 2, Column 4 -->
    <div class="grid-item ">
      <img src="beer4.png" alt="Beer 6">
      <span>Image 6</span>
    </div>
      <!-- Image 7: Row 2, Column 2 -->
    <div class="grid-item ">
      <img src="beer4.png" alt="Beer 7">
      <span>Image 7</span>
    </div>

</section>
<!-- Login Modal -->
<div id="loginModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Admin Login</h2>
    <form method="POST" action="login.php">
      <label>Username</label>
      <input type="text" name="username" required>

      <label>Password</label>
      <input type="password" name="password" required>

      <button type="submit">Login</button>
    </form>
    <p id="loginError" style="color: red; margin-top: 10px;"></p>
  </div>
</div>
<script src="layout.js"></script>
<?php include 'footer.php'; ?>
