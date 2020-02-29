<?php

/* ======================================== */

// Available functions for communication with the database:
// selectAll() - get all records
// selectOne() - get one records
// create() - add one record
// update() - update one record by id
// delete() - delete one record by id

/* ======================================== */


require('connect.php');

// ========================================
// Execute the sql statement.
// ========================================
function executeQuery($sql, $data)
{
  global $conn;

  $stmt = $conn->prepare($sql);
  $values = array_values($data);
  $types = str_repeat('s', count($values));
  $stmt->bind_param($types, ...$values);
  $stmt->execute();
  return $stmt;
}


// ========================================
// Select all records from the db.
// ========================================
function selectAll($table, $conditions = []) // conditions are optional
{
  global $conn;
  $sql = "SELECT * FROM $table";

  // Check if there are any conditions
  if (empty($conditions)) {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
  } else {
    // Return records that match conditions
    $i = 0;
    foreach ($conditions as $key) {
      if ($i === 0) {
        $sql .= " WHERE $key=?";
      } else {
        $sql .= " AND $key=?";
      }
      $i++;
    }

    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
  }
}


// ========================================
// Select one record from the db.
// ========================================
function selectOne($table, $conditions) // conditions are required
{
  $sql = "SELECT * FROM $table";

  $i = 0;
  foreach ($conditions as $key => $value) {
    if ($i === 0) {
      $sql .= " WHERE $key=?";
    } else {
      $sql .= " AND $key=?";
    }
    $i++;
  }

  $sql .= " LIMIT 1";
  $stmt = executeQuery($sql, $conditions);
  $records = $stmt->get_result()->fetch_assoc();
  return $records;
}


// ========================================
// Add a new record in the db.
// ========================================
function create($table, $data)
{
  $sql = "INSERT INTO $table SET";

  $i = 0;
  foreach ($data as $key => $value) {
    if ($i === 0) {
      $sql .= " $key=?";
    } else {
      $sql .= ", $key=?";
    }
    $i++;
  }

  $stmt = executeQuery($sql, $data);
  $id = $stmt->insert_id;
  return $id;
}


// ========================================
// Update a record in the db (by id).
// ========================================
function update($table, $id, $data)
{
  $sql = "UPDATE $table SET";

  $i = 0;
  foreach ($data as $key => $value) {
    if ($i === 0) {
      $sql .= " $key=?";
    } else {
      $sql .= ", $key=?";
    }
    $i++;
  }

  $sql .= " WHERE id=?";
  $data['id'] = $id;
  $stmt = executeQuery($sql, $data);
  return $stmt->affected_rows;
}


// ========================================
// Delete a record in the db (by id).
// ========================================

// NOTE: This function is not in use

function delete($table, $id)
{
  $sql = "DELETE FROM $table WHERE id=?";

  $stmt = executeQuery($sql, ['id' => $id]);
  return $stmt->affected_rows;
}
