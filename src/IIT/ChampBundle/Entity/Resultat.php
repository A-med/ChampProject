<?php

namespace IIT\ChampBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resultat
 *
 * @ORM\Table(name="resultat", indexes={@ORM\Index(name="idPartie", columns={"idPartie"}), @ORM\Index(name="idEquipe1", columns={"idEquipe1"}), @ORM\Index(name="idEquipe2", columns={"idEquipe2"})})
 * @ORM\Entity
 */
class Resultat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="butEq1", type="integer", nullable=false)
     */
    private $buteq1;

    /**
     * @var integer
     *
     * @ORM\Column(name="butEq2", type="integer", nullable=false)
     */
    private $buteq2;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointEq1", type="integer", nullable=false)
     */
    private $pointeq1;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointEq2", type="integer", nullable=false)
     */
    private $pointeq2;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \IIT\ChampBundle\Entity\Equipe
     *
     * @ORM\ManyToOne(targetEntity="IIT\ChampBundle\Entity\Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEquipe2", referencedColumnName="id")
     * })
     */
    private $idequipe2;

    /**
     * @var \IIT\ChampBundle\Entity\Equipe
     *
     * @ORM\ManyToOne(targetEntity="IIT\ChampBundle\Entity\Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEquipe1", referencedColumnName="id")
     * })
     */
    private $idequipe1;

    /**
     * @var \IIT\ChampBundle\Entity\Partie
     *
     * @ORM\ManyToOne(targetEntity="IIT\ChampBundle\Entity\Partie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPartie", referencedColumnName="id")
     * })
     */
    private $idpartie;



    /**
     * Set buteq1
     *
     * @param integer $buteq1
     * @return Resultat
     */
    public function setButeq1($buteq1)
    {
        $this->buteq1 = $buteq1;

        return $this;
    }

    /**
     * Get buteq1
     *
     * @return integer 
     */
    public function getButeq1()
    {
        return $this->buteq1;
    }

    /**
     * Set buteq2
     *
     * @param integer $buteq2
     * @return Resultat
     */
    public function setButeq2($buteq2)
    {
        $this->buteq2 = $buteq2;

        return $this;
    }

    /**
     * Get buteq2
     *
     * @return integer 
     */
    public function getButeq2()
    {
        return $this->buteq2;
    }

    /**
     * Set pointeq1
     *
     * @param integer $pointeq1
     * @return Resultat
     */
    public function setPointeq1($pointeq1)
    {
        $this->pointeq1 = $pointeq1;

        return $this;
    }

    /**
     * Get pointeq1
     *
     * @return integer 
     */
    public function getPointeq1()
    {
        return $this->pointeq1;
    }

    /**
     * Set pointeq2
     *
     * @param integer $pointeq2
     * @return Resultat
     */
    public function setPointeq2($pointeq2)
    {
        $this->pointeq2 = $pointeq2;

        return $this;
    }

    /**
     * Get pointeq2
     *
     * @return integer 
     */
    public function getPointeq2()
    {
        return $this->pointeq2;
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
     * Set idequipe2
     *
     * @param \IIT\ChampBundle\Entity\Equipe $idequipe2
     * @return Resultat
     */
    public function setIdequipe2(\IIT\ChampBundle\Entity\Equipe $idequipe2 = null)
    {
        $this->idequipe2 = $idequipe2;

        return $this;
    }

    /**
     * Get idequipe2
     *
     * @return \IIT\ChampBundle\Entity\Equipe 
     */
    public function getIdequipe2()
    {
        return $this->idequipe2;
    }

    /**
     * Set idequipe1
     *
     * @param \IIT\ChampBundle\Entity\Equipe $idequipe1
     * @return Resultat
     */
    public function setIdequipe1(\IIT\ChampBundle\Entity\Equipe $idequipe1 = null)
    {
        $this->idequipe1 = $idequipe1;

        return $this;
    }

    /**
     * Get idequipe1
     *
     * @return \IIT\ChampBundle\Entity\Equipe 
     */
    public function getIdequipe1()
    {
        return $this->idequipe1;
    }

    /**
     * Set idpartie
     *
     * @param \IIT\ChampBundle\Entity\Partie $idpartie
     * @return Resultat
     */
    public function setIdpartie(\IIT\ChampBundle\Entity\Partie $idpartie = null)
    {
        $this->idpartie = $idpartie;

        return $this;
    }

    /**
     * Get idpartie
     *
     * @return \IIT\ChampBundle\Entity\Partie 
     */
    public function getIdpartie()
    {
        return $this->idpartie;
    }
}
