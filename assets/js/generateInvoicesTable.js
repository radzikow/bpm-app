let invoices = [{
  lp: 1,
  description: 'Zakup materiałów biurowych.',
  mpk: 'Dział Zakupów',
  net: 195.00,
  quantity: 2.00,
  vat: 23.00,
  gross: 0,
  totalNet: 0,
  totalGross: 0
},
{
  lp: 2,
  description: 'Zakup materiałów biurowych.',
  mpk: 'Dział Zakupów',
  net: 195.00,
  quantity: 2.00,
  vat: 23.00,
  gross: 0,
  totalNet: 0,
  totalGross: 0
},
{
  lp: 3,
  description: 'Zakup materiałów biurowych.',
  mpk: 'Dział Zakupów',
  net: 195.00,
  quantity: 2.00,
  vat: 23.00,
  gross: 0,
  totalNet: 0,
  totalGross: 0
},
{
  lp: 4,
  description: 'Zakup materiałów biurowych.',
  mpk: 'Dział Zakupów',
  net: 195.00,
  quantity: 2.00,
  vat: 23.00,
  gross: 0,
  totalNet: 0,
  totalGross: 0
},
{
  lp: 5,
  description: 'Zakup materiałów biurowych.',
  mpk: 'Dział Zakupów',
  net: 195.00,
  quantity: 2.00,
  vat: 23.00,
  gross: 0,
  totalNet: 0,
  totalGross: 0
}
];

function invoiceOperations(invoice) {
invoice.gross = (invoice.net * invoice.vat) + invoice.net;

invoice.totalNet = invoice.net * invoice.quantity;

invoice.totalGross = invoice.gross * invoice.quantity;
}

invoiceOperations(invoices[0]);
invoiceOperations(invoices[1]);
invoiceOperations(invoices[2]);
invoiceOperations(invoices[3]);
invoiceOperations(invoices[4]);


// Generate table
function createTable() {
let table = document.getElementById("table");
let tbody = document.createElement("tbody");

let tdNumber = Object.keys(invoices[0]).length;

// Rows
for (let i = 0; i < invoices.length; i++) {
  let tr = document.createElement('tr');

  // Cells
  for (let j = 0; j < tdNumber; j++) {
    let td = document.createElement('td');

    let keys = Object.keys(invoices[i]);

    td.classList.add('td' + j);

    td.innerText = invoices[i][keys[j]];

    tr.appendChild(td);
  }
  tbody.appendChild(tr);
}
table.appendChild(tbody);
console.log(tbody);
}
createTable();


// Add attributes to table cells
let editableCell1 = [...document.getElementsByClassName('td3')];
let editableCell2 = [...document.getElementsByClassName('td4')];
let editableCell3 = [...document.getElementsByClassName('td5')];

console.log(editableCell1);

for (let i = 0; i < editableCell1.length; i++) {
// Net cells
editableCell1[i].setAttribute("contenteditable", "true");

// Vat rate cells
editableCell2[i].setAttribute("contenteditable", "true");

// Gross cells
editableCell3[i].setAttribute("contenteditable", "true");
}

