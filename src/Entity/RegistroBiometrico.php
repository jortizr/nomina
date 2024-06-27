<?php

namespace App\Entity;

use App\Repository\RegistroBiometricoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RegistroBiometricoRepository::class)]
class RegistroBiometrico
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 6)]
    private ?string $Cod_nomina = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $hora = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $marcacion = null;

    #[ORM\Column(length: 12, nullable: true)]
    private ?string $cedula = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodNomina(): ?string
    {
        return $this->Cod_nomina;
    }

    public function setCodNomina(string $Cod_nomina): static
    {
        $this->Cod_nomina = $Cod_nomina;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getHora(): ?\DateTimeInterface
    {
        return $this->hora;
    }

    public function setHora(?\DateTimeInterface $hora): static
    {
        $this->hora = $hora;

        return $this;
    }

    public function getMarcacion(): ?string
    {
        return $this->marcacion;
    }

    public function setMarcacion(?string $marcacion): static
    {
        $this->marcacion = $marcacion;

        return $this;
    }

    public function getCedula(): ?string
    {
        return $this->cedula;
    }

    public function setCedula(?string $cedula): static
    {
        $this->cedula = $cedula;

        return $this;
    }
}
