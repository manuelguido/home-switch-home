//Funcion de Switch del perfil/panel
function menuSwitch(n) {
    var subItems = document.getElementsByClassName('subItem');
    var menuItems = document.getElementsByClassName('menuItem');
    var profileTitle = document.getElementById('profile-title');
    
    for(var i = 0; i < subItems.length; i++) {
        subItems[i].style.display = 'none';
        menuItems[i].style.background = '#fff';
        menuItems[i].style.color = '#121212';
    }
    profileTitle.innerHTML = menuItems[n].innerHTML;
    subItems[n].style.display = 'block';
    menuItems[n].style.background = '#ddd';
    menuItems[n].style.color = '#000';
}

//Función es para cambiar información personal en el perfil/panel
function saveInfo() {
    var x = document.getElementById("saveInfo");
    var y = 'Cancelar <i class="fas fa-times"></i>'
    var z = 'Editar Información <i class="far fa-edit"></i>'
    var inputs = document.getElementsByClassName('personal-input');
    
    if (document.getElementById("editInfo").innerHTML == y) {
        x.style.display = "none";
        document.getElementById("editInfo").innerHTML = z;
        for(var i = 0; i < inputs.length; i++) {
            inputs[i].disabled = true;
        }
    } else {
        x.style.display = "inline";
        document.getElementById("editInfo").innerHTML = y;
        for(var i = 0; i < inputs.length; i++) {
            inputs[i].disabled = false;
        }
    }
}

//Funcion desaparecer/aparecer opciones
$(document).ready(function(){
    $("#showCreditForm").click(function(){
        $("#debitForm").hide();
        $("#creditForm").show();
    });
    $("#showDebitForm").click(function(){
        $("#creditForm").hide();
        $("#debitForm").show();
    });
});

//Modal de cerrar sesión
function showLogout() {
    document.getElementById("modal").style.display = 'block';
}
function hideLogout() {
    document.getElementById("modal").style.display = 'none';
}

//Función de rango de precios
$( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 50000,
      values: [ 50, 10000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
