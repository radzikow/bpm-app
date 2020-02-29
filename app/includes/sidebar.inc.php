<!-- Sidebar -->
<div id="left" class="sidebar">


  <div class="logo">
    <a href="<?php echo BASE_URL . '/index.php'; ?>">
      <!-- <h1 id="logoText">BPM<span>_</span><span>sys</span></h1> -->
      <img id="logoText" src="<?php echo BASE_URL . '/assets/img/logo.png'; ?>" alt="">
    </a>
  </div>

  <nav>

    <ul>
      <a href="<?php echo BASE_URL . '/app/views/html-controls/html-controls.php'; ?>">
        <li class="<?= $currentPage === 'html-controls' ? 'current-page' : ''; ?>"><i class="fas fa-tasks"></i><span class="sidebar-text">HTML controls</span>
          </li>
      </a>
      <a href="<?php echo BASE_URL . '/app/views/employees/employees.php'; ?>">
        <li class="<?= $currentPage === 'employees' ? 'current-page' : ''; ?>"><i class="fas fa-users"></i><span class="sidebar-text">Employees</span></li>
      </a>
      <a href="<?php echo BASE_URL . '/app/views/invoices/invoices.php'; ?>">
        <li class="<?= $currentPage === 'invoices' ? 'current-page' : ''; ?>"><i class="fas fa-copy"></i><span class="sidebar-text">Invoices</span></li>
      </a>
      <a href="<?php echo BASE_URL . '/app/views/delegations/delegations.php'; ?>">
        <li class="<?= $currentPage === 'delegations' ? 'current-page' : ''; ?>"><i class="fas fa-car"></i><span class="sidebar-text">Delegations</span></li>
      </a>
      <a href="<?php echo BASE_URL . '/app/views/contractors/contractors.php'; ?>">
        <li class="<?= $currentPage === 'contractors' ? 'current-page' : ''; ?>"><i class="fas fa-user-tie"></i><span class="sidebar-text">Contractors</span></li>
      </a>
    </ul>

  </nav>

</div>