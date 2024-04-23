function add(){
    if(document.getElementById("add").style.display=="none"){
        document.getElementById("add").style.display="block";
        document.getElementById("del").style.display="none";
        document.getElementById("mod").style.display="none";
    }
    else{
        document.getElementById("add").style.display="none";
        document.getElementById("del").style.display="none";
        document.getElementById("mod").style.display="none";
    }

}
function del(){
    if(document.getElementById("del").style.display=="none"){
        document.getElementById("add").style.display="none";
        document.getElementById("mod").style.display="none";
        document.getElementById("del").style.display="block";
    }
    else{
        document.getElementById("add").style.display="none";
        document.getElementById("del").style.display="none";
        document.getElementById("mod").style.display="none";
    }

}
function mod(){
    if(document.getElementById("mod").style.display=="none"){
        document.getElementById("mod").style.display="block";
        document.getElementById("del").style.display="none";
        document.getElementById("add").style.display="none";
        }
    
    else{
        document.getElementById("add").style.display="none";
        document.getElementById("del").style.display="none";
        document.getElementById("mod").style.display="none";
    }
}
function list(){
    document.getElementById("add").style.display="none";
    document.getElementById("del").style.display="none";
    document.getElementById("mod").style.display="none";
    
}
function modsc(){
    var login =event.target.className;
    document.getElementById("namemod").value=login;
    mod();

}
function delsc(){
    var login =event.target.className;
    document.getElementById("namedel").value=login;
    del();

}