var checkuser = false;
var check = false;
function checkusername(str){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            if (this.responseText !== '') {
                checkuser = false;
            } else checkuser = true;
        }
        document.getElementById('alert').innerText = this.responseText;
    }
    xmlhttp.open("GET", "xulyusername.php?u=" + str, true);
    xmlhttp.send();
}


function formcheck(){

    var id =document.getElementById("username").value;
    var pwd = document.getElementById("pwd").value;
    var confirmpwd = document.getElementById("confirmpwd").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;

    let pwdpattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/;
    let emailpattern = /.*@gmail.com/;
    let phonepattern = /[0-9]{10,12}/;


    if(id == "" || pwd == "" || confirmpwd == "" || name == ""||
    email == ""|| phone == ""|| address == ""){
        alert("Vui lòng nhập đầy đủ thông tin!");
        return check;
    }
    else if(id.includes(" ") || !id.slice(0,1).match(/^[a-z]/)){
        alert("Tên đăng nhập không có khoảng trắng và bắt đầu bằng 1 kí tự!");
        return check;
    }
    else if(!pwd.match(pwdpattern)){
        alert("Mật khẩu phải từ 8-16 kí tự, có kí tự, kí số và kí tự đặc biệt, có chữ hoa và thường và không chứa tên người dùng");
        return check;
    }
    else if(!confirmpwd.match(pwd)){
        alert("Nhập lại mật khẩu không trùng khớp!");
        return check;
    }
    else if(!email.match(emailpattern)){
        alert("Email phải có dạng user@gmail.com!");
        return check;
    }
    else if(!phone.match(phonepattern)){
        alert("Số điện thoại phải có 10-12 kí số!");
        return check;
    }
    else if(checkuser==false){
        return check;
    }
    else{
        alert("Đăng ký thành công!");
        check = true;
        return check;
    }
}