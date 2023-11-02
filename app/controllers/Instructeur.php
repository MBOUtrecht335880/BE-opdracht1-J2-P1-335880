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

        //  var_dump($result);

        $rows = "";
        foreach ($result as $instructeur) {
            $rows .= "<tr>
                        <td>$instructeur->Voornaam</td>
                        <td>$instructeur->Tussenvoegsel</td>
                        <td>$instructeur->Achternaam</td>
                        <td>$instructeur->Mobiel</td>
                        <td>$instructeur->DatumInDienst</td>            
                        <td>$instructeur->AantalSterren</td>            
                        <td>
                            <a href='" . URLROOT . "/instructeur/overzichtvoertuigen/$instructeur->Id'>
                                <i class='bi bi-car-front'></i>
                            </a>
                        </td>            
                      </tr>";
        }

        // Database connection settings
        $host = 'localhost';
        $dbname = 'BE-opdracht1';
        $username = 'root';
        $password = '';

        // Create a new PDO instance
        try {
            $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Query to count rows
            $query = "SELECT COUNT(*) FROM Instructeur";
            $stmt = $db->prepare($query);
            $stmt->execute();

            // Fetch the count
            $row_count = $stmt->fetchColumn();
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $data = [
            'title' => 'Instructeurs in dienst',
            'rows' => $rows,
            'aantal_instructeurs' => $row_count
        ];

        $this->view('Instructeur/overzichtinstructeur', $data);
    }

    public function overzichtVoertuigen($Id)
    {
        $result = $this->instructeurModel->getToegewezenVoertuigen($Id);

        var_dump($result);
    }
}
