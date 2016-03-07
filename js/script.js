var nxtsite = 0;

function moveindex(elem) {
  var left = -15
  function frame() {
    left++  // update parameters
    elem.style.left = left + '%' // show frame
    
    if (left == 0)  // check finish condition
      clearInterval(id)
  }
  var id = setInterval(frame, 1) // draw every 10ms
}


function movebackindex(elem) {
  var left = 0
  function frame() {
    left--  // update parameters
    elem.style.left = left + '%' // show frame
    
    if (left == -15)  // check finish condition
      clearInterval(id)
  }
  var id = setInterval(frame, 1) // draw every 10ms
}


function nextsiteindex(number) {
  nxtsite=number;
  switch(number){
    case 1: document.body.style.backgroundColor = "rgb(229, 125, 4)";
    break;
    
    case 2: document.body.style.backgroundColor = "rgb(220, 0, 48)";
    break;
    
    case 3: document.body.style.backgroundColor = "rgb(177, 0, 88)";
    break;
    
    case 4: document.body.style.backgroundColor = "rgb(124, 55, 138)";
    break;
    
    case 5: document.body.style.backgroundColor = "rgb(52, 101, 170)";
    break;
    
    case 6: document.body.style.backgroundColor = "rgb(9, 162, 117)";
    break;
    
    case 7: document.body.style.backgroundColor = "rgb(124, 184, 84)";
    break;
    
    case 8: document.body.style.backgroundColor = "green";
    break;
    
  }
  
  var left = 0
  function frame() {
    left++ // update parameters
    document.body.style.left = left + '%' // show frame
    
    if (left == 100){
        clearInterval(id)
        
        nextsite(nxtsite)
        
    }  // check finish condition
      
      
  }
  var id = setInterval(frame, 1) // draw every 10ms
  
}


/-------------------------------------------------------------------------------------------------------------/


function move(elem) {
  var right = -15
  function frame() {
    right++  // update parameters
    elem.style.right = right + '%' // show frame
    
    if (right == 0)  // check finish condition
      clearInterval(id)
  }
  var id = setInterval(frame, 1) // draw every 10ms
}


function moveback(elem) {
  var right = 0
  function frame() {
    right--  // update parameters
    elem.style.right = right + '%' // show frame
    
    if (right == -15)  // check finish condition
      clearInterval(id)
  }
  var id = setInterval(frame, 1) // draw every 10ms
}


/-------------------------------------------------------------------------------------------------------------/

var r1, r2 ,g1, g2, b1, b2;
var j, n;
var temp = "";
var fmTimer = null;
var bgcolor = " ";
var next = 0;
function fminit(fma1, fma2, fma3, fma4, fma5, fma6, nextsite){
r1 = fma1;
g1 = fma2;
b1 = fma3;
r2 = fma4;
g2 = fma5;
b2 = fma6;
next = nextsite;
fmFade();
}

function fmFade(){ 
  console.log("test5");
  bgcolor = " "
   bgcolor = "#" + r1.toString(16) + g1.toString(16) + b1.toString(16);
document.getElementById('wuergercontent').style.backgroundColor = bgcolor;

if (r1 != r2){
if (r2 > r1){r1++;}
else{r1--;}}
if (g1 != g2){
if (g2 > g1){g1++;}
else{g1--;}}
if (b1 != b2){
if (b2 > b1){b1++;}
else{b1--;}}
if ((r1 == (r2 + 17)) && (g1 == (g2 +17)) && (b1 == b2 +17)){
window.clearTimeout(fmTimer);
nexsite(next);
}
else{
fmTimer = window.setTimeout("fmFade()",10);
}
}

function nextsite(site){
  switch(site){
          case 1: window.location.href = "notaewuerger.php";
          break;
          
          case 2: window.location.href = "neumitglied.php";
          break;
          
          case 3: window.location.href = "tour.php";
          break;
          
          case 4: window.location.href = "sound.php";
          break;
          
          case 5: window.location.href = "fotos.php";
          break;
          
          case 6: window.location.href = "chaosgala.php";
          break;
          
          case 7: window.location.href = "links.php";
          break;
          
          case 8: window.location.href = "contact.php";
          break;
          
          case 9: window.location.href = "index.php";
          
    }
}