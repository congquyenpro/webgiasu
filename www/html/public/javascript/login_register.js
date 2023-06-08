const validateEmail = (email) => {
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
  };
function removeAscent (str) {
    if (str === null || str === undefined) return str;
    str = str.toLowerCase();
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    str = str.replace(/đ/g, "d");
    str = str.replaceAll(" ",'');
    return str;
}
function isValid (string) {
    var re = /^[a-zA-Z!@#\$%\^\&*\)\(+=._-]{2,}$/g // regex here
    return re.test(removeAscent(string))
}
function isVietnamesePhoneNumber(number) {
    return /(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/.test(number);
}
const container     = document.querySelector(".container"),
      pwShowHide    = document.querySelectorAll(".showHidePw"),
      pwFields      = document.querySelectorAll(".password"),
      email         = document.getElementById('email-regex'),
      name          = document.getElementById('name-regex'),
      password      = document.getElementById('password-regex'),
      confirm       = document.getElementById('confirm-password-regex'),
      phone         = document.getElementById('phone-regex'),
      Login         = document.getElementById('submit-login'),
      Register      = document.getElementById('register-submit'),
      Register_hires= document.getElementById('register-hires'),
      alertError    = document.getElementById('alert-eros');

    //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                }else{
                    pwField.type = "password";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            }) 
        })
    })
    
    if (Login != null){
        Login.onsubmit = function(event){
            if (validateEmail(email.value) == null){
                event.preventDefault();
                alertError.innerHTML = "Email sai định dạng";
            }
        }
    }else if (Register != null){
        Register.onsubmit = function(event){
            alertError.innerHTML = "";
            if (isValid(name.value) == false){
                event.preventDefault();
                alertError.innerHTML = "Tên sai định dạng";
            }else if (validateEmail(email.value) == null){
                event.preventDefault();
                alertError.innerHTML = "Email sai định dạng";
            }else if(password.value != confirm.value){
                event.preventDefault();
                alertError.innerHTML = "Mật khẩu không trùng";
            }
        }
    }else if (Register_hires != null) {
        Register_hires.onsubmit = function(event){
            alertError.innerHTML = "";
            if (isValid(name.value) == false){
                event.preventDefault();
                alertError.innerHTML = "Tên sai định dạng";
            }else if (validateEmail(email.value) == null){
                event.preventDefault();
                alertError.innerHTML = "Email sai định dạng";
            }else if (!isVietnamesePhoneNumber(phone.value)){
                event.preventDefault();
                alertError.innerHTML = "Số điện thoại sai định dạng";
            }
        }
    }
