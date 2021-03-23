<?php


namespace App\Application\Entite;


use DateTime;

class Resume
{
    /** @var string */
    private $poste;

    /** @var string */
    private $entreprise;

    /** @var DateTime */
    private $dateDebut;

    /** @var ?DateTime */
    private $dateFin;

    /** @var array */
    private $descriptifs;

    /** @var array */
    private $environnement;


    public function __construct
    (
        string $poste,
        string $entreprise,
        DateTime $dateDebut,
        ?DateTime $dateFin,
        array $descriptifs,
        array $environnement
    ){
        $this->poste = $poste;
        $this->entreprise = $entreprise;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->descriptifs = $descriptifs;
        $this->environnement = $environnement;
    }

    /**
     * @return string
     */
    public function getPoste(): string
    {
        return $this->poste;
    }

    /**
     * @return string
     */
    public function getEntreprise(): string
    {
        return $this->entreprise;
    }

    /**
     * @return DateTime
     */
    public function getDateDebut(): DateTime
    {
        return $this->dateDebut;
    }

    /**
     * @return DateTime|null
     */
    public function getDateFin(): ?DateTime
    {
        return $this->dateFin;
    }

    /**
     * @return array
     */
    public function getDescriptifs(): array
    {
        return $this->descriptifs;
    }

    /**
     * @return array
     */
    public function getEnvironnement(): array
    {
        return $this->environnement;
    }

}