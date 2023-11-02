<?php

class InstructeurModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getInstructeurs3($Id)
    {
        $sql = "SELECT Voornaam, Tussenvoegsel, Achternaam
        from Instructeur
        WHERE Id = $Id";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getInstructeurs2($Id)
    {
        $sql = "SELECT Voornaam, Tussenvoegsel, Achternaam, DatumInDienst, AantalSterren
        from Instructeur
        WHERE Id = $Id";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getInstructeurs()
    {
        $sql = "SELECT Id
                      ,Voornaam
                      ,Tussenvoegsel
                      ,Achternaam
                      ,Mobiel
                      ,DatumInDienst
                      ,AantalSterren
                FROM  Instructeur
                ORDER BY AantalSterren DESC";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getToegewezenVoertuigen($Id)
    {
        $sql = "SELECT V.Id, TV.TypeVoertuig, V.Type, V.Kenteken, V.Bouwjaar, V.Brandstof, TV.Rijbewijscategorie
                from VoertuigInstructeur VI	inner join Instructeur I ON VI.InstructeurId=I.Id 
                                            inner join Voertuig V ON VI.VoertuigId=V.Id
                                            inner join TypeVoertuig TV ON V.TypeVoertuigId=TV.Id
                WHERE I.Id = $Id";
        $this->db->query($sql); 
        return $this->db->resultSet();   
    }
    public function getVoertuig($VoertuigId)
    {
        $sql = "SELECT TV.TypeVoertuig, V.Type, V.Bouwjaar, V.Brandstof, V.Kenteken
                from voertuig V
                inner join TypeVoertuig TV on V.TypeVoertuigId
                where V.id=$VoertuigId and TV.id=V.TypeVoertuigId;";
        $this->db->query($sql); 
        return $this->db->resultSet();   
    }
}