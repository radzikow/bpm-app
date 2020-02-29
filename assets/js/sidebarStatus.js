var sidebarStatus = localStorage.getItem('sidebarStatus');

console.log('Localstorage status:', sidebarStatus);

if (sidebarStatus === 'hidden') {
  hideSidebar();
} else if (sidebarStatus === 'opened') {
  showSidebar();
}
