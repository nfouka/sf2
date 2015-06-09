<?php

namespace dciss\MyAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Film
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Film
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Film
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Categorie")
     */
    private $categorie;
    
    /**
     * @ORM\ManyToMany(targetEntity="Acteur")
     */
    private $acteurs;
	public function getCategorie() {
		return $this->categorie;
	}
	public function setCategorie(Categorie $categorie) {
		$this->categorie = $categorie;
		return $this;
	}
	public function getActeurs() {
		return $this->acteurs;
	}
	public function setActeurs(Acteur $acteurs) {
		$this->acteurs = $acteurs;
		return $this;
	}
	
    
    
}
