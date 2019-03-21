//Switch de panel y perfil
function menuSwitch(n) {
    var subItems = document.getElementsByClassName('subItem');  
    var menuItems = document.getElementsByClassName('menuItem');
    for(var i = 0; i < subItems.length; i++) {
        subItems[i].style.display = 'none';
        menuItems[i].style.background = '';
        menuItems[i].style.color = '#fff';
    }
    subItems[n].style.display = 'block';
    menuItems[n].style.background = '#66ff66';
    menuItems[n].style.color = '#000';
}
function toggleSidebar() {
    var sidebar = document.getElementById('sidebar');
    if (sidebar.style.display === 'none') {
        sidebar.style.display = 'block';
    }
    else
    {
        sidebar.style.display = 'none';
    }
}
function showLogout() {
    document.getElementById("modal").style.display = 'block';
}
function hideLogout() {
    document.getElementById("modal").style.display = 'none';
}