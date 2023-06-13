
//---------- js slider--------------------//

var images = ["Images/slider4.jpg",
              "Images/slider2.jpg",
              "Images/slider3.jpg",
              "Images/slider4.jpg",
              "Images/s14.jpg", 
              "Images/s18.jpg",];
var i=0;
                
function slides(){
    document.getElementById("slideimage").src = images[i];
    if(i<(images.length-1))
        i++;
    else
        i=0;
}
setInterval(slides, 3000);            

 /*-------------------js slider end----------------------*/


///-------------login form js -----------------\\\\



// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


/*---------------------About-Us>---------------------------*/




// Open and close sidebar
function openNav() {
  document.getElementById("mySidebar").style.width = "60%";
  document.getElementById("mySidebar").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidebar").style.display = "none";
}


//------------------------- ragistration form--------------------
