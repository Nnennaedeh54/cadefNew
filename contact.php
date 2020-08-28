<?php require ('header.php'); ?>
				  
		<div class="container">
			<div class="row">
				<div class="col-lg-5 jumbotron">
					<h3><strong>CONTACT CADEF</strong></h3>
                    
                            
                       <p><span class="glyphicon glyphicon-map-marker" style="font-size: 24px;"></span>
                          &nbspPlot 7 Block 77c CMD ROAD, Magodo GRA Phase II, &nbspIkeja Lagos</p> 
                        
                        
                           <p><span class="fa fa-phone-square" style="font-size:24px"></span>&nbspCall +234-8170429830, 08170429836</p> 
                            <p><span class="fa fa-envelope-square" style="font-size:24px"></span>&nbspEmail: info@cadefng.org</p>
                           
                        
                    
					
					
					
				</div>
				<div class="col-md-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.2209938832975!2d3.362961114266882!3d6.619445623878178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93b0c6d40107%3A0xa388b55838bbb2f5!2s7+C+M+D+Rd%2C+Ikosi+Ketu%2C+Ikeja!5e0!3m2!1sen!2sng!4v1558001615361!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					
				</div>

        
        </div>
        
                    
                </div>
			</div>
		</div>
        <div class="container">
    <div class="row">
<div class="col-xs-12 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <h2><strong>File a complaint</strong></h2>
                        </div>
                        
                        <div class="portfolio-info">
                            <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "cadef";

                                $conn = mysqli_connect($servername, $username, $password, $dbname);

                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $name = $_POST["name"];
                                    $email = $_POST["email"];
                                    $subject = $_POST["subject"];
                                    $description = $_POST["description"];

                            // $to ="nnennaedeh54@gmail.com";
                            // $subject = "subject";
                            // $message = "Description";
                            // $header = "From: obitogod@gmail.com" . "\r\n";
                            
                            // $retval = mail($to, $subject, $message, $header);
                            // if($retval==true) {
                            //  echo "message sent succesful";
                            // } else{
                            //  echo "message could not be sent";
                            // }
                            


                                    $sql = "INSERT INTO complaint(name, email, subject, description, date_entered)
                                    Values
                                    ('$name', '$email', '$subject', '$description', NOW())";

                                

                                    if (mysqli_query($conn, $sql)) {
                                        ?>
                                        <div class="alert alert-success alert-dismissable" style="margin:20px">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                          <h4>  <i class="icon fa fa-check"></i> Success!</h4>
                                            Put any message/complaint here
                                        </div>
                                    <?php
                                    } else
                                     { ?>
                                        <div class="alert alert-danger alert-dismissable" style="margin:20px">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                          <h4>  <i class="icon fa fa-times"></i> Error!</h4>
                                            Error check your form for correction
                                        </div>
                                    <?php
                                    }
                                }
                            ?>
                            
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name" required="">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" class="form-control" id="email"name="email" required="">
                                </div>

                                <div class="form-group">
                                    <label for="subject">Subject:</label>
                                    <input type="text" class="form-control" name="subject" required="">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control" rows="5" id="description"  name="description" required=""></textarea>
                                </div>
                                  
                                  
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


		<!-- <section class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="contact-page-detail" style="margin-bottom: 110px;padding-right: 37px;">
                            <div class="section-header-style-1">
                                <h2 class="section-title">
                                    Get in Touch
                                </h2>
                            </div>
                            <div class="infomation-box-1 background-cover" style="background: url(http://specstechafrica.com/storage/images/OVPun4dsZZt0YFbLyyVIuXS8EqZVMxwkbTiGxiDZ.jpeg);">
                                <div class="inner-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="item d-flex">
                                                <div class="icon color-secondary">
                                                    <i class="flaticon-phone-call"></i>             
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="lb">Phone</div>
                                                    +(234)8176573133
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="item d-flex">
                                                <div class="icon color-secondary">
                                                    <i class="flaticon-clock"></i>                                      
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="lb">Email</div>
                                                    info@specstechafrica.com
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="item d-flex">
                                                <div class="icon color-secondary">
                                                    <i class="flaticon-map-pin-silhouette"></i>                                     
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="lb">Location</div>
                                                    54 Okpara Avenue Enugu, Enugu State.
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5" style="margin-bottom: 110px;">
                        <div class="container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.652112690853!2d7.4848325144402565!3d6.438704625930397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a3d5f30dc9a9%3A0xd168d71be4bbceff!2s54+Okpara+Ave%2C+Enugu!5e0!3m2!1sen!2sng!4v1547034695496" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div> -->
            </div>

        
		<?php require('footer.php'); ?>	