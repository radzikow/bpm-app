<?php

include('../../db/db.php');

// Main table on which we work
$table = 'delegations';

// ========================================
// Get all delegations.
// ========================================
$delegations = selectAll($table);
