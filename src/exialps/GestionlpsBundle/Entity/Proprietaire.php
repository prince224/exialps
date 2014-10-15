<?php

namespace exialps\GestionlpsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="exialps\GestionlpsBundle\Entity\ProprietaireRepository")
 */
class Proprietaire
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
     * @var integer
     *
     * @ORM\Column(name="codeClient", type="integer")
     */
    private $codeClient;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSociete", type="string", length=255)
     */
    private $nomSociete;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseAdministrative", type="string", length=255)
     */
    private $adresseAdministrative;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseFacturation", type="string", length=255)
     */
    private $adresseFacturation;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var integer
     *
     * @ORM\Column(name="siret", type="integer")
     */
    private $siret;

    /**
     * @var float
     *
     * @ORM\Column(name="tvaIntracom", type="float")
     */
    private $tvaIntracom;


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
     * Set codeClient
     *
     * @param integer $codeClient
     * @return Proprietaire
     */
    public function setCodeClient($codeClient)
    {
        $this->codeClient = $codeClient;

        return $this;
    }

    /**
     * Get codeClient
     *
     * @return integer 
     */
    public function getCodeClient()
    {
        return $this->codeClient;
    }

    /**
     * Set nomSociete
     *
     * @param string $nomSociete
     * @return Proprietaire
     */
    public function setNomSociete($nomSociete)
    {
        $this->nomSociete = $nomSociete;

        return $this;
    }

    /**
     * Get nomSociete
     *
     * @return string 
     */
    public function getNomSociete()
    {
        return $this->nomSociete;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return Proprietaire
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set adresseAdministrative
     *
     * @param string $adresseAdministrative
     * @return Proprietaire
     */
    public function setAdresseAdministrative($adresseAdministrative)
    {
        $this->adresseAdministrative = $adresseAdministrative;

        return $this;
    }

    /**
     * Get adresseAdministrative
     *
     * @return string 
     */
    public function getAdresseAdministrative()
    {
        return $this->adresseAdministrative;
    }

    /**
     * Set adresseFacturation
     *
     * @param string $adresseFacturation
     * @return Proprietaire
     */
    public function setAdresseFacturation($adresseFacturation)
    {
        $this->adresseFacturation = $adresseFacturation;

        return $this;
    }

    /**
     * Get adresseFacturation
     *
     * @return string 
     */
    public function getAdresseFacturation()
    {
        return $this->adresseFacturation;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Proprietaire
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set siret
     *
     * @param integer $siret
     * @return Proprietaire
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return integer 
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set tvaIntracom
     *
     * @param float $tvaIntracom
     * @return Proprietaire
     */
    public function setTvaIntracom($tvaIntracom)
    {
        $this->tvaIntracom = $tvaIntracom;

        return $this;
    }

    /**
     * Get tvaIntracom
     *
     * @return float 
     */
    public function getTvaIntracom()
    {
        return $this->tvaIntracom;
    }
}
