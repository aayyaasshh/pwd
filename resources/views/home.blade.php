<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Kitchen</title>
  <link href="{{asset('css/home.css') }}" rel="stylesheet">
</head>
<body>

  <header class="header header-background">
    <h2>THE  KITCHEN</h2> 
    <div class="profile">
      <a href="profile.blade.php" style="text-decoration: none;">
        <div class="profile-details"></div>
        <img src="path/to/profile-pic.jpg" alt="Profile" class="profile-pic">
      </a>
    </div>
    <div class="search-container">
      <input type="text" id="search-bar" placeholder="Search...">
      <button onclick="searchNews()">Search</button>
    </div>
  </header>

  <main class="main">
    <section class="intro">
      <h1>Welcome to The Kitchen</h1>
      <p>Explore our latest menu items, recipes, and cooking tips!</p>
    </section>

    <section class="news">
      <h2>Temukan Resep Makanan</h2>
      <div class="news-container">
        <div class="news-item">
          <img src="path/to/dish1.jpg" alt="Dish 1">
          <h3>RESEP NASI GORENG RUMAHAN</h3>
          <a href="" class="btnn-back">read more</a>
        </div>

        <div class="news-item">
          <img src="path/to/dish2.jpg" alt="Dish 2">
          <h3>ANEKA RESEP SOTO AYAM</h3>
          <a href="" class="btnn-back">read more</a>
        </div>

        <div class="news-item">
          <img src="path/to/dish3.jpg" alt="Dish 3">
          <h3>CEMILAN MUDAH ALA RUMAHAN</h3>
          <a href="" class="btnn-back">read more</a>
        </div>

        <div class="news-item">
          <img src="path/to/dish3.jpg" alt="Dish 3">
          <h3>CEMILAN PRAKTIS</h3>
          <a href="" class="btnn-back">read more</a>
        </div>
        
        <div class="news-item">
          <img src="path/to/dish3.jpg" alt="Dish 3">
          <h3>RESEP AYAM KRISPI</h3>
          <a href="" class="btnn-back">read more</a>
        </div>
        
        <div class="news-item">
          <img src="path/to/dish3.jpg" alt="Dish 3">
          <h3>MAKANAN RINGAN</h3>
          <a href="" class="btnn-back">read more</a>
        </div>
        
        <div class="news-item">
          <img src="path/to/dish3.jpg" alt="Dish 3">
          <h3>LAUK ALA RUMAHAN</h3>
          <a href="" class="btnn-back">read more</a>
        </div>

        <div class="news-item">
          <img src="path/to/dish3.jpg" alt="Dish 3">
          <h3>CEMILAN MUDAH TOMBOYKUN</h3>
          <a href="" class="btnn-back">read more</a>
        </div>
        
        <div class="news-item">
          <img src="path/to/dish3.jpg" alt="Dish 3">
          <h3>CEMILAN PEDES</h3>
          <a href="" class="btnn-back">read more</a>
        </div>

      </div>
    </section>
  </main>

  <!-- <footer class="footer">
    <p>&copy; 2024 The Kitchen. All rights reserved.</p>
  </footer> -->

</body>
</html>
