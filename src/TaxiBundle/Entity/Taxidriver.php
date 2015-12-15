<?php
namespace TaxiBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
  * @ORM\Entity
  * @ORM\Table(name="taxidriver")
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
  protected $name;
  
  /**
    * @ORM\Column(type="integer", length=10)
    */
	
 protected $phoneNumber;
 
 /**
    * @ORM\Column(type="float", length=10)
    */
	
 protected $min_price_km;
 
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
    return $this->driId;
  }
  public function setId($driId)
  {
    $this->driId = $driId;
 
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
  
  public function setMinPriceKm($min_price_km)
  {
    $this->min_price_km = $min_price_km;
 
    return $this;
  }
  public function getMinPriceKm()
  {
    return $this->min_price_km;
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