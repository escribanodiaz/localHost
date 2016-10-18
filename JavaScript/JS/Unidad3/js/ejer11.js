window.onload=function(){
    var hover = document.getElementsByClassName("pau");
    var subme = document.getElementsByClassName("focusend");
    var hijos = document.getElementsByClassName("focusend")[0].children;
    var hijos1 = document.getElementsByClassName("focusend")[1].children;

    hover[0].onmouseover = function(){
      subme[0].style.top = "100%";
      subme[0].style.opacity="1";
    }
    hover[0].onmouseout = function(){
      subme[0].style.opacity="0";
    }


    hover[1].onmouseover = function(){
      subme[1].style.top = "100%";
      subme[1].style.opacity="1";
    }
    hover[1].onmouseout = function(){
      subme[1].style.opacity="0";
    }

    hijos[0].onclick=function(){
      var open = window.open("http://escribanodiaz.com.es/")
    }
    hijos[1].onclick=function(){
      var open = window.open("http://www.w3schools.com/js/js_htmldom_events.asp")
    }

    hijos1[0].onclick=function(){
      var open = window.open("http://www.solvam.es/aulavirtual/mod/page/view.php?id=6169")
    }
    hijos1[1].onclick=function(){
      var open = window.open("http://www.solvam.es/aulavirtual/pluginfile.php/7158/mod_resource/content/0/U3_Slides.pptx.pdf")
    }
}
