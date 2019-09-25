<?php
include '../us_layout/us_dashboard.php';
echo'

    <title>Contact Us </title>
        <div class="mt-5 text-center">
        
            <h1 class="display-4 text-dark" style="margin-top:7%">Hubungi Kami</h1>
            <p class="lead">Jangan ragu untuk memberi kritik dan saran yang<br>
                membangun untuk meningkatkan pelayanan kami.</p>

        </div>
                
        <hr>
            <form class="container pt-4" data-spy="scroll" action="../proses_user/contact_email.php" method="post">
            <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 text-center col-centered">
                        <label for="fullname">*Name</label>
                        <input type="text" class="form-control text-center" name="fullname" placeholder="Name" required="required">
                    </div>
                    <div class="form-group col-md-4 text-center col-centered">
                        <label for="Email">*Email</label>
                        <input type="email" class="form-control text-center" name="email" placeholder="Email" required="required">
                    </div>
                </div>
                
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-8 text-center">
                        <label for="message">Message</label>
                        <textarea class="form-control text-center" name="message" placeholder="Your Message for Us..." rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 font-weight-light font-italic">
                    </div>
                    <div class="form-group col-md-5 text-center">
                        <button type="submit" class="btn btn-secondary">Send</button>
                    </div>
                </div>
            </form>
   </body>
</html>';
?>