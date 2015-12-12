<?php
namespace Bundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
  * @ORM\Entity
  * @ORM\Table(name="taxidriver")
  */
class TaxiDriver {
  /**
    * @ORM\Column(type="sting")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
  protected $id;
 
  /**
    * @ORM\Column(type="string", length=255)
    */
  protected $name;
 
  public function getId()
  {
    return $this->id;
  }
 
  public function setTitle($title)
  {
    $this->title = $title;
 
    return $this;
  }
 
  public function getTitle()
  {
    return $this->title;
  }
}