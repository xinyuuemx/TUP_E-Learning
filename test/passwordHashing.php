<?php

public function hashing() {
    $inputPassword = "123456";
    $dbPassword = password_hash($inputPassword, PASSWORD_DEFAULT);
    if (password_verify($inputPassword,$dbPassword	)) {
      echo "Password is verified";
    } else {
      echo "Password is not verified";
    }
}

 ?>
