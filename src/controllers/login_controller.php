<?php

$globally = new Globally();
$formControll = new FormControll();
$userManager = new UserManager();

$globally->getView(PATH_VIEWS_AUTH, 'login');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  try {

    $email = $formControll->emailVerify($_POST['email']);
    $password = $formControll->validateInput($_POST['password']);

    if ($email) {

      $user = $userManager->getByMail($email, $db->getPdo());

      if ($user) {
        if (password_verify($password, $user[0]['password'])) {
          $_SESSION['user'] = [
            'email' => $email,
            'name' => $user[0]['name'],
            'role' => $user[0]['role']
          ];

          $globally->redirect('homepage');
          exit();
        }
      } else {
        $_SESSION['status'] = 'error';
        $_SESSION['message'] = 'Email ou mot de passe incorrect';
      }
    } else {
      $_SESSION['status'] = 'error';
      $_SESSION['message'] = 'Format d\'adresse email incorrect';
    }
  } catch (Exception $e) {
  }
}
