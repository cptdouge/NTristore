<div class="searchbar-wrapper">
    <div id="search-bar">
        <input type="text" id="search" name="search" placeholder="Tìm kiếm" onkeyup="search(this.value)">
        <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
    </div>
    
    
    <div id="search-content">
        
    </div>
</div>
<script>
    function search(str){
        var string = document.getElementById("search").value;
        if(string.length==0 ){
            document.getElementById("search-content").innerHTML=""
            document.getElementById("search-item").style.height="auto"
            document.getElementById("search-item").style.width="auto"
            document.getElementById("search-content").style.display="flex"
            return;
        }
        var xmlhttp = new XMLHttpRequest()
        xmlhttp.onreadystatechange = function (){
            if (this.readyState == 4 && this.status == 200){
                document.getElementById("search-content").innerHTML=this.responseText
                document.getElementById("search-item").style.height="100%"
                document.getElementById("search-item").style.width="100%"
                document.getElementById("search-content").style.display="flex"
            }
        }
        xmlhttp.open("GET","./pages/search.php?keyword=" + string,true)
        xmlhttp.send()
        
    }
</script>