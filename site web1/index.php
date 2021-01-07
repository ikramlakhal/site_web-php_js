<?php 
                     //*******************code PHP*************************//
       session_start();

       include "include/fonctions.php";
       $pagetitre= 'Ice cream';

       include 'connecterbd.php' ;    
       if($_SERVER['REQUEST_METHOD'] =='POST'){
         //obtenir des variables du formulaire

       $UNAME=$_POST['username'];
       $ADRES=$_POST['email'];
       $MSG=$_POST['msg'];

        //insérer des informations utilisateur dans les données
       $stmt= $con->prepare("INSERT INTO contact(nomUser,email,message)  VALUES (:unam,:adres,:msg) ");
       $stmt->execute(array(
            'unam'=>$UNAME ,
            'adres'=>$ADRES,
            'msg'=>$MSG ));

       }
 ?>      


<!DOCTYPE html>
<html lang="en">
    <head>
        <mata charset="UTF-8">
        <title>  <?php getTitle()?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="themes/style-contact.css">
        <link rel="stylesheet" href="themes/style.css">
    </head>
    <body>
         <!--------------------------------------***nav-bar***--------------------------------->
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
         
        <section class="home" id="home" style=" background: url('ice-cream/ice-cream-cones.jpg') no-repeat ;
        background-size:cover ;">
           <div class="max-width">
              <div class="home-content">
                   <div class="text-2"> <span>Be kind</span> </div>
                   <div class="text-1"> to your body, others and</div>
                   <div class="text-3"> the planet</div>
        <!-------------------------****contact****--------------------------------------->
                 
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Contact</button>

                 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                 <div class="modal-content">
                 <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Contact US</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                 <form method='POST' action="<?php echo $_SERVER['PHP_SELF'] ?>">
                 <div class="mb-3">
                 <label for="recipient-name" class="col-form-label"> your full name :</label>
                 <input type="text" class="form-control" id="recipient-name" name="username" required=required>
                 </div>
                 <div class="mb-3">
                <label for="recipient-name" class="col-form-label">E-mail :</label>
                <input type="text" class="form-control" id="recipient-name" name="email" required=required>
                </div>
                <div class="mb-3">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message-text" name="msg" required=required></textarea>
                </div>
                </form>
                </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Send message</button>
               </div>
               </div>
               </div>
               </div>
               </div>
               </div>
           
 
        </section>
      <!------------------------------------------------------------------------------------------->
        <!----------------------------------- ***our concept*** ---------------------------------------------> 
        <br> <br>
        <div class="about">All natural vegan Ice cream & Dessert</div>
            <p>Ice cream shouldn't be a guilty pleasure.
                 It should just be pure,unadulterated goodness . 
                 That's why we use all-natural, local ingredients .
                  Now you can have all the rich taste,perfectly blended flavors,
                  and creamy deliciousness, but with far less lactose 
                  and far more calcium.               
            </p>  
        <br>
        <div class="img">
        <img src="ice-cream/image3.png" class="image2" alt=" ">  
        </div>

         




        
         <script src="script.js"></script>
        

    </body>
</html> 