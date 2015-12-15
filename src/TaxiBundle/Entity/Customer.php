<?php
namespace TaxiBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
  * @ORM\Entity
  * @ORM\Table(name="customer")
  */
class Taxidriver {
  /**
    * @ORM\Column(type="string")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
  protected $custId;
 
  /**
    * @ORM\Column(type="string", length=20)
    */
  protected $name;
  
  /**
    * @ORM\Column(type="integer", length=10)
    */
	
 protected $phoneNumber;

 
 /**
    * @ORM\Column(type="string", length=20)
    */
	
 protected $address;
 
 /**
    * @ORM\Column(type="string", length=10)
    */
	
 protected $nicNumber;
 
 
  public function getId()
  {
    return $this->custId;
  }
  public function setId($custId)
  {
    $this->custId = $custId;
 
    return $this;
  }
  
  public function setName($name)
  {
    $this->name = $name;
 
    return $this;
  }
  public function getName()
  {
    return $this->name;
  }
  
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
 
    return $this;
  }
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  
  public function setAddress($address)
  {
    $this->address = $address;
 
    return $this;
  }
  public function getAddress()
  {
    return $this->address;
  }
  
  public function setNicNumber($nicNumber)
  {
    $this->nicNumber = $nicNumber;
 
    return $this;
  }
  public function getNicNumber($nicNumber){
	  return $this->nicNumber;
  }
  
}