
//============================
//  Open and close side menu
//============================

function toggleMenu() {
    var x = document.getElementById("slide-menu-container");
    if(x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}


//==================================
//  Open and close registration tabs
//==================================

function openTab(evt, userType) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(userType).style.display = "block";
    evt.currentTarget.className += " active";
  }

