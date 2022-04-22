function lietKe(){
    if( document.getElementById("categories").style.display=='block'){
        document.getElementById("categories").style.display="none";
        document.getElementById("danhmuc").style.background="linear-gradient(to right,#01504B,#2B5043)";
        document.getElementById("arrow").style.transform="none";
        return;
    }
    document.getElementById("categories").style.display="block";
    document.getElementById("danhmuc").style.background="var(--c2)";
    document.getElementById("arrow").style.transform="rotate(180deg)";

    
}