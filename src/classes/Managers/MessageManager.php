<?php

class MessageManager extends FormControll
{

  public function setOne(Message $data, PDO $pdo): void
  {
    $insertMessage = 'INSERT INTO messages (object, content, user_id) VALUES (:object, :content, :user_id)';
    $query = $pdo->prepare($insertMessage);
    $query->execute([
      'object' => $data->getObject(),
      'content' => $data->getContent(),
      'user_id' => $data->getIdUser(),
    ]);
  }
}
