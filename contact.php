<?php 
    include_once('connection.php');
    $query_post = "select * from categories order by total_post_views desc ";
    $result_post = mysqli_query($con,$query_post) or die(mysqli_error($con));

     extract($_REQUEST);
    if(isset($_REQUEST['btnsubmit'])){
        $query = "insert into contact_msg values(NULL,'$user_email','$user_name','$msg',now(),'sent','','',NULL,'no')";
        mysqli_query($con,$query) or die(mysqli_error($con));
        header('location:contact.php?success=true');
    }
    include_once('header.php');
   

?>
        
       
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="contact-form">
                            <form method="post" action="" > 
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input name="user_name" type="text" class="form-control" placeholder="Your Name" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" name="user_email" class="form-control" placeholder="Your Email" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <textarea class="form-control" name="msg" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div><button type="submit" class="btn" name="btnsubmit" >Send Message</button>  </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <h3>Get in Touch</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In condimentum quam ac mi viverra dictum. In efficitur ipsum diam, at dignissim lorem tempor in. Vivamus tempor hendrerit finibus.
                            </p>
                            <h4><i class="fa fa-map-marker"></i>123 News Street, NY, USA</h4>
                            <h4><i class="fa fa-envelope"></i>info@example.com</h4>
                            <h4><i class="fa fa-phone"></i>+123-456-7890</h4>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        
    <?php include_once('footer.php') ?>