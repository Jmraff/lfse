<?php

namespace App\Controllers\Backend;


class Upload
{



    public function newUpload($file, $fileName, $fileTmpName, $fileSize, $fileError, $fileType, $fileExt, $fileActualExt, $allowed)
    {





        if (strcmp($fileActualExt, $allowed) == 0) {

            if ($fileError === 0) {
                if ($fileSize < 8000000) {


                    $fileDestination = '/Users/jean-maryraffegeau/Documents/mampfolders/App/uploads/' . $fileName;

                    $result = move_uploaded_file($fileTmpName, $fileDestination);

                    return $fileDestination;
                    // echo "Well Done" . $fileDestination;
                } else {
                    echo "Le fichier dépasse la taille autorisée";
                }
            } else {
                echo  "Une erreur est survenue durant l'import";
            }
        } else {
            echo "Seul le format MP3 est accepté" . $fileActualExt . $allowed;
        }
    }
}
