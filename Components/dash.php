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
        <style>
            .card {
               
            border: 2px solid azure;
            border-radius: 10px;
            padding: 20px;
           
            margin-bottom: 20px;
            position: relative;
            background-color:white ;
            box-shadow: 8 10px 12px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            margin-top: 0;
            color: #333;
        }

        .card p {
            margin: 10px 0;
            color: #666;
        }

        .btn-container {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .btn-edit,
        .btn-delete {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: 600;
            color: #fff;
        }

        .btn-edit {
            background-color: #007bff;
            margin-right: 10px;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-edit:hover,
        .btn-delete:hover {
            background-color: darken(currentColor, 10%);
        }
        .h1{
            text-align: center;
            margin: 20px;
            padding: 20px;
        }

    </style>
    </header>

    <h1 class="h1">Welcome To Dashboard, <br> <?php echo htmlspecialchars($_SESSION['uname']); ?>!</h1>

    <section>
    <div id="data-container">
       
    </div>

   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
          
            function fetchData() {
                $.ajax({
                    url: '../DB/fetch_data.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                      
                        if(data.length > 0) {
                            var html = '';
                            data.forEach(function(item) {
                                html += '<div class="card">';
                                html += '<h3>Pet Name: ' + item.pet_name + '</h3>';
                                html += '<p>Owner: ' + item.owner_name + '</p>';
                                html += '<p>Pet Type: ' + item.pet_type + '</p>';
                                html += '<p>Gender: ' + item.gender + '</p>';
                                html += '<p>Age: ' + item.age + '</p>';
                                html += '<p>Service Duration: ' + item.service_duration + ' days</p>';
                                html += '<p>Owner Address: ' + item.owner_address + '</p>';
                                html += '<p>Contact Number: ' + item.contact_number + '</p>';
                                html += '<button class="btn-edit" data-id="' + item.id + '">Edit</button>';
                                html += '<button class="btn-delete" data-id="' + item.id + '">Delete</button>';
                                html += '</div>';
                            });
                            $('#data-container').html(html);
                        } else {
                            $('#data-container').html('<p>No data available</p>');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }

          
            fetchData();
       
            
            $(document).on('click', '.btn-edit', function() {
                var id = $(this).data('id');
                
                window.location.href = '../DB/edit.php?id=' + id;
            });

           
            $(document).on('click', '.btn-delete', function() {
                var id = $(this).data('id');
                
                $.ajax({
                    url: '../DB/delete.php',
                    type: 'POST',
                    data: { id: id },
                    success: function(response) {
                       
                        fetchData();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>

   
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
