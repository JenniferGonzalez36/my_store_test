<?php

use PHPUnit\Framework\TestCase;

class UserModelTest extends TestCase
{
  /* 
    ##    ##    ###    ##     ## ######## 
    ###   ##   ## ##   ###   ### ##       
    ####  ##  ##   ##  #### #### ##       
    ## ## ## ##     ## ## ### ## ######   
    ##  #### ######### ##     ## ##       
    ##   ### ##     ## ##     ## ##       
    ##    ## ##     ## ##     ## ######## 
  */
  public function testUserModelNameReturnsAStringWithString()
  {
    $object = new UserModel();
    $object->setName('Hello');
    $this->assertIsString($object->getName());
  }

  public function testUserModelNameSameStringWithString()
  {
    $object = new UserModel();
    $object->setName('Hello');
    $this->assertEquals('Hello', $object->getName());
  }

  public function testUserModelNameReturnsAStringTrimedWithSpacedString()
  {
    $object = new UserModel();
    $object->setName('  Hello     ');
    $this->assertEquals('Hello', $object->getName());
  }

  public function testUserModelNameReturnsAnEmptyStringWithEmptyString()
  {
    $object = new UserModel();
    $object->setName('');
    $this->assertEquals('', $object->getName());
  }

  public function testUserModelNameReturnsAnEmptyStringWithSpacedString()
  {
    $object = new UserModel();
    $object->setName('      ');
    $this->assertEquals('', $object->getName());
  }

  public function testUserModelNameReturnsFalseWithFalseValue()
  {
    $object = new UserModel();
    $object->setName(false);
    $this->assertEquals(false, $object->getName());
  }

  public function testUserModelNameReturnsStringWithANumber()
  {
    $object = new UserModel();
    $object->setName(58);
    $this->assertEquals('58', $object->getName());
  }

  public function testUserModelNameReturnsEscapedStringWithMaliciousString()
  {
    $object = new UserModel();
    $object->setName("\\n \\r \\ ' \"");
    $this->assertEquals("\\\\n \\\\r \\\ \\' \\\"", $object->getName());
  }

  /*
     ######  ##     ## ########  ##    ##    ###    ##     ## ######## 
    ##    ## ##     ## ##     ## ###   ##   ## ##   ###   ### ##       
    ##       ##     ## ##     ## ####  ##  ##   ##  #### #### ##       
     ######  ##     ## ########  ## ## ## ##     ## ## ### ## ######   
          ## ##     ## ##   ##   ##  #### ######### ##     ## ##       
    ##    ## ##     ## ##    ##  ##   ### ##     ## ##     ## ##       
     ######   #######  ##     ## ##    ## ##     ## ##     ## ########
  */
  public function testUserModelSurnameReturnsAStringWithString()
  {
    $object = new UserModel();
    $object->setSurname('Hello');
    $this->assertIsString($object->getSurname());
  }

  public function testUserModelSurnameSameStringWithString()
  {
    $object = new UserModel();
    $object->setSurname('Hello');
    $this->assertEquals('Hello', $object->getSurname());
  }

  public function testUserModelSurnameReturnsAStringTrimedWithSpacedString()
  {
    $object = new UserModel();
    $object->setSurname('  Hello     ');
    $this->assertEquals('Hello', $object->getSurname());
  }

  public function testUserModelSurnameReturnsAnEmptyStringWithEmptyString()
  {
    $object = new UserModel();
    $object->setSurname('');
    $this->assertEquals('', $object->getSurname());
  }

  public function testUserModelSurnameReturnsAnEmptyStringWithSpacedString()
  {
    $object = new UserModel();
    $object->setSurname('      ');
    $this->assertEquals('', $object->getSurname());
  }

  public function testUserModelSurnameReturnsFalseWithFalseValue()
  {
    $object = new UserModel();
    $object->setSurname(false);
    $this->assertEquals(false, $object->getSurname());
  }

  public function testUserModelSurnameReturnsStringWithANumber()
  {
    $object = new UserModel();
    $object->setSurname(58);
    $this->assertEquals('58', $object->getSurname());
  }

  public function testUserModelSurnameReturnsEscapedStringWithMaliciousString()
  {
    $object = new UserModel();
    $object->setSurname("\\n \\r \\ ' \"");
    $this->assertEquals("\\\\n \\\\r \\\ \\' \\\"", $object->getSurname());
  }

  /*
    ######## ##     ##    ###    #### ##       
    ##       ###   ###   ## ##    ##  ##       
    ##       #### ####  ##   ##   ##  ##       
    ######   ## ### ## ##     ##  ##  ##       
    ##       ##     ## #########  ##  ##       
    ##       ##     ## ##     ##  ##  ##       
    ######## ##     ## ##     ## #### ########
  */
  public function testUserModelEmailReturnsAStringWithString()
  {
    $object = new UserModel();
    $object->setEmail('Hello');
    $this->assertIsString($object->getEmail());
  }

  public function testUserModelEmailSameStringWithString()
  {
    $object = new UserModel();
    $object->setEmail('Hello');
    $this->assertEquals('Hello', $object->getEmail());
  }

  public function testUserModelEmailReturnsAStringTrimedWithSpacedString()
  {
    $object = new UserModel();
    $object->setEmail('  Hello     ');
    $this->assertEquals('Hello', $object->getEmail());
  }

  public function testUserModelEmailReturnsAnEmptyStringWithEmptyString()
  {
    $object = new UserModel();
    $object->setEmail('');
    $this->assertEquals('', $object->getEmail());
  }

  public function testUserModelEmailReturnsAnEmptyStringWithSpacedString()
  {
    $object = new UserModel();
    $object->setEmail('      ');
    $this->assertEquals('', $object->getEmail());
  }

  public function testUserModelEmailReturnsFalseWithFalseValue()
  {
    $object = new UserModel();
    $object->setEmail(false);
    $this->assertEquals(false, $object->getEmail());
  }

  public function testUserModelEmailReturnsStringWithANumber()
  {
    $object = new UserModel();
    $object->setEmail(58);
    $this->assertEquals('58', $object->getEmail());
  }

  public function testUserModelEmailReturnsEscapedStringWithMaliciousString()
  {
    $object = new UserModel();
    $object->setEmail("\\n \\r \\ ' \"");
    $this->assertEquals("\\\\n \\\\r \\\ \\' \\\"", $object->getEmail());
  }

  /*
    ########     ###     ######   ######  
    ##     ##   ## ##   ##    ## ##    ## 
    ##     ##  ##   ##  ##       ##       
    ########  ##     ##  ######   ######  
    ##        #########       ##       ## 
    ##        ##     ## ##    ## ##    ## 
    ##        ##     ##  ######   ###### 
  */

  public function testUserModelPasswordReturnsAStringWithString()
  {
    $object = new UserModel();
    $object->setPassword('Hello');
    $this->assertIsString($object->getPassword());
  }

  public function testUserModelPasswordSameStringWithString()
  {
    $object = new UserModel();
    $object->setPassword('Hello');
    $this->assertNotEquals('Hello', $object->getPassword());
  }

  public function testUserModelPasswordReturnsStringWithANumber()
  {
    $object = new UserModel();
    $object->setPassword(58);
    $this->assertIsString($object->getPassword());
  }

  /*
    ########   #######  ##       ######## 
    ##     ## ##     ## ##       ##       
    ##     ## ##     ## ##       ##       
    ########  ##     ## ##       ######   
    ##   ##   ##     ## ##       ##       
    ##    ##  ##     ## ##       ##       
    ##     ##  #######  ######## ######## 
  */

  public function testUserModelRoleReturnsAStringWithString()
  {
    $object = new UserModel();
    $object->setRole('Hello');
    $this->assertIsString($object->getRole());
  }

  public function testUserModelRoleSameStringWithString()
  {
    $object = new UserModel();
    $object->setRole('Hello');
    $this->assertEquals('Hello', $object->getRole());
  }

  public function testUserModelRoleReturnsAStringTrimedWithSpacedString()
  {
    $object = new UserModel();
    $object->setRole('  Hello     ');
    $this->assertEquals('Hello', $object->getRole());
  }

  public function testUserModelRoleReturnsAnEmptyStringWithEmptyString()
  {
    $object = new UserModel();
    $object->setRole('');
    $this->assertEquals('', $object->getRole());
  }

  public function testUserModelRoleReturnsAnEmptyStringWithSpacedString()
  {
    $object = new UserModel();
    $object->setRole('      ');
    $this->assertEquals('', $object->getRole());
  }

  public function testUserModelRoleReturnsFalseWithFalseValue()
  {
    $object = new UserModel();
    $object->setRole(false);
    $this->assertEquals(false, $object->getRole());
  }

  public function testUserModelRoleReturnsStringWithANumber()
  {
    $object = new UserModel();
    $object->setRole(58);
    $this->assertEquals('58', $object->getRole());
  }

  public function testUserModelRoleReturnsEscapedStringWithMaliciousString()
  {
    $object = new UserModel();
    $object->setRole("\\n \\r \\ ' \"");
    $this->assertEquals("\\\\n \\\\r \\\ \\' \\\"", $object->getRole());
  }

  /* 
    #### ##     ##    ###     ######   ######## 
     ##  ###   ###   ## ##   ##    ##  ##       
     ##  #### ####  ##   ##  ##        ##       
     ##  ## ### ## ##     ## ##   #### ######   
     ##  ##     ## ######### ##    ##  ##       
     ##  ##     ## ##     ## ##    ##  ##       
    #### ##     ## ##     ##  ######   ########
  */
  public function testUserModelImageReturnsAStringWithString()
  {
    $object = new UserModel();
    $object->setImage('Hello');
    $this->assertIsString($object->getImage());
  }

  public function testUserModelImageSameStringWithString()
  {
    $object = new UserModel();
    $object->setImage('Hello');
    $this->assertEquals('Hello', $object->getImage());
  }

  public function testUserModelImageReturnsAStringTrimedWithSpacedString()
  {
    $object = new UserModel();
    $object->setImage('  Hello     ');
    $this->assertEquals('Hello', $object->getImage());
  }

  public function testUserModelImageReturnsAnEmptyStringWithEmptyString()
  {
    $object = new UserModel();
    $object->setImage('');
    $this->assertEquals('', $object->getImage());
  }

  public function testUserModelImageReturnsAnEmptyStringWithSpacedString()
  {
    $object = new UserModel();
    $object->setImage('      ');
    $this->assertEquals('', $object->getImage());
  }

  public function testUserModelImageReturnsFalseWithFalseValue()
  {
    $object = new UserModel();
    $object->setImage(false);
    $this->assertEquals(false, $object->getImage());
  }

  public function testUserModelImageReturnsStringWithANumber()
  {
    $object = new UserModel();
    $object->setImage(58);
    $this->assertEquals('58', $object->getImage());
  }

  public function testUserModelImageReturnsEscapedStringWithMaliciousString()
  {
    $object = new UserModel();
    $object->setImage("\\n \\r \\ ' \"");
    $this->assertEquals("\\\\n \\\\r \\\ \\' \\\"", $object->getImage());
  }
}
