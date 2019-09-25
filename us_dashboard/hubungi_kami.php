<?php
include '../us_layout/us_dashboard.php';
echo'
    <title>Beranda - PAW Laundry</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>  
                body{
                    background-image:url("../img/gambar/bg_hub_kami.jpg");
                    background-attachment:fixed;
                    min-width:100%; min-height:100%;
                    position:fixed;
                    background-size: cover;
                    opacity: 0.8;
                    filter: alpha(opacity=20); 
                }
                .jumbotron{
                    background-size: 100% 100%;
                    height: calc(100%);
                    
                  }
            </style>
        <title>Contact Us </title>
    </head>
    <body>
        <div class="jumbotron min-vh-100  m-0  d-flex flex-column" text-light text-left">
                <div class="mt-5 text-center">
              
                    <h1 class="display-4"><font color="black">Hubungi Kami</h1>
                    <p class="lead">Jangan ragu untuk memeberi kritik dan saran yang<br>
                        membangun untuk meningkatkan pelayanan kami.<br>
                        We always ready to help you.</p>

                </div>
                
                <hr class="my-4">
             
                    <form class="container pt-2" data-spy="scroll" >
                    <div class="form-row justify-left-end">
                            <div class="form-group col-md-4 text-left col-centered">
                                <label for="inputName">*Name</label>
                                <input type="text" class="form-control" id="fullname" placeholder="Name" required="required">
                            </div>
                            <div class="form-group col-md-4 text-left col-centered">
                                <label for="inputEmail">*Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" required="required">
                            </div>
                    </div>
                       
                        <div class="form-row justify-left-end">
                            <div class="form-group col-md-8 text-left">
                                <label for="inputMessage">Message</label>
                                <textarea class="form-control" id="inputMessage" placeholder="Your Message for Us..." rows="3"></textarea>
                            </div>
                        </div>
                    
                    <div class="form-row justify-right-end">
                            <div class="form-group col-md-4 font-weight-light font-italic"></div>
                            <div class="form-group col-md-4 text-right">
                                <button type="submit" class="btn btn-secondary">Send</button>
                            </div>
                    </div>

                 
                    </form>
                    </div>
              
       
        

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>';
?>