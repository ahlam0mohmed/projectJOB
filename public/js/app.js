


function search(){
    const uname= document.getElementById("ser");
    var a, filter ,div;

    filter=uname.value.toUpperCase();
    div=document.getElementById("all");
    a=div.getElementsByClassName("j");
    d=div.getElementsByClassName("jo");

    for (let ind = 0; ind < a.length; ind++) {
       txtValue=a[ind].textContent || a[ind].innerText;
       if (txtValue.toUpperCase().indexOf(filter) > -1) {
        d[ind].style.display = "";
      } else {
        d[ind].style.display = "none";
      }
    }
}