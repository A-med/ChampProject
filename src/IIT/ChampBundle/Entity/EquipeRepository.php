<?php

namespace IIT\ChampBundle\Entity;

use Doctrine\ORM\EntityRepository;

class EquipeRepository extends EntityRepository {

    public function showPlayers($id) {

        $qt = $this->createQueryBuilder('r');
        $qt->select('j')
                ->from('IITChampBundle:Joueur', 'j')
                ->where('j.idequipe=:eq')
                ->setParameter('eq', 1);
        echo $qt->getQuery()->getResult() ;
        return $qt;
    }

}

?>
