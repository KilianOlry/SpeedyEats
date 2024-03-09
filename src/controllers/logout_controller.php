<?php
$globally = new Globally();

unset($_SESSION['user']);
$globally->redirect('homepage');
exit();
