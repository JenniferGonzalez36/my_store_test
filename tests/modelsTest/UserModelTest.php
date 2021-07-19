<?php

use PHPUnit\Framework\TestCase;

class UserModelTest extends TestCase
{
  private function getATestText($cuantityOfChars)
  {
    $result = '';
    for ($i = 0; $i < $cuantityOfChars; $i++) $result .= 'a';
    return $result;
  }

  public function testUserModelSaveReturnsFalseIfEverithingIsNull()
  {
    $object = new UserModel();
    $this->assertFalse($object->save());
  }

  /* 
    ##    ##    ###    ##     ## ######## 
    ###   ##   ## ##   ###   ### ##       
    ####  ##  ##   ##  #### #### ##       
    ## ## ## ##     ## ## ### ## ######   
    ##  #### ######### ##     ## ##       
    ##   ### ##     ## ##     ## ##       
    ##    ## ##     ## ##     ## ######## 
  */

  public function testUserModelNameReturnsNullIfNotDefined()
  {
    $object = new UserModel();
    $this->assertNull($object->getName());
  }

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

  public function testUserModelNameReturnsTheLimitStringWithALimitText()
  {
    $object = new UserModel();
    $object->setName($this->getATestText(99));
    $this->assertEquals($this->getATestText(99), $object->getName());
  }

  public function testUserModelNameReturnsFalseWithLargeText()
  {
    $object = new UserModel();
    $object->setName($this->getATestText(100));
    $this->assertEquals(false, $object->getName());
  }

  public function testUserModelSaveReturnsFalseIfNameIsWrong()
  {
    $object = new UserModel();
    $object->setSurname('');
    $object->setSurname('Hello');
    $object->setEmail('Test@test.com');
    $object->setPassword('Hello');
    $this->assertFalse($object->save());
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

  public function testUserModelSurnameReturnsNullIfNotDefined()
  {
    $object = new UserModel();
    $this->assertNull($object->getSurname());
  }

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

  public function testUserModelSurnameReturnsTheLimitStringWithALimitText()
  {
    $object = new UserModel();
    $object->setSurname($this->getATestText(254));
    $this->assertEquals($this->getATestText(254), $object->getSurname());
  }

  public function testUserModelSurnameReturnsFalseWithLargeText()
  {
    $object = new UserModel();
    $object->setSurname($this->getATestText(255));
    $this->assertEquals(false, $object->getSurname());
  }

  public function testUserModelSaveReturnsFalseIfSurnameIsWrong()
  {
    $object = new UserModel();
    $object->setSurname('Hello');
    $object->setSurname('');
    $object->setEmail('Test@test.com');
    $object->setPassword('Hello');
    $this->assertFalse($object->save());
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

  public function testUserModelEmailReturnsNullIfNotDefined()
  {
    $object = new UserModel();
    $this->assertNull($object->getEmail());
  }

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

  public function testUserModelEmailReturnsTheLimitStringWithALimitText()
  {
    $object = new UserModel();
    $object->setEmail($this->getATestText(254));
    $this->assertEquals($this->getATestText(254), $object->getEmail());
  }

  public function testUserModelEmailReturnsFalseWithLargeText()
  {
    $object = new UserModel();
    $object->setEmail($this->getATestText(255));
    $this->assertEquals(false, $object->getEmail());
  }

  public function testUserModelSaveReturnsFalseIfEmailIsWrong()
  {
    $object = new UserModel();
    $object->setSurname('Hello');
    $object->setSurname('Hello');
    $object->setEmail('');
    $object->setPassword('Hello');
    $this->assertFalse($object->save());
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
  public function testUserModelPasswordReturnsNullIfNotDefined()
  {
    $object = new UserModel();
    $this->assertNull($object->getPassword());
  }

  public function testUserModelPasswordReturnsAStringWithString()
  {
    $object = new UserModel();
    $object->setPassword('Hello');
    $this->assertIsString($object->getPassword());
  }

  public function testUserModelPasswordOtherStringWithString()
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

  public function testUserModelPasswordReturnsFalseWithAFalseValue()
  {
    $object = new UserModel();
    $object->setPassword(false);
    $this->assertEquals(false, $object->getPassword());
  }

  public function testUserModelPasswordReturnsSomethingWithALimitText()
  {
    $object = new UserModel();
    $object->setPassword($this->getATestText(254));
    $this->assertIsString($object->getPassword());
  }

  public function testUserModelPasswordReturnsFalseWithLargeText()
  {
    $object = new UserModel();
    $object->setPassword($this->getATestText(255));
    $this->assertEquals(false, $object->getPassword());
  }

  public function testUserModelSaveReturnsFalseIfPasswordIsWrong()
  {
    $object = new UserModel();
    $object->setSurname('Hello');
    $object->setSurname('Hello');
    $object->setEmail('Test@test.com');
    $object->setPassword('');
    $this->assertFalse($object->save());
  }

  /////////////////////////////////////////////////////////////////////

  public function testUserModelUnencryptedPasswordReturnsAStringWithString()
  {
    $object = new UserModel();
    $object->setPassword('Hello', false);
    $this->assertIsString($object->getPassword());
  }

  public function testUserModelUnencryptedPasswordSameStringWithString()
  {
    $object = new UserModel();
    $object->setPassword('Hello', false);
    $this->assertEquals('Hello', $object->getPassword());
  }

  public function testUserModelUnencryptedPasswordReturnsStringWithANumber()
  {
    $object = new UserModel();
    $object->setPassword(58, false);
    $this->assertIsString($object->getPassword());
  }

  public function testUserModelUnencryptedPasswordReturnsStringWithANumberWithANumber()
  {
    $object = new UserModel();
    $object->setPassword(58, false);
    $this->assertEquals('58', $object->getPassword());
  }

  public function testUserModelUnencryptedPasswordReturnsFalseWithAFalseValue()
  {
    $object = new UserModel();
    $object->setPassword(false, false);
    $this->assertEquals(false, $object->getPassword());
  }

  public function testUserModelUnencryptedPasswordReturnsSomethingWithALimitText()
  {
    $object = new UserModel();
    $object->setPassword($this->getATestText(254), false);
    $this->assertEquals($this->getATestText(254), $object->getPassword());
  }

  public function testUserModelUnencryptedPasswordReturnsFalseWithLargeText()
  {
    $object = new UserModel();
    $object->setPassword($this->getATestText(255), false);
    $this->assertEquals(false, $object->getPassword());
  }

  public function testUserModelRoleUnencryptedPasswordReturnsAStringTrimedWithSpacedString()
  {
    $object = new UserModel();
    $object->setPassword('  Hello     ', false);
    $this->assertEquals('Hello', $object->getPassword());
  }

  public function testUserModelUnencryptedPasswordReturnsAnEmptyStringWithEmptyString()
  {
    $object = new UserModel();
    $object->setPassword('', false);
    $this->assertEquals('', $object->getPassword());
  }

  public function testUserModelUnencryptedPasswordReturnsAnEmptyStringWithSpacedString()
  {
    $object = new UserModel();
    $object->setPassword('      ', false);
    $this->assertEquals('', $object->getPassword());
  }

  public function testUserModelUnencryptedPasswordReturnsEscapedStringWithMaliciousString()
  {
    $object = new UserModel();
    $object->setPassword("\\n \\r \\ ' \"", false);
    $this->assertEquals("\\\\n \\\\r \\\ \\' \\\"", $object->getPassword());
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
  public function testUserModelRoleReturnsNullIfNotDefined()
  {
    $object = new UserModel();
    $this->assertNull($object->getRole());
  }

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

  public function testUserModelRoleReturnsTheLimitStringWithALimitText()
  {
    $object = new UserModel();
    $object->setRole($this->getATestText(19));
    $this->assertEquals($this->getATestText(19), $object->getRole());
  }

  public function testUserModelRoleReturnsFalseWithLargeText()
  {
    $object = new UserModel();
    $object->setRole($this->getATestText(20));
    $this->assertEquals(false, $object->getRole());
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

  public function testUserModelImageReturnsNullIfNotDefined()
  {
    $object = new UserModel();
    $this->assertNull($object->getImage());
  }

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

  public function testUserModelImageReturnsTheLimitStringWithALimitText()
  {
    $object = new UserModel();
    $object->setImage($this->getATestText(254));
    $this->assertEquals($this->getATestText(254), $object->getImage());
  }

  public function testUserModelImageReturnsFalseWithLargeText()
  {
    $object = new UserModel();
    $object->setImage($this->getATestText(255));
    $this->assertEquals(false, $object->getImage());
  }



  //I've tried using mocks in the next test but intelephense
  // always detects errors even though the tests works fine.

  /* //Warning! This test will create a user in the Database
  public function testUserModelSaveReturnsTrueIfEverythingIsOk()
  {
    $object = new UserModel();
    $object->setName('Hello');
    $object->setSurname('Hello');
    $object->setEmail('Test@test.com');
    $object->setPassword('Hello');
    $object->save();

    $this->assertTrue($object->save());
  } //Warning! This test will create a user in the Database

  */
}
