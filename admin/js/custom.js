function ShowMenu(){  // none -> hidden, block -> show 
    if(document.getElementById('submenu').style.display == 'block'){
        document.getElementById('submenu').style.display = 'none';
        document.getElementById('drop').className = 'fas fa-angle-right';
    }else{
        document.getElementById('submenu').style.display = 'block';
        document.getElementById('drop').className = 'fas fa-angle-down';
    }
}