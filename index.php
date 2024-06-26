
<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: Components/Login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css" />

    <script
      src="https://kit.fontawesome.com/b1d9e346ed.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- navbar  -->
    <header>
      <nav class="nav">
        <img class="logo" src="img/logo.svg" alt="img" />
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="Components/dash.php">DashBord</a></li>
          <li><a href="Components/About.html">About</a></li>
          <li><a href="Components/contract.html">Contract</a></li>
          <li><a href="Components/logout.php">Logout</a></li>
          <i class="fas fa-search"></i>
          <i class="fas fa-shopping-cart"></i>
        </ul>
      </nav>
    </header>
    <!-- header main part  -->
    <section class="home-sec">
      <br />

      <span class="HEADING">meow ,,</span> <br />

      <span class="HEADING">Welcome to pets care </span>

      <p class="head-p">
        Your one-stop destination for all things pet care. <br />
        Whether you have a playful pup, a curious cat, or any other furry,<br />
        feathered, or scaled friend, we’re here to provide expert advice,
        <br />comprehensive guides......<br />
        <button class="btn-grad">Learn More</button>
      </p>
    </section>
    <!-- header last part -->
    <section class="head-main-section">
      <div class="header-main-div">
        <div class="chaild-div">
          <p>Training Tips</p>
        </div>
        <div class="chaild-div">
          <p>Pet Products</p>
        </div>
        <div class="chaild-div">
          <p>Community</p>
        </div>
      </div>
    </section>
    <!-- main body part section-1 -->
    <section>
      <div class="body-sec-1">
        <div class="body-sec-1-child">
          <h1>What we do ?</h1>
          <br />
          <p>
            At Pawsitive Care, our mission is to enhance the well-being of pets
            and their owners by offering reliable, expert-driven information and
            resources. Our team of veterinarians, pet trainers, and experienced
            pet owners work tirelessly to bring you the latest in pet health,
            nutrition, training, and more. Because your pets deserve the best,
            and so do you.
          </p>
          <button class="btn-grad">About us</button>
        </div>
        <div class="body-sec-2-child">
          <img src="img/blog9.jpg" alt="" />
        </div>
      </div>
    </section>

    <!-- body-main-service -->

    <section class="card-sec">
        <h2>Our Services</h2>
        <div class="div-main-card">

            <div class="card">
                
                <img width="70%" src="img/1322531722-612x612.jpg" alt=""><br>
                <h1>Care</h1> 
            </div>
            <div class="card">
              <img width="70%" src="img/images (1).png" alt=""><br>
                <h1>Foods</h1>
            </div>
            <div class="card">
              <img width="70%" src="img/images222.jpg" alt=""><br>
                <h1>Training </h1>
            </div>
            <div class="card">
              <img width="70%" src="img/images.png" alt=""><br>
                <h1>Veterinary </h1>
            </div>
            
        </div>
    </section>

    <!-- just a pic in middle -->
    <section class="just">
        <img width="100%" src="img/banner-5-asset-1.webp" alt="img">
        <div class="jsut-div">
            <h1>
           Find best sercive & Descount from us. NEW!<br> Price <del class="del">20$</del> for all upto  <span class="grren"> 15$ </span> Only
        </h1>
    <button class="btn-grad">Buy Now</button></div>
    </section>
    <!-- section for breackdown -->
    <section>

        <div class="img-div">
          <p> Happy pets care and service <br>
           We’re here to help you and <br> your furry friends every step <br> of the way.</p>
        </div>

    </section>
<!-- from section -->
    <section>


        <div class="heading-from">
          <h1>
            Get in Touch
          </h1>
        </div>
        <!-- form main div -->
        <div class="from-main-div">

          <div>
         
          </div>
          

            <form class="form-container" id="pet-care-form" action="./DB/submit_form.php" method="POST">
              <h2 class="heading-from">Pet Care Form</h2>
             
                  <div class="form-group">
                      <label for="pet-name">Pet Name</label>
                      <input type="text" id="pet-name" name="pet-name" required>
                  </div>
          
                
                  <div class="form-group">
                      <label for="owner-name">Owner Name</label>
                      <input type="text" id="owner-name" disabled
                       name="owner-name" placeholder="<?php echo htmlspecialchars($_SESSION['uname']); ?>">
                  </div>
          
            
                  <div class="form-group">
                      <label for="pet-type">Pet Type</label>
                      <select id="pet-type" name="pet-type" required>
                          <option value="">Select Pet Type</option>
                          <option value="dog">Dog</option>
                          <option value="cat">Cat</option>
                          <option value="bird">Bird</option>
                          <option value="other">Other</option>
                      </select>
                  </div>
          
                
                  <div class="">
                      <label>Pet Gender :</label>
                      <input type="radio" id="male" name="gender" value="male" required>
                      <label for="male">Male</label>
                      <input type="radio" id="female" name="gender" value="female">
                      <label for="female">Female</label>
                  </div>
          
                
                  <div class="form-group">
                      <label for="age">Pet Age</label>
                      <input type="number" id="age" name="age" min="0" required>
                  </div>
          
                 
                  <div class="form-group">
                      <label for="service-duration">Service Duration (in days)</label>
                      <input type="number" id="service-duration" name="service-duration" min="0" required>
                  </div>
          
                 
                  <div class="form-group">
                      <label for="owner-address">Owner Address</label>
                      <textarea id="owner-address" name="owner-address" rows="3" required></textarea>
                  </div>
          
                  
                  <div class="form-group">
                      <label for="contact-number">Contact Number</label>
                      <input type="tel" id="contact-number" name="contact-number" required>
                  </div>
          
                  
                  <div class="form-group">
                      <button class="btn-grad" type="submit">Submit</button>
                  </div>
              </form>
          

          </div>

        </div>

    </section>

    <!-- client section -->
    <section class="client-sec">
      
      <div class="clients-section">
        <h2>Happy Clients</h2>
    
        <div class="client">
            <img src="img/979251076-612x612.jpg" alt="Client Photo">
            <div class="testimonial">
                <p>"Pawsitive Care has been incredible! Their training tips helped my dog become so well-behaved."</p>
                <div class="client-name">- Sarah J.</div>
            </div>
        </div>
    
  
        <div class="client">
            <img src="img/cats-dogs-peeking-sign-sized-web-cover_908985-53306.avif" alt="Client Photo">
            <div class="testimonial">
                <p>"The veterinary advice section provided the exact information I needed when my cat was sick. Thank you!"</p>
                <div class="client-name">- Michael B.</div>
            </div>
        </div>
    
        <div class="client">
            <img src="img/blog9.jpg" alt="Client Photo">
            <div class="testimonial">
                <p>"I love the product reviews! They helped me choose the best items for my pets. Highly recommended!"</p>
                <div class="client-name">- Emily R.</div>
            </div>
        </div>
    </div>
    <div class="">
      <img width="100%" src="img/o-1345473066-612x612.jpg" alt="img">
    </div>
    </section>

    <section>
      
<!-- Footer Section -->
<footer class="footer">

  <div class="footer-section">
      <h4>Quick Links</h4>
      <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact Us</a></li>
      </ul>
  </div>

  <div class="footer-section">
      <h4>Contact Us</h4>
      <ul>
          <li>Email: mdhabib71024@gmail.com</li>
          <li> rakib@gmail.com</li>
          <li>Phone: +880 01571024601</li>
          <li>Address:#123 Pet Street, Pet City, PC GUB</li>
      </ul>
  </div>


  <div class="footer-section">
      <h4>Follow Us</h4>
      <div class="social-icons">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      </div>
  </div>

  <div class="footer-description">
      <p>Pawsitive Care is dedicated to providing the best care and resources for your pets. From expert advice to comprehensive guides, we are here to support you and your furry friends every step of the way.</p>
  </div>
</footer>


<div class="copyright">
  <p>&copy; 2024 ,Md Habibullah, Rakib . All rights reserved.</p>
</div>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </section>
  </body>
</html>
