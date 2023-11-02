<?php

class Instructeur extends BaseController
{
    private $instructeurModel;

    public function __construct()
    {
        $this->instructeurModel = $this->model('InstructeurModel');
    }

    public function overzichtInstructeur()
    {
        $result = $this->instructeurModel->getInstructeurs();
        $rows = "";
        foreach ($result as $instructeur) {
            $date = date_create($instructeur->DatumInDienst);
            $formatted_date = date_format($date, "d-m-Y");
            $rows .= "<tr>
                        <td>$instructeur->Voornaam</td>
                        <td>$instructeur->Tussenvoegsel</td>
                        <td>$instructeur->Achternaam</td>
                        <td>$instructeur->Mobiel</td>
                        <td>$formatted_date</td>            
                        <td>$instructeur->AantalSterren</td>            
                        <td>
                            <a href='" . URLROOT . "/instructeur/overzichtvoertuigen/$instructeur->Id'>
                                <i class='bi bi-car-front'></i>
                            </a>
                        </td>            
                      </tr>";
        }
        
        $data = [
            'title' => 'Instructeurs in dienst',
            'rows' => $rows
        ];

        $this->view('Instructeur/overzichtinstructeur', $data);
    }
    

    public function overzichtVoertuigen($Id)
    {
        $result = $this->instructeurModel->getToegewezenVoertuigen($Id);
        $secondResult = $this->instructeurModel->getInstructeurs2($Id);
        $Vnaam = "";
        $Tnaam = "";
        $Anaam = "";
        $InDienst = "";
        $Sterren = "";
        foreach ($secondResult as $instructeur) {
            $Vnaam = "$instructeur->Voornaam";
            $Anaam = "$instructeur->Tussenvoegsel";
            $Tnaam = "$instructeur->Achternaam";
            $InDienst = "$instructeur->DatumInDienst";
            $Sterren = "$instructeur->AantalSterren";    
                                         
        }
        
        $tableRows = "";
        foreach ($result as $voertuig) {
        $date_formatted = date_format(date_create($voertuig->Bouwjaar), 'd-m-Y');
            $tableRows .= "<tr>
            <td>$voertuig->TypeVoertuig</td>
            <td>$voertuig->Type</td>
            <td>$voertuig->Kenteken</td>
            <td>$date_formatted</td>
            <td>$voertuig->Brandstof</td>            
            <td>$voertuig->Rijbewijscategorie</td>  
            <td>
                <a href='../../instructeur/wijzigVoertuig/$Id/$voertuig->Id'>
                    $voertuig->Id
                </a>
            </td>               
          </tr>";
        }

        $data = [
            'title' => 'Door instructeur gebruikte voertuigen',
            'tableRows' => $tableRows,
            'naam'  =>  $Vnaam . " " . $Tnaam . " " . $Anaam,
            'InDienst' =>  $InDienst,
            'Sterren'   =>  $Sterren
        ];
        $this->view('Instructeur/overzichtVoertuigen', $data);
    }

    public function wijzigVoertuig($Id, $VoertuigId) {

        $secondResult = $this->instructeurModel->getInstructeurs3($Id);
        $thirdResult = $this->instructeurModel->getVoertuig($VoertuigId);

        $instructeurId = $Id;
        $Vnaam = "";
        $Tnaam = "";
        $Anaam = "";
        foreach ($secondResult as $instructeur) {
            $Vnaam = "$instructeur->Voornaam";
            $Anaam = "$instructeur->Tussenvoegsel";
            $Tnaam = "$instructeur->Achternaam";
                                         
        }
    
        $TypeVoertuig = "";
        $Type = "";
        $Bouwjaar = "";
        $Brandstof = "";
        $Kenteken = "";
        foreach ($thirdResult as $voertuig) {
        $TypeVoertuig = "$voertuig->TypeVoertuig";
        $Type = "$voertuig->Type";
        $Kenteken = "$voertuig->Kenteken";
        $Bouwjaar = "$voertuig->Bouwjaar";
        $Brandstof = "$voertuig->Brandstof";
        }

        $data = [
            'title' => 'Wijzig voertuig',
            'naam'  =>  $Vnaam . " " . $Tnaam . " " . $Anaam,
            'TypeVoertuig'  =>  $TypeVoertuig,
            'Type'  =>  $Type,
            'Kenteken'  =>  $Kenteken,
            'Bouwjaar'  =>  $Bouwjaar,
            'Brandstof'  =>  $Brandstof,
            'Id'    =>  $instructeurId
        ];
        $this->view('Instructeur/wijzigVoertuig', $data);
    }
}

