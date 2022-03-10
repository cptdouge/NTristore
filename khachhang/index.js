function lietKe(){
    if( document.getElementById("categories").style.display=='block'){
        document.getElementById("categories").style.display="none";
        document.getElementById("danhmuc").style.background="var(--c3)";
        return;
    }
    document.getElementById("categories").style.display="block";
    document.getElementById("danhmuc").style.background="var(--c2)";

    
}