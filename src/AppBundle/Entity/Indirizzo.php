<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Indirizzo
 *
 * @ORM\Table(name="indirizzo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IndirizzoRepository")
 */
class Indirizzo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="via", type="string", length=255)
     */
    private $via;

    /**
     * @var string
     *
     * @ORM\Column(name="civico", type="string", length=255)
     */
    private $civico;

    /**
     * @var int
     *
     * @ORM\Column(name="cap", type="integer")
     */
    private $cap;

    /**
     * @var string
     *
     * @ORM\Column(name="comune", type="string", length=255)
     */
    private $comune;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set via
     *
     * @param string $via
     *
     * @return Indirizzo
     */
    public function setVia($via)
    {
        $this->via = $via;

        return $this;
    }

    /**
     * Get via
     *
     * @return string
     */
    public function getVia()
    {
        return $this->via;
    }

    /**
     * Set civico
     *
     * @param string $civico
     *
     * @return Indirizzo
     */
    public function setCivico($civico)
    {
        $this->civico = $civico;

        return $this;
    }

    /**
     * Get civico
     *
     * @return string
     */
    public function getCivico()
    {
        return $this->civico;
    }

    /**
     * Set cap
     *
     * @param integer $cap
     *
     * @return Indirizzo
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return int
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set comune
     *
     * @param string $comune
     *
     * @return Indirizzo
     */
    public function setComune($comune)
    {
        $this->comune = $comune;

        return $this;
    }

    /**
     * Get comune
     *
     * @return string
     */
    public function getComune()
    {
        return $this->comune;
    }
}

