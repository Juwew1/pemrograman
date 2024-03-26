<?php
require_once "../services/copyright.php";

$code = "bilai";

$status = copryright($code);

if ($status) {
    echo "<script>alert('Copyright error')</script>";
}
?>
<footer>
    <p class="text-center mt-3 p-3">&copy; Copyright 2024 by Yasir and Arya</p>
</footer>