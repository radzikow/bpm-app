// ========================================
// Stop transitions when loading page.
// ========================================
window.addEventListener('load', () => {
  let body = document.getElementById('body');
  body.classList.remove('preload');
});


// ========================================
// Handle question mark button (header section).
// ========================================
const questionMarkBtn = document.getElementById('questionMarkBtn');

questionMarkBtn.addEventListener('click', (event) => {
  event.stopPropagation();
  toggleInfoDiv();
});

function toggleInfoDiv() {
  const infoDiv = document.getElementById('infoDiv');
  if (infoDiv.classList.contains('show')) {
    infoDiv.classList.remove('show');
  } else {
    infoDiv.classList.add('show');
  }
}

window.addEventListener('click', () => {
  if (infoDiv.classList.contains('show')) {
    infoDiv.classList.remove('show');
  }
});


// ========================================
// Show/hide sidebar (sidebar section).
// ========================================
const barsBtn = document.getElementById('barsBtn');

barsBtn.addEventListener('click', () => {

  console.log('btn works');

  var sidebarStatus = localStorage.getItem('sidebarStatus');

  if (sidebarStatus === 'hidden') {
    showSidebar();
  } else if (sidebarStatus === 'opened') {
    hideSidebar();
  } else {
    hideSidebar();
  }

});

function hideSidebar() {
  const sideBar = document.getElementById('left');
  let sidebarText = [...document.getElementsByClassName('sidebar-text')];
  const logoText = document.getElementById('logoText');
  const contentSection = document.getElementById('right');

  sideBar.classList.add('toggle-sidebar');

  sidebarText.forEach((text) => {
    text.classList.add('toggle-sidebar-text')
  });

  logoText.classList.add('toggle-logo');

  contentSection.classList.add('toggle-content-section');

  localStorage.setItem('sidebarStatus', 'hidden');
}

function showSidebar() {
  const sideBar = document.getElementById('left');
  let sidebarText = [...document.getElementsByClassName('sidebar-text')];
  const logoText = document.getElementById('logoText');
  const contentSection = document.getElementById('right');

  sideBar.classList.remove('toggle-sidebar');

  sidebarText.forEach((text) => {
    text.classList.remove('toggle-sidebar-text')
  });

  logoText.classList.remove('toggle-logo');

  contentSection.classList.remove('toggle-content-section');

  localStorage.setItem('sidebarStatus', 'opened');
}


// ========================================
// Change rows background-color when input is focus (invoices table).
// ========================================
var inputs = [...document.querySelectorAll("tr > td > input")];
var selects = [...document.querySelectorAll("tr > td > select")];

for (i = 0; i < inputs.length; i++) {
  let row = inputs[i].parentNode.parentNode;
  inputs[i].addEventListener('focus', (e) => {
    row.classList.add('highlight-row');
  });
  inputs[i].addEventListener('blur', (e) => {
    row.classList.remove('highlight-row');
  });
}

for (i = 0; i < selects.length; i++) {
  let row = selects[i].parentNode.parentNode;
  selects[i].addEventListener('focus', (e) => {
    row.classList.add('highlight-row');
  });
  selects[i].addEventListener('blur', (e) => {
    row.classList.remove('highlight-row');
  });
}


// ========================================
// Select rows with specific numbers (invoices table).
// ========================================
const selectNumbersBtn = document.getElementById('selectNumbersBtn');

let numbersArray = [...document.getElementsByClassName('net-prices-value')];

function showNumbersAbove(numbers, condition) {
  numbers.forEach((item) => {
    let value = parseInt(item.value);
    let row = item.closest('tr');
    if (value > condition) {
      row.classList.add('green-bg');
    }
  });
};

selectNumbersBtn.addEventListener('click', () => {
  showNumbersAbove(numbersArray, 1000);
});