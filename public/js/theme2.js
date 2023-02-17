var menuitems = document.getElementById("menu-list");
      menuitems.style.maxHeight = "0px";
      function togglemenu(){
        if(menuitems.style.maxHeight == "0px"){
          menuitems.style.maxHeight = "200px";
        }
        else{
          menuitems.style.maxHeight = "0px";
        }
      }