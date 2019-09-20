<?php
include '../dashboard.php';
?>

<?php
if (isset($_GET['id'])) {
    include('../db.php');
    $data = $_GET['id'];
}

$query = mysqli_query($con, "SELECT * FROM data_pengguna WHERE id='$data'") or die(mysqli_error($con));
$data = mysqli_fetch_assoc($query);
?>
<link rel="stylesheet" href="../css/style.css">
<div id="dashboardData">
    <form action="../proses_user/edit_user.php"  method="post" style="width: 25%" >
        <fieldset>
                <table>
                    <legend>
                     Ubah Data Akun
                    <tr>
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        <td>Nama<br> <input type="text" id=inputtext name="name" value="<?php echo $data['name']; ?>"></td>
                        <td></td>
                        <td>Email<Br> <input type="text" id=inputtext name="email" value="<?php echo $data['email']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Username<Br> <input type="text" id=inputtext name="username" value="<?php echo $data['username']; ?>"></td>
                        <td></td>
                        <td>Password<Br> <input type="text" id=inputtext name="password" value="<?php echo $data['password']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir<Br> <input type="text" id=inputtext name="tanggal_lahir" placeholder="yyyy/mm/dd" value="<?php echo $data['tanggal_lahir']; ?>"></td>
                        <td></td>
                        <td>Nomor Telepon<Br> <input type="text" id=inputtext  maxlength="15" minlength="11" name="telp" value="<?php echo $data['telp']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin
                        <?php
                        if ($data['jenisKelamin'] == 0) {
                            echo '<input type="radio" name="jenis_kelamin" id="male" value="0" checked="checked">Laki-Laki
                                    <input type="radio" name="jenis_kelamin" id="female" value="1" >Perempuan<br><br>';
                        } else if ($data['jenisKelamin'] != 0) {
                            echo '<input type="radio" name="jenis_kelamin" id="male" value="0" >Laki-Laki
                                    <input type="radio" name="jenis_kelamin" id="female" value="1" checked="checked">Perempuan<br><br>';
                        } else {
                            echo '<input type="radio" name="jenis_kelamin" id="male" value="0">Laki-Laki
                                    <input type="radio" name="jenis_kelamin" id="female" value="1" >Perempuan<br><br>';
                        }
                        ?></td>
                    </tr>
                    <tr>
                        <td><input id=submit class="inputButton" type="submit" name="store" value="Konfirmasi"></td>
                    </tr>
                    </legend>
                </table>
         </fieldset>
    </form>
</div>
</div>
</body>
<script src="../script.js"></script>
<script>
    var elm = document.getElementById("ubahUser").classList.add("isActive")
</script>
</html>        
