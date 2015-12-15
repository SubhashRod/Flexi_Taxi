<?php
namespace TaxiBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
  * @ORM\Entity
  * @ORM\Table(name="driverprofile")
  */
class Taxidriver {
  /**
    * @ORM\Column(type="string")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
  protected $driId;
 
  /**
    * @ORM\Column(type="string", length=20)
    */
  protected $username;
 
 /**
    * @ORM\Column(type="string", length=20)
    */
  protected $password;
 
 /**
    * @ORM\Column(type="date")
    */
	protected $regDate;
	
 
  public function getId()
  {
    return $this->driId;
  }
  public function setId($driId)
  {
    $this->driId = $driId;
 
    return $this;
  }
  
  public function setUserName($userName)
  {
    $this->userName = $userName;
 
    return $this;
  }
  public function getUserName()
  {
    return $this->userName;
  }
  
  public function setPassword($password)
  {
    $this->password = $password;
 
    return $this;
  }
  public function getPassword()
  {
    return $this->password;
  }
  
  public function setRegDate($regDate)
  {
    $this->regDate = $regDate;
 
    return $this;
  }
  public function getRegDate()
  {
    return $this->regDate;
  }
  
}