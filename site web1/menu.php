<?php include "include/fonctions.php";
       $pagetitre= 'menu';
        ?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <mata charset="UTF-8">
        <title>  <?php getTitle()?></title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="themes/style.css">
        <link rel="stylesheet" href="themes/style-menu.css">
        <link rel="stylesheet" href="themes/style-contact.css">
       
    </head>
    <body  style="background-image: url('ice-cream/marbre.jpg')  no-repeat;
    background-size: cover;">
      <!------------nav-bar----------->
        <nav class="navbar">
             <div class="max-width">
                 <div class="logo"><a href="#">Ice<span>Cream.</span></a></div>
                  <ul class="menu">
                    <li><a href="#">our concept</a></li>
                      <li><a href="menu.php">menu</a></li>
                      <li><a href="prm.php">promotions</a></li>
                       
                      <li><a  href="#"><span>order online </span></a></li>
                      
                      
                  </ul> 
                  
                  <div class=menu-btn>
                      <i class="fas fa-bars"></i>
                  </div> 
             </div>
        </nav>

        
        
        <br> <br> <br> <br><br> <br><br> <br> 
        <div class=menuu>
            <img src="https://kuto.ca/wp-content/themes/kuto/assets/dist/images/zigziag.png" alt >
            <div class="Menu">Menu</div>  
        </div>

       
        <div class="titre1">ice cream</div>
    <br> <br>
    <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="ice-cream/im1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title">vanilla ice cream with pieces of chocolate</h2>
              <p class="card-text"> </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="ice-cream/im2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title">chocolate and hazelnut ice cream</h2>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="ice-cream/im3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title">raspberry vanilla ice cream</h2>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
       
      </div>
     <br> <br>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="ice-cream/im4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title">strawberry ice cream</h2>
              <p class="card-text"> </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="ice-cream/im5.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title">caramel ice cream with almonds</h2>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="ice-cream/im6.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title">a peach ice cream</h2>
              <p class="card-text"> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br> <br>
        <div class="titre2">cake</div>
        <br> <br>
        <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="ice-cream/im7.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title">chocolate and mango cake</h2>
              <p class="card-text"> </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="ice-cream/im8.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title">cocoa and hazelnut cake</h2>
              <p class="card-text"> </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="ice-cream/im9.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title">strawberry cake</h2>
              <p class="card-text"> </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="ice-cream/im10.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title">lemon cake</h2>
              <p class="card-text"> </p>
            </div>
          </div>
        </div>
       
      </div>
    </div>
        


    
    <script src="script.js"></script>
    </body>
</html>