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
const email         = document.getElementById('email-regex'),
    name            = document.getElementById('name-regex'),
    phone           = document.getElementById('phone-regex'),
    boxView         = document.getElementById('box-view'),
    errorMessage    = document.getElementById('error-message'),
    boxEdit         = document.getElementById('box-edit');
    
function changeView(){
    boxView.classList.toggle('hidden');
    boxEdit.classList.toggle('hidden');
}

boxEdit.onsubmit = function(event){
    errorMessage.textContent = "";
    name.classList.remove('error-message-input');
    email.classList.remove('error-message-input');
    phone.classList.remove('error-message-input');
    if (isValid(name.value) == false){
        event.preventDefault();
        name.classList.add('error-message-input');
        errorMessage.textContent = "Tên nhập sai định dạng (a-z)";
    }else if (validateEmail(email.value) == null){
        event.preventDefault();
        email.classList.add('error-message-input');
        errorMessage.textContent = "Email sai định dạng";
    }else if (isVietnamesePhoneNumber(phone.value) == false){
        event.preventDefault();
        phone.classList.add('error-message-input');
        errorMessage.textContent = "Số điện thoại sai định dạng";
    }
}