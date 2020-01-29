var txt = document.getElementsByTagName("td");
console.log(txt.length);

function checkUncheck(){
    var checkBox = document.getElementsByTagName("input");
    let j  = 0;
    for(let i=0;i<txt.length;i++){
        if(txt[i].innerText === "YES"){
            checkBox[j].checked = true;
            j++;
        }
        if(txt[i].innerText === "NO"){
            checkBox[j].checked = false;
            j++;
        }
    }
}

checkUncheck();