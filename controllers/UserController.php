<?php

require_once 'models/UserModel.php';

class UserController
{

  public function register()
  {
    require_once "views/users/userRegisterView.php";
  }

  public function login()
  {
    require_once "views/users/userLoginView.php";
  }

  public function account()
  {
    require_once "views/users/userAccountView.php";
  }

  public function logout()
  {
    Utils::deleteSession('admin');
    Utils::deleteSession('identified');
    Utils::goToTheMainPage();
  }

  public function saveUser()
  {
    if (isset($_POST) && sizeof($_POST) > 0) {
      if (strcmp($_POST['password'], $_POST['pass-confirm']) === 0) {
        $validated = [
          'name' => $this->getPostValue('name'),
          'surname' => $this->getPostValue('surname'),
          'email' => $this->getPostValue('email', 7, false, true),
          'password' => $this->getPostValue('password', 5, true)
        ];

        if ($this->validateArray($validated)) {
          $user = new UserModel();
          $user->setName($validated['name']);
          $user->setSurname($validated['surname']);
          $user->setEmail($validated['email']);
          $user->setPassword($validated['password']);

          $save = $user->save();

          if ($save) $_SESSION['register'] = 'complete';
          else $_SESSION['register'] = 'failed';
        } else $_SESSION['register'] = 'failed';
      } else $_SESSION['register'] = 'failed';
      if ($_SESSION['register'] == 'failed') Utils::goToThePage('user/register');
      else Utils::goToTheMainPage();
    } else $this->thereAreNoEasterEgg();
  }

  public function access()
  {
    if (isset($_POST) && sizeof($_POST) > 0) {
      $user = new UserModel();
      $user->setEmail($this->getPostValue('email', 7, false, true));
      $user->setPassword($this->getPostValue('password', 5, true), false);
      $identifying = $user->login();

      if ($identifying && is_object($identifying)) {
        $_SESSION['identified'] = $identifying;
        $_SESSION['login'] = 'complete';
        if ($identifying->role == 'admin') $_SESSION['admin'] = true;
        Utils::goToTheMainPage();
      } else {
        $_SESSION['login'] = 'failed';
        Utils::goToThePage('/user/login');
      }
    } else $this->thereAreNoEasterEgg();
  }

  private function getPostValue($postValue, $minLength = 3, $canBeNumeric = false, $isAnEmail = false)
  {
    $result = false;
    if (isset($_POST[$postValue])) {
      $trimedValue = trim($_POST[$postValue]);
      if (strlen($trimedValue) >= $minLength) {
        if (!$canBeNumeric) {
          if (!is_numeric($trimedValue)) {
            if ($isAnEmail) {
              if (filter_var($trimedValue, FILTER_VALIDATE_EMAIL))
                $result = $trimedValue;
              else $result = false;
            } else $result = $trimedValue;
          } else $result = false;
        } else {
          if ($isAnEmail) $result = false; //can't be numeric and email at the same time
          else $result = $trimedValue;
        }
      } else $result = false;
    } else $result = false;
    return $result;
  }

  private function validateArray($array)
  {
    $result = true;
    foreach ($array as $value) {
      if (!$value) $result = false;
    }
    return $result;
  }

  private function thereAreNoEasterEgg()
  {
    echo
    HTMLBuilder::createAPTag('There are no Easter Eggs up here.', 'color-red centered growed');
    echo
    HTMLBuilder::createAPTag('Go away.', 'color-red centered growed');
  }

  public function test(): string
  {
    return "UserController is working fine.";
  }
}
