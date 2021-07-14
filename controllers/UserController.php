<?php

require_once 'models/UserModel.php';

class UserController
{

  public function register()
  {
    require_once "views/users/userRegisterView.php";
  }

  public function saveUser()
  {
    if (isset($_POST) && sizeof($_POST) > 0) {
      if (strcmp($_POST['password'], $_POST['pass-confirm']) === 0) {
        $name = isset($_POST['name']) ? $_POST['name'] : false;
        $surname = isset($_POST['surname']) ? $_POST['surname'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;

        if ($name && $surname && $email && $password) {
          $user = new UserModel();
          $user->setName($_POST['name']);
          $user->setSurname($_POST['surname']);
          $user->setEmail($_POST['email']);
          $user->setPassword($_POST['password']);

          $save = $user->save();

          if ($save) $_SESSION['register'] = 'complete';
          else $_SESSION['register'] = 'failed';
        } else $_SESSION['register'] = 'failed';
      } else $_SESSION['register'] = 'failed';
      if ($_SESSION['register'] == 'failed') header('Location:' . baseURL . 'user/register');
      else header('Location:' . baseURL);
    } else $this->thereAreNoEasterEgg();
  }

  public function test(): string
  {
    return "UserController is working fine.";
  }

  private function thereAreNoEasterEgg()
  {
    echo
    HTMLBuilder::createAPTag('There are no Easter Eggs up here.', 'color-red centered growed');
    echo
    HTMLBuilder::createAPTag('Go away.', 'color-red centered growed');
  }
}
