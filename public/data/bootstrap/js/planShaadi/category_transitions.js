var myIndex = 0;
var myIndexx = 0;
var decor_index = 0;
var ent_index = 0;
var time = 0;
var ent_time = 0;
var wedding_index = 0;
var invite_index = 0;
var muIndex = 1;


function slide_decor() {
    var i;
    var x = document.getElementsByClassName("decor_img");        
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(slide_decor, 2000); // Change image every 2 seconds
}

function slide_wedding() {
    var i;
    var x = document.getElementsByClassName("wb_img");        
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    wedding_index++;
    if (wedding_index > x.length) {wedding_index = 1}
    x[wedding_index-1].style.display = "block";
    setTimeout(slide_wedding, 2000); // Change image every 2 seconds
}
function plusDivs(n) {
     var x = document.getElementsByClassName("makeup");    
        slide_makeup(muIndex+=n);    
  
}

function slide_makeup(n) {
  var i;
  var x = document.getElementsByClassName("makeup");
  
  if (n > x.length) {muIndex = 1}
  if (n < 1) {muIndex = x.length}    
     
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";     
  }
  x[muIndex-1].style.display = "block";  
  
}


function slide_photo_under() {
    var i;
    var x = document.getElementsByClassName("photo_under");    
    
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
   
    }
    myIndexx++;
    if (myIndexx > x.length) {myIndexx = 1}
    x[myIndexx-1].style.display = "block";
    setTimeout(slide_photo_under, 2000); // Change image every 2 seconds
}
function slide_photo_over() {
    var i;
    var x = document.getElementsByClassName("photo_over");    
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndexx++;
    if (myIndexx > x.length) {myIndexx = 1}
    x[myIndexx-1].style.display = "block";
    setTimeout(slide_photo_over, 3000); // Change image every 2 seconds
}
function slide_decor_img1() {
    var i;    
    var x = document.getElementsByClassName("decor_img1");      
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    decor_index++;
    if (decor_index > x.length) {decor_index = 1}
    x[decor_index-1].style.display = "block";
    if(time==0){
    setTimeout(slide_decor_img1, 4000); 
    time++;
    }
    else
        setTimeout(slide_decor_img1,5000);
}
function slide_decor_img2() {
    var i;
    var x = document.getElementsByClassName("decor_img2");    
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    decor_index++;
    if (decor_index > x.length) {decor_index = 1}
    x[decor_index-1].style.display = "block";
    if(time == 1){
    setTimeout(slide_decor_img2, 4100); // Change image every 2 seconds
    time++;
    }
    else 
        setTimeout(slide_decor_img2,5000);
}
function slide_decor_img3() {
    var i;
    var x = document.getElementsByClassName("decor_img3");    
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    decor_index++;
    if (decor_index > x.length) {decor_index = 1}
    x[decor_index-1].style.display = "block";
    if(time == 2){
    setTimeout(slide_decor_img3, 4200); // Change image every 2 seconds        
    time++;
    }
    else
        setTimeout(slide_decor_img3,5000);
}

function slide_invite_img1() {
    var i;
    var x = document.getElementsByClassName("invite_1");    
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    invite_index++;
    if (invite_index > x.length) {invite_index = 1}
    x[invite_index-1].style.display = "block";
    setTimeout(slide_invite_img1, 4000); // Change image every 2 seconds        
}
function slide_invite_img3() {
    var i;
    var x = document.getElementsByClassName("invite_4");    
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }    
    invite_index++;
    if (invite_index > x.length) {invite_index = 1}
    x[invite_index-1].style.display = "block";
    setTimeout(slide_invite_img3, 5000); // Change image every 2 seconds    
}


function slide_ent_img1() {
    var i;    
    var x = document.getElementsByClassName("ent_img1");      
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    ent_index++;
    if (ent_index > x.length) {ent_index = 1}
    x[ent_index-1].style.display = "block";
    if(ent_time==0){
    setTimeout(slide_ent_img1, 4000); 
    ent_time++;
    }
    else
        setTimeout(slide_ent_img1,5000);
}
function slide_ent_img2() {
    var i;    
    var x = document.getElementsByClassName("ent_img2");      
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    ent_index++;
    if (ent_index > x.length) {ent_index = 1}
    x[ent_index-1].style.display = "block";
    if(ent_time==1){
    setTimeout(slide_ent_img2, 4100); 
    ent_time++;
    }
    else
        setTimeout(slide_ent_img2,5000);
}
function slide_ent_img3() {
    var i;    
    var x = document.getElementsByClassName("ent_img3");      
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    ent_index++;
    if (ent_index > x.length) {ent_index = 1}
    x[ent_index-1].style.display = "block";
    if(ent_time==2){
    setTimeout(slide_ent_img3, 4200); 
    ent_time++;
    }
    else
        setTimeout(slide_ent_img3,5000);
}


function sendemail(){
    
    var name = document.getElementById("name_id");
    var mobile = document.getElementById("mobile_id");
    if (name.value.length==0) {                
        name.focus();
        alert("Please enter your name");
        return false;    
        } 
    if(mobile.value.length==0 || mobile.value.length<10){
        alert("Please enter your correct Mobile no.");
        mobile.focus();
        return false;
        }
    else if(mobile.value.length>=11){
                alert("Mobile no. is not correct");
                mobile.focus();
                return false;
            }
    /*var i = 0;
    for (i = 0; i < mobile.value.length; i++) {
        var number = false;
        var ascii = mobile.value.charCodeAt(i);
        if (ascii >= 49 && ascii <= 57) {
            number = true;
        }
        if (number == false) {
        alert("mobile no should be valid");
        mobile.focus();
        mobile.value = "";
        return false;
        }
   }  */              
        
    else{    
        alert("Thank You. We will contact you shortly");
        return true;
        
    }
}

