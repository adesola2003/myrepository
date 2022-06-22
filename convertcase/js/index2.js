function remove() {
    document.getElementById("firsts").value="";    
} 
           

function mores() {

    // get the clock
    var myClock = document.getElementById('more-toolss');
 
    // get the current value of the clock's display property
    var displaySetting = myClock.style.display;
 
    // also get the clock button, so we can change what it says
    var clockButton = document.getElementById('clockButton');
 
    // now toggle the clock and the button text, depending on current state
    if (displaySetting == 'block') {
       // clock is visible. hide it
       myClock.style.display = 'none';
       // // change button text
       // clockButton.innerHTML = 'Show clock';
    }
    else {
       // clock is hidden. show it
       myClock.style.display = 'block';
       // // change button text
       // clockButton.innerHTML = 'Hide clock';
    }
 }
 
 function moress() {
 
    // get the clock
    var myClock = document.getElementById('more-toolsss');
 
    // get the current value of the clock's display property
    var displaySetting = myClock.style.display;
 
    // also get the clock button, so we can change what it says
    var clockButton = document.getElementById('clockButton');
 
    // now toggle the clock and the button text, depending on current state
    if (displaySetting == 'block') {
       // clock is visible. hide it
       myClock.style.display = 'none';
       // // change button text
       // clockButton.innerHTML = 'Show clock';
    }
    else {
       // clock is hidden. show it
       myClock.style.display = 'block';
       // // change button text
       // clockButton.innerHTML = 'Hide clock';
    }
 }

  
 function charcount(textarea){
    var len = textarea.value.length;
    $('#txtcount').text(len);
 
 
    var spaces = textarea.value.match(/\S+/g);
    var words = spaces ? spaces.length : 0;
  
    document.getElementById("lin").innerHTML = words
 
 
 
  
    var textareas = document.getElementById('wordcount');
    var text = textarea.value;
    var lines = text.split("\n");
    var count = lines.length;
    textareas.innerHTML = count;
 } 
 
 
 
 
 
 
 
 
 
 
 
 let star2 = document.getElementById("first")
 var button = document.getElementById('download')
 
 button.addEventListener(`click`,function(e){
    var textareaval = star2.value;
 
 
    var filename = "ConvertCase.html";
    download(textareaval,filename);
 
 });
 function download(textareaval,filename){
    var element = document.createElement('a')
 ;
 
    element.setAttribute('href', `data:text/plain;charset=utf-8,` + encodeURIComponent(textareaval));
 
    element.setAttribute('download', filename);
 
    element.style.display = "none";
 
    document.body.appendChild(element);
 
    element.click()
 
    document.body.removeChild(element)
 }
 
 
   const myinp = document.getElementById("first");
   const btn = document.getElementById("btncopy");
 
   btn.onclick = function(){
    myinp.select();
 
 
    document.execCommand("copy");
   }
   
   function more() {

    // get the clock
    var myClock = document.getElementById('more-tools');

    // get the current value of the clock's display property
    var displaySetting = myClock.style.display;

    // also get the clock button, so we can change what it says
    var clockButton = document.getElementById('clockButton');

    // now toggle the clock and the button text, depending on current state
    if (displaySetting == 'block') {
      // clock is visible. hide it
      myClock.style.display = 'none';
      // // change button text
      // clockButton.innerHTML = 'Show clock';
    }
    else {
      // clock is hidden. show it
      myClock.style.display = 'block';
      // // change button text
      // clockButton.innerHTML = 'Hide clock';
    }
 }

