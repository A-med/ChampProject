<?php

namespace IIT\ChampBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partie
 *
 * @ORM\Table(name="partie", indexes={@ORM\Index(name="idEquipe", columns={"idEquipe"}), @ORM\Index(name="idStade", columns={"idStade"}), @ORM\Index(name="idCompetition", columns={"idCompetition"}), @ORM\Index(name="idDate", columns={"idDate"})})
 * @ORM\Entity
 */
class Partie
{
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
     * @var \IIT\ChampBundle\Entity\Competition
     *
     * @ORM\ManyToOne(targetEntity="IIT\ChampBundle\Entity\Competition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCompetition", referencedColumnName="id")
     * })
     */
    private $idcompetition;

    /**
     * @var \IIT\ChampBundle\Entity\Stade
     *
     * @ORM\ManyToOne(targetEntity="IIT\ChampBundle\Entity\Stade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idStade", referencedColumnName="id")
     * })
     */
    private $idstade;

    /**
     * @var \IIT\ChampBundle\Entity\Equipe
     *
     * @ORM\ManyToOne(targetEntity="IIT\ChampBundle\Entity\Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEquipe", referencedColumnName="id")
     * })
     */
    private $idequipe;



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
     * @return Partie
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

    /**
     * Set idcompetition
     *
     * @param \IIT\ChampBundle\Entity\Competition $idcompetition
     * @return Partie
     */
    public function setIdcompetition(\IIT\ChampBundle\Entity\Competition $idcompetition = null)
    {
        $this->idcompetition = $idcompetition;

        return $this;
    }

    /**
     * Get idcompetition
     *
     * @return \IIT\ChampBundle\Entity\Competition 
     */
    public function getIdcompetition()
    {
        return $this->idcompetition;
    }

    /**
     * Set idstade
     *
     * @param \IIT\ChampBundle\Entity\Stade $idstade
     * @return Partie
     */
    public function setIdstade(\IIT\ChampBundle\Entity\Stade $idstade = null)
    {
        $this->idstade = $idstade;

        return $this;
    }

    /**
     * Get idstade
     *
     * @return \IIT\ChampBundle\Entity\Stade 
     */
    public function getIdstade()
    {
        return $this->idstade;
    }

    /**
     * Set idequipe
     *
     * @param \IIT\ChampBundle\Entity\Equipe $idequipe
     * @return Partie
     */
    public function setIdequipe(\IIT\ChampBundle\Entity\Equipe $idequipe = null)
    {
        $this->idequipe = $idequipe;

        return $this;
    }

    /**
     * Get idequipe
     *
     * @return \IIT\ChampBundle\Entity\Equipe 
     */
    public function getIdequipe()
    {
        return $this->idequipe;
    }
}
