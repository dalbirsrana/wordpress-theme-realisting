
/* ============= CODE FOR MOBILE MENU =============*/ 

const menu_button = document.querySelector('.main-menu-button');

menu_button.addEventListener('click', ()=> {

    document.querySelector('.main-navigation').classList.toggle('active');

});



/* ============= CODE FOR BACK TO TOP BUTTON ==============*/
const pageId = document.querySelector('#page');

document.addEventListener('scroll', ()=> {

    if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
        document.body.classList.add('activate-back-to-top');
    } else {
        document.body.classList.remove('activate-back-to-top');
    }
 
});



/* ============= CODE FOR NEWS LETTER SUBSCRIPTION ============*/
/*=============================================================*/ 
function funxmlhttp() {
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return (xmlhttp); 
}

function $(i) { 
    return document.querySelector(i); 
}


function emailValidation(event) {

    event.preventDefault();

    let val = $('.news-letter-email').value; 
    let url = $('.news-letter-url').value + "/news-letter-signup.php";
    
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(val)) {
        
        xmlhttp = funxmlhttp(); 
        
        xmlhttp.onreadystatechange = function () { 
            
            $('#news-letter-msg').innerHTML = "<span>Processing, Please Wait...</span>"; 
            
            
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
                if (xmlhttp.responseText == 'sent') {
                    $('#news-letter-msg').innerHTML = "<span class='success'>Thanks, e-mail sent successfully.</span>";
                } else {
                    $('#news-letter-msg').innerHTML = "<span class='fail'>Failed to sent mail</span>";
                }
            }
        }

        var urlstring = "recipient=" + val;

        $(".news-letter-submit").disabled = "disabled";

        xmlhttp.open("POST", url, true); 
        
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.send(urlstring);

    } else {

        $('#news-letter-msg').innerHTML = "<span class='fail'>Invalid Email Id</span>";
       
    }

}


const news_letter_submit = $('.news-letter-submit');
news_letter_submit.addEventListener('click', emailValidation );