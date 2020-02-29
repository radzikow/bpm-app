# BPM_sys spp

### Description:
The main view of the application consists of the left and right parts. Navigation is on the left and the content is displayed on the right. Navigation allows you to move between five subpages (html controls, employees table, invoices table, delegations table, contractors table). The application is connected to the database. Some of the subpages have tables with data retrieved from the database (e.g. contractors, invoices). The table with contractors can be updated by adding new records but also deleting and editing existing ones. Every change is visible in the database. Simple validation has been applied when adding and editing contractors. The table with invoices can be updated by directly changing the data in the table and pressing the refresh button on the right (editable cells are: gross amount, quantity and VAT rate).

### Technologies used to create the application:
- HTML5
- CSS3/SCSS
- JavaScript ES6+
- PHP 7
- SQL/MySQL/phpMyAdmin
 
 ### Things to do:
 - Implement asynchronity (adding, removing, editing tables, validation)
 - Add registration and login options
 - Check compatibility on browsers other than Google Chrome and Firefox
 - Improve responsiveness
 - Improve code purity