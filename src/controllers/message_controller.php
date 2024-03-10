<?php

$globally->getView(PATH_VIEWS, 'message');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (!empty($_POST['object']) && !empty($_POST['message'])) {
    $formControll = new MessageManager();

    $object = $formControll->validateInput($_POST['object']);
    $message = $formControll->validateInput($_POST['message']);
    $message = new Message([
      'object' => $object,
      'content' => $message,
      'idUser' => $_SESSION['user']['id'],
    ]);

    $messageManager = new MessageManager();
    $messageManager->setOne($message, $db->getPdo());

    $_SESSION['status'] = 'success';
    $_SESSION['message'] = 'Message envoyé avec succès';
  } else {
    $_SESSION['status'] = 'error';
    $_SESSION['message'] = 'Veuillez remplir tous les champs';
  }
}
