<?php

class Model {

    public function login($mail, $pass) {
        $db = mysqli_connect("localhost", "root", "", "mydb");
        $query = "SELECT ID, Jmeno FROM uzivatel WHERE Email LIKE('" . $mail . "') AND Password LIKE('" . $pass . "') ";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_row($result);
        if ($row !== NULL) {
            return $row;
        }
        return NULL;
    }

    public function registration($name, $pass, $mail, $genepass) {
        $db = mysqli_connect("localhost", "root", "", "mydb");
        $result = mysqli_query($db, "INSERT INTO uzivatel (ID,  Jmeno,Email, Password,Aktivace,Img,Trener,Adress,City,PSC) VALUES ('','" . $name . "','" . $mail . "', '" . $pass . "','" . $genepass . "', NULL, NULL, NULL, NULL,NULL)");

        return $result;
    }

    public function vypisKurzu() {
        $db = mysqli_connect("localhost", "root", "", "mydb");
        /*  $query = mysqli_query($db, "SELECT Nazev FROM `course`");
          $res = mysqli_fetch_assoc($query);

          return $res;
         */
        $Array = array();

        $query = mysqli_query($db, "SELECT Nazev FROM `course`");

        while ($res = mysqli_fetch_assoc($query)) {
            
            $Array[] = $res['Nazev'];
        }
        return $Array;
    }

}

?>
