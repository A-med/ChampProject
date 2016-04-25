<?php

namespace IIT\ChampBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Heure
 *
 * @ORM\Table(name="heure", indexes={@ORM\Index(name="idDate", columns={"idDate"})})
 * @ORM\Entity
 */
class Heure
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time", nullable=false)
     */
    private $heure;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \IIT\ChampBundle\Entity\Date
     *
     * @ORM\ManyToOne(targetEntity="IIT\ChampBundle\Entity\Date")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDate", referencedColumnName="id")
     * })
     */
    private $iddate;



    /**
     * Set heure
     *
     * @param \DateTime $heure
     * @return Heure
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime 
     */
    public function getHeure()
    {
        return $this->heure;
    }

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
     * Set iddate
     *
     * @param \IIT\ChampBundle\Entity\Date $iddate
     * @return Heure
     */
    public function setIddate(\IIT\ChampBundle\Entity\Date $iddate = null)
    {
        $this->iddate = $iddate;

        return $this;
    }

    /**
     * Get iddate
     *
     * @return \IIT\ChampBundle\Entity\Date 
     */
    public function getIddate()
    {
        return $this->iddate;
    }
}
