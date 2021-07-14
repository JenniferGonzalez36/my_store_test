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
    $this->name = $this->db->real_escape_string(trim($name));
  }

  public function setSurname($surname)
  {
    $this->surname = $this->db->real_escape_string(trim($surname));
  }

  public function setEmail($email)
  {
    $this->email = $this->db->real_escape_string(trim($email));
  }

  public function setPassword($password)
  {
    $this->password = password_hash($this->db->real_escape_string(trim($password)), PASSWORD_BCRYPT, ['cost' => 4]);
  }

  public function setRole($role)
  {
    $this->role = $this->db->real_escape_string(trim($role));
  }

  public function setImage($image)
  {
    $this->image = $this->db->real_escape_string(trim($image));
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
}
