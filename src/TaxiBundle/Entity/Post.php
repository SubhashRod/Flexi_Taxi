<?php
namespace BlogBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
  * @ORM\Entity
  * @ORM\Table(name="post")
  */
class Post {
  /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
  protected $id;
 
  /**
    * @ORM\Column(type="string", length=255)
    */
  protected $title;
 
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