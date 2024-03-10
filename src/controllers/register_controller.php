<?php

$formControll = new FormControll();
$userManager = new UserManager();

$globally->getView(PATH_VIEWS_AUTH, 'register');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $name = $formControll->validateInput($_POST['name']);
        $email = $formControll->emailVerify($_POST['email']);
        $password = $formControll->validateInput($_POST['password']);
        $repeatPassword = $formControll->validateInput($_POST['password']);


        if ($repeatPassword === $password) {
            $passHash = $formControll->passHash($password);

            if ($userManager->getByMail($email, $db->getPdo()) == null) {
                $user = new User([
                    'name' => $name,
                    'email' => $email,
                    'password' => $passHash,
                ]);

                $user_id = $userManager->setOne($user, $db->getPdo());
                $datas = $userManager->getByMail($_POST['email'], $db->getPdo());

                $_SESSION['user'] = [
                    'id' => $datas[0]['id'],
                    'name' => $datas[0]['name'],
                    'email' => $datas[0]['email'],
                    'role' => $datas[0]['role']
                ];

                $globally->redirect('homepage');
            } else {
                $_SESSION['status'] = 'error';
                $_SESSION['message'] = 'Un compte est déjà crée avec cette adresse email';
            }
        } else {
            $_SESSION['status'] = 'error';
            $_SESSION['message'] = 'Les mots de passe dont différents';
        }
    } catch (Exception $e) {
        $e->getMessage();
    }
}
