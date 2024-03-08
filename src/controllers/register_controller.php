<?php

$register = new Register();
$formControll = new FormControll();
$userManager = new UserManager();

$register->getView(PATH_VIEWS_AUTH, 'register');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $name = $formControll->validateInput($_POST['name']);
        $email = $formControll->emailVerify($_POST['email']);
        $password = $formControll->validateInput($_POST['password']);
        $repeatPassword = $formControll->validateInput($_POST['password']);

        
        if ($repeatPassword === $password) {
            $passHash = $formControll->passHash($password);

            $user = new User([
                'name' => $name,
                'email' => $email,
                'password' => $passHash,
            ]);

            $user_id = $userManager->setOne($user, $db->getPdo());

            
            $_SESSION['status'] = 'success';
            $_SESSION['message'] = 'Votre compte est crée veuillez vous connecter';

            $register->redirect('homepage');
            
        } else {
            $_SESSION['status'] = 'error';
            $_SESSION['message'] = 'Les mots de passe dont différents';
        }
    } catch (Exception $e) {
        $e->getMessage();
    }
}
