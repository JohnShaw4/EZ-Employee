function showHomeTab() {
  if (location.href != "http://localhost/loginsystem/index.php"){
    location.href = "index.php";
  }
}

function showRegisterTab() {
  if (location.href != "http://localhost/loginsystem/next.php"){
    location.href = "next.php";
  }
}

function showLoginTab() {
  if (location.href != "http://localhost/loginsystem/login.php"){
    location.href = "login.php";
  }
}

function showProfileTab() {
  if (location.href != "http://localhost/loginsystem/profile.php"){
    location.href = "profile.php";
  }
}

function openFB() {
   window.open('https://www.facebook.com/profile.php?id=100004018225367');
}

function openTwit() {
   window.open('https://twitter.com/John_Shaw4?lang=en');
}

function openInst() {
   window.open('https://www.instagram.com/?hl=en');
}

function test (first,last,img,email,phone,day,month,year,gender,address1,address2,address3,address4,aboutme,whyhire,vid) {
   user_first = first;
   user_last = last;
   user_file = img;
   user_email = email;
   user_phone = phone;
   user_day = day;
   user_month = month;
   user_year = year;
   user_gender = gender;
   user_address1 = address1;
   user_address2 = address2;
   user_address3 = address3;
   user_address4 = address4;
   user_aboutme = aboutme;
   user_whyhire = whyhire;
   user_vid = vid;
   user_whole = '<img src="includes/uploads/' + user_file + '" height="200" width="250" align="left" hspace=20>';
   user_whole1 = '<font size="20"><strong>' + user_first +  ' ' + user_last + '</font><br><br>';
   user_whole2 =  'E</strong>: ' + user_email + '<br><strong>Ph</strong>: '+ user_phone + '<br><strong>D.O.B</strong>: ' + user_day + '/' + user_month + '/' + user_year + '<br><strong>Gender</strong>: ' + user_gender + '<br><strong>Address</strong>: ' + user_address1;
   user_whole3 = ', ' + user_address2 + ', ' + user_address3 + '. '+ user_address4 + '<br><br><br><p id="otherdetails">' + '<strong>Bio</strong>:<br>' + user_aboutme + '<br><br><strong>Why hire me?</strong>:<br>' + user_whyhire;
   user_whole4 = '<br><br><strong>Video Resume: <br><br><video width="320" height="240" controls>' + '<source src="includes/uploads/' + user_vid + '" type="video/mp4">Your browser does not support this video tag.</video>';
   document.getElementById("showProfile").innerHTML = user_whole + user_whole1 + user_whole2 + user_whole3 + user_whole4;
}

function togglecheckboxes(master,group){
  var cbarray = document.getElementsByClassName(group);
  for(var i = 0; i < cbarray.length; i++){
    var cb = document.getElementById(cbarray[i].id);
    cb.checked = master.checked;
  }
}

function openFB() {
   window.open('https://www.facebook.com/profile.php?id=100004018225367');
}

function openTwit() {
   window.open('https://twitter.com/John_Shaw4?lang=en');
}

function openInst() {
   window.open('https://www.instagram.com/?hl=en');
}


function showNorthShore(){
    var x = document.getElementById("NorthShore");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}


function showWaitakere(){
    var x = document.getElementById("Waitakere");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function showWaiheke(){
    var x = document.getElementById("Waiheke");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function showHauraki(){
    var x = document.getElementById("Hauraki");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function showPapakura(){
    var x = document.getElementById("Papakura");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function showAuklandCity(){
    var x = document.getElementById("AucklandCity");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function showFranklin(){
    var x = document.getElementById("Franklin");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function showManukau(){
    var x = document.getElementById("Manukau");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

              