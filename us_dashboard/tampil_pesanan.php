<?php
session_start();
//if($_SESSION['isLogin'])
    include "../us_layout/us_dashboard.php";
    //$user=$_SESSION['user'];

    function active_radio_button($value,$input){
        $result =  $value==$input?'checked':'';
        return $result;
    

echo'
    <title>List Pesanan - PAW Laundry</title>
    <div class="container">
            <div class="form-row mt-5 justify-content-center">
                <div class="form-group col-md-10">
                    <h1 class="text-center">Pesanan Anda</h1> 
                </div>
            </div>
            
   </body>
</html>';
?>