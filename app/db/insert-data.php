<?php

/* ======================================== */

//  NOTE: The purpose of this file is to insert example data to the db tables. You don't need to run this file.

/* ======================================== */


require('connect.php');

// ========================================
// Create database
// ========================================
// NOTE: Change below to TRUE if you want to add records to the tables!
if (false) {

  $sql_contractors_data = "INSERT INTO contractors (`nip`, `regon`, `name`, `vat`, `street`, `num1`, `num2`, `status`) VALUES (2147483647, 123456789, 'Mastertax', 1, 'Poznanska', 15, 2, 1), (2147483647, 456789123, 'ABC Company', 0, 'Kierska', 8, 5, 1), (2147483647, 987654321, 'Investi', 1, 'Glogowska', 82, 4, 1), (1212121212, 123456789, 'Propertie Management', 1, 'Batorego', 32, 1, 1), (2147483647, 456123789, 'Budimax', 0, 'Bukowska', 12, 1, 1), (1111111111, 222222222, 'Nazwa', 1, 'Ulica', 12, 1, 0);";

  if ($conn->query($sql_contractors_data) === TRUE) {
    echo "Records inserted successfully to the 'contractors' table";
    echo "<br>";
  } else {
    die("Error occured while inserting data to the 'contractors' table. " . $conn->error);
    echo "<br>";
  }

  $sql_delegations_data = "INSERT INTO delegations (`name`, `date_from`, `date_to`, `city_from`, `city_to`) VALUES ('Jan Kowalski', '2019-06-03', '2019-06-06', 'Poznan', 'Wroclaw'), ('Anna Nowak', '2019-07-13', '2019-07-20', 'Warszawa', 'Berlin'), ('Kuba Wisniewski', '2019-09-05', '2019-09-18', 'Poznan', 'Krakow'), ('Sebastian Duda', '2019-10-02', '2019-10-07', 'Poznan', 'Warszawa'), ('Adam Lewandowski', '2019-10-21', '2019-11-20', 'Warszawa', 'Berlin'), ('Radoslaw Bura', '2019-04-01', '2019-04-04', 'Poznan', 'Szczecin');";

  if ($conn->query($sql_delegations_data) === TRUE) {
    echo "Records inserted successfully to the 'delegations' table";
    echo "<br>";
  } else {
    die("Error occured while inserting data to the 'delegations' table. " . $conn->error);
    echo "<br>";
  }

  $sql_invoices_data = "INSERT INTO invoices (`description`, `mpk`, `net`, `vat_id`, `quantity`) VALUES ('Zakup artykulow biurowych', 'Rejestracja', 333.33, 3, 1), ('Zakup drukarki', 'Dzial Ksiegowosci', 3200.00, 3, 1), ('Spotkanie biznesowe', 'Dzial Sprzedazy', 150.11, 2, 3), ('Abonamet telefon', 'Dzial Zakupow', 48.50, 4, 7), ('Wizytowki', 'Dzial Personalny', 140.00, 5, 2), ('Samochod', 'Dzial Sprzedazy', 25000.00, 3, 1);";

  if ($conn->query($sql_invoices_data) === TRUE) {
    echo "Records inserted successfully to the 'invoices' table";
    echo "<br>";
  } else {
    die("Error occured while inserting data to the 'invoices' table. " . $conn->error);
    echo "<br>";
  }

  $sql_vat_data = "INSERT INTO vat (`rate`) VALUES ('0'), ('3'), ('8'), ('23'), ('ZW'), ('NP.');";

  if ($conn->query($sql_vat_data) === TRUE) {
    echo "Records inserted successfully to the 'vat' table";
    echo "<br>";
  } else {
    die("Error occured while inserting data to the 'vat' table. " . $conn->error);
    echo "<br>";
  }
}

// $conn->close();
