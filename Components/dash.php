<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: Login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css" />
    <script src="https://kit.fontawesome.com/b1d9e346ed.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="nav">
            <img class="logo" src="../img/logo.svg" alt="img" />
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="contract.html">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
                <i class="fas fa-search"></i>
                <i class="fas fa-shopping-cart"></i>
            </ul>
        </nav>
    </header>

    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['uname']); ?>!</h1>

    <section>
        <!-- Your main dashboard content goes here -->
    </section>

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
                <li>Email: rakib@gmail.com</li>
                <li>Phone: +880 01571024601</li>
                <li>Address: #123 Pet Street, Pet City, PC GUB</li>
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
        <p>&copy; 2024, Md Habibullah, Rakib. All rights reserved.</p>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
