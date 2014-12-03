<?php

namespace exialps\RessourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="exialps\RessourcesBundle\Entity\clientRepository")
 */
class client
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
    *
    * @ORM\Column(name="categorie", type="string", length=255)
    * @JoinColumn(nullable=false)
    */
    private $categorie;

    /**
    *
    * @ORM\Column(name="codeclient", type="string", length=255)
    * @JoinColumn(nullable=false)
    */
    private $codeClient;

    /**
     * @var string
     *
     * @ORM\Column(name="nomsociete", type="string", length=255)
     * @JoinColumn(nullable=true)
     */
    private $nomsociete;

    /**
    *
    * @ORM\Column(name="adresseadministrative", type="string", length=255)
    * @JoinColumn(nullable=false)
    */
    private $adresseadministrative;

    /**
    *
    * @ORM\Column(name="adressedefacturation", type="string", length=255)
    * @JoinColumn(nullable=false)
    */
    private $adressedefacturation;

    /**
    *
    * @ORM\Column(name="telephone", type="integer")
    * @JoinColumn(nullable=true)
    */
    private $telephone;

    /**
    *
    * @ORM\Column(name="siret", type="integer")
    * @JoinColumn(nullable=false)
    */
    private $siret;

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
     * Set nom
     *
     * @param string $nom
     * @return client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
}
