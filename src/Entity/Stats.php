<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StatsRepository")
 */
class Stats
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_statistique;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\domaine", inversedBy="domaine", cascade={"persist", "remove"})
     * @ORM\Column(nullable=true)
     */
    private $domaine;

    /**
     * @ORM\Column(type="integer")
     */
    private $message_sans_erreur_statistique;

    /**
     * @ORM\Column(type="integer")
     */
    private $message_erreur_statistique;

    /**
     * @ORM\Column(type="integer")
     */
    private $alerte_journee_statistique;

    /**
     * @ORM\Column(type="integer")
     */
    private $total_message_sans_erreur_statistique;

    /**
     * @ORM\Column(type="integer")
     */
    private $total_message_erreur_statistique;

    /**
     * @ORM\Column(type="integer")
     */
    private $total_alerte_statistique;

    /**
     * @ORM\Column(type="integer")
     */
    private $total_alerte_non_traite_statistique;

    /**
     * @ORM\Column(type="integer")
     */
    private $interface_active_statistique;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDateStatistique()
    {
        return $this->date_statistique;
    }

    /**
     * @param mixed $date_statistique
     */
    public function setDateStatistique($date_statistique): void
    {
        $this->date_statistique = $date_statistique;
    }

    /**
     * @return mixed
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * @param mixed $domaine
     */
    public function setDomaine($domaine): void
    {
        $this->domaine = $domaine;
    }

    /**
     * @return mixed
     */
    public function getMessageSansErreurStatistique()
    {
        return $this->message_sans_erreur_statistique;
    }

    /**
     * @param mixed $message_sans_erreur_statistique
     */
    public function setMessageSansErreurStatistique($message_sans_erreur_statistique): void
    {
        $this->message_sans_erreur_statistique = $message_sans_erreur_statistique;
    }

    /**
     * @return mixed
     */
    public function getMessageErreurStatistique()
    {
        return $this->message_erreur_statistique;
    }

    /**
     * @param mixed $message_erreur_statistique
     */
    public function setMessageErreurStatistique($message_erreur_statistique): void
    {
        $this->message_erreur_statistique = $message_erreur_statistique;
    }

    /**
     * @return mixed
     */
    public function getAlerteJourneeStatistique()
    {
        return $this->alerte_journee_statistique;
    }

    /**
     * @param mixed $alerte_journee_statistique
     */
    public function setAlerteJourneeStatistique($alerte_journee_statistique): void
    {
        $this->alerte_journee_statistique = $alerte_journee_statistique;
    }

    /**
     * @return mixed
     */
    public function getTotalMessageSansErreurStatistique()
    {
        return $this->total_message_sans_erreur_statistique;
    }

    /**
     * @param mixed $total_message_sans_erreur_statistique
     */
    public function setTotalMessageSansErreurStatistique($total_message_sans_erreur_statistique): void
    {
        $this->total_message_sans_erreur_statistique = $total_message_sans_erreur_statistique;
    }

    /**
     * @return mixed
     */
    public function getTotalMessageErreurStatistique()
    {
        return $this->total_message_erreur_statistique;
    }

    /**
     * @param mixed $total_message_erreur_statistique
     */
    public function setTotalMessageErreurStatistique($total_message_erreur_statistique): void
    {
        $this->total_message_erreur_statistique = $total_message_erreur_statistique;
    }

    /**
     * @return mixed
     */
    public function getTotalAlerteStatistique()
    {
        return $this->total_alerte_statistique;
    }

    /**
     * @param mixed $total_alerte_statistique
     */
    public function setTotalAlerteStatistique($total_alerte_statistique): void
    {
        $this->total_alerte_statistique = $total_alerte_statistique;
    }

    /**
     * @return mixed
     */
    public function getTotalAlerteNonTraiteStatistique()
    {
        return $this->total_alerte_non_traite_statistique;
    }

    /**
     * @param mixed $total_alerte_non_traite_statistique
     */
    public function setTotalAlerteNonTraiteStatistique($total_alerte_non_traite_statistique): void
    {
        $this->total_alerte_non_traite_statistique = $total_alerte_non_traite_statistique;
    }

    /**
     * @return mixed
     */
    public function getInterfaceActiveStatistique()
    {
        return $this->interface_active_statistique;
    }

    /**
     * @param mixed $interface_active_statistique
     */
    public function setInterfaceActiveStatistique($interface_active_statistique): void
    {
        $this->interface_active_statistique = $interface_active_statistique;
    }
}
