<?php
include '../us_layout/us_dashboard.php';
echo'
    <title>Contact Us </title>
        <div class="jumbotron min-vh-100  m-0  d-flex flex-column" text-light text-left">
                <div class="mt-5 text-center">
              
                    <h1 class="display-4">Hubungi Kami</h1>
                    <p class="lead">Jangan ragu untuk memberi kritik dan saran yang<br>
                        membangun untuk meningkatkan pelayanan kami.</p>

                </div>
                
                <hr class="my-4">
             
                    <form class="container pt-2" data-spy="scroll" action="../proses_user/contact_email.php" method="post">
                    <div class="form-row justify-content-center">
                            <div class="form-group col-md-4 text-left col-centered">
                                <label for="fullname">*Name</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Name" required="required">
                            </div>
                            <div class="form-group col-md-4 text-left col-centered">
                                <label for="email">*Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                            </div>
                    </div>
                       
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-8 text-left">
                                <label for="message">Message</label>
                                <textarea class="form-control" name="message" placeholder="Your Message for Us..." rows="3"></textarea>
                            </div>
                        </div>
                    
                    <div class="form-row justify-content-center">
                            <div class="form-group col-md-4 font-weight-light font-italic"></div>
                            <div class="form-group col-md-4 text-right">
                                <button type="submit" class="btn btn-secondary">Send</button>
                            </div>
                    </div>

                 
                    </form>
                    </div>
    </body>
</html>';
?>