<?php

class UserModel
{
  private $id;
  private $name;
  private $surname;
  private $email;
  private $password;
  private $role;
  private $image;
  private $db;

  public function __construct()
  {
    $this->db = Database::connect();
  }

  // Getters could be insecure (like getPassword()). I'll check them out later. 
  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getSurname()
  {
    return $this->surname;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function getRole()
  {
    return $this->role;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setName($name)
  {
    $this->name = $this->validateValue($name, 100);
  }

  public function setSurname($surname)
  {
    $this->surname = $this->validateValue($surname);
  }

  public function setEmail($email)
  {
    $this->email = $this->validateValue($email);
  }

  public function setPassword($password, $encrypt = true)
  {
    if ($encrypt)
      $this->password = $this->validateValue($password) ? password_hash($this->validateValue($password), PASSWORD_BCRYPT, ['cost' => 4]) : false;
    else $this->password = $this->validateValue($password);
  }

  public function setRole($role)
  {
    $this->role = $this->validateValue($role, 20);;
  }

  public function setImage($image)
  {
    $this->image = $this->validateValue($image);;
  }

  public function save()
  {
    $result = false;
    if ($this->canBeSaved()) {
      $sql = 'INSERT INTO users VALUES(
      NULL, 
      "' . $this->name . '", 
      "' . $this->surname . '", 
      "' . $this->email . '", 
      "' . $this->password . '", '
        . $this->getStringOrNull($this->role) . ', '
        . $this->getStringOrNull($this->image) . '
      )';

      $save = $this->db->query($sql);
      if ($save) $result = true;
    }
    return $result;
  }

  public function login()
  {
    $result = false;
    $sql = 'SELECT * FROM users WHERE email = "' . $this->email . '"';
    $login = $this->db->query($sql);

    if ($login && $login->num_rows === 1) {
      $user = $login->fetch_object();
      $verify = password_verify($this->password, $user->password);
      if ($verify) $result = $user;
    }

    return $result;
  }

  private function canBeSaved()
  {
    return (!empty($this->name) &&
      !empty($this->surname) &&
      !empty($this->email) &&
      !empty($this->password));
  }

  private function getStringOrNull($value)
  {
    $result = 'NULL';
    if ($value) $result = '"' . $value . '"';
    return $result;
  }

  private function validateValue($value, $maxLength = 255)
  {
    return strlen($this->db->real_escape_string(trim($value))) < $maxLength ? $this->db->real_escape_string(trim($value)) : false;
  }
}
