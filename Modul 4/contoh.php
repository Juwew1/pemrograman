        <?php
        if (isset($_POST["submit"])) {
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $password = $_POST["pas"];
    
            $errors = array();
    
            if (empty($nama)) {
                array_push($errors, "Nama tidak boleh kosong");
            } else {
                echo "<div class='alert alert-success'>Nama sudah diisi</div>";
            }
    
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email tidak boleh valid atau tidak boleh kosong");
            } else {
                echo "<div class='alert alert-success'>Email sudah diisi</div>";
            }
    
            if (empty($password)) {
                array_push($errors, "Password tidak boleh kosong");
            } else {
                echo "<div class='alert alert-success'>Passwprd terisi</div>";
            }
    
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {
                echo "<div class='alert alert-success'>Semua elemen input berhasil diisi.</div>";
            }
        }
        ?>