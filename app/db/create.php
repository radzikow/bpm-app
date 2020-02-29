<?php

/* ======================================== */

//  NOTE: The purpose of this file is to create a database and tables necessary for the proper operation of the application. Use this file only once when installing the application.

/* ======================================== */


require('connect.php');

// ========================================
// Create database
// ========================================
// NOTE: Change below to TRUE if you want to create a new database and tables!

// Create tables
if (false) {

    // global $conn;

    // ========================================
    // Create tables
    // ========================================

    // ========= "contractors" table ========= //
    $sql_contractors_table = "CREATE TABLE contractors (
            `id` int(11) AUTO_INCREMENT PRIMARY KEY,
            `nip` int(11) NOT NULL,
            `regon` int(11) NOT NULL,
            `name` varchar(128) NOT NULL,
            `vat` tinyint(1) NOT NULL,
            `street` varchar(128) NOT NULL,
            `num1` int(11) NOT NULL,
            `num2` int(11) NOT NULL,
            `status` tinyint(1) NOT NULL
          )";

    if ($conn->query($sql_contractors_table) === TRUE) {
        echo "Table 'contractors' created successfully";
        echo "<br>";
    } else {
        die("Database connection error while creating 'contractors' table. " . $conn->error);
        echo "<br>";
    }

    // ========= "delegations" table ========= //
    $sql_delegations_table = "CREATE TABLE delegations (
            `id` int(11) AUTO_INCREMENT PRIMARY KEY,
            `name` varchar(128) NOT NULL,
            `date_from` date NOT NULL,
            `date_to` date NOT NULL,
            `city_from` varchar(128) NOT NULL,
            `city_to` varchar(128) NOT NULL
          )";

    if ($conn->query($sql_delegations_table) === TRUE) {
        echo "Table 'delegations' created successfully";
        echo "<br>";
    } else {
        die("Database connection error while creating 'delegations' table. " . $conn->error);
        echo "<br>";
    }

    // ========= "invoices" table ========= //
    $sql_invoices_table = "CREATE TABLE invoices (
            `id` int(11) AUTO_INCREMENT PRIMARY KEY,
            `description` varchar(255) NOT NULL,
            `mpk` varchar(255) NOT NULL,
            `net` decimal(6,2) NOT NULL,
            `vat_id` int(11) DEFAULT NULL,
            `quantity` int(11) NOT NULL
          )";

    if ($conn->query($sql_invoices_table) === TRUE) {
        echo "Table 'invoices' created successfully";
        echo "<br>";
    } else {
        die("Database connection error while creating 'invoices' table. " . $conn->error);
        echo "<br>";
    }

    // ========= "vat" table ========= //
    $sql_vat_table = "CREATE TABLE vat (
            `id` int(11) AUTO_INCREMENT PRIMARY KEY,
            `rate` varchar(128) NOT NULL
          )";

    if ($conn->query($sql_vat_table) === TRUE) {
        echo "Table 'vat' created successfully";
        echo "<br>";
    } else {
        die("Database connection error while creating 'vat' table. " . $conn->error);
        echo "<br>";
    }

    // ========= "users" table ========= //

    // TODO: create 'users' table

} else {
    die("Database connection error while creating database (check if db name already exists). " . $conn->error);
    echo "<br>";
}

// $conn->close();
