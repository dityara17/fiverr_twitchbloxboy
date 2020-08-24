<?php

require "config/MainClass.php";

if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
        $use->storeForm(null, $_POST['email'], $_POST['idea']);
    } else {
        $use->storeForm($_POST['name'], $_POST['email'], $_POST['idea']);
    }
}
