/*
//Filtrer par année
const yearOptions = document.querySelector('#select-year')
yearOptions.addEventListener(
  "click",
  function() {
    let options = yearOptions.querySelectorAll("option")
});

yearOptions.addEventListener(
  "change",
  function() {
    if(yearOptions.value == "2018")
    {
      let abc = document.querySelectorAll('')
    }
});
*/
(function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); // end DOM ready
})(jQuery); // end jQuery
















function filterSelection(y, c) {
  let x, i;
  x = document.getElementsByClassName("row-photo_frame");
  alert('x length : ' + x.length);
  if( x.length % 3 == 2)
   {
     alert('modulo oui');
     x.classList.add("delete-space-between");
   }
   var compteur = 0;
  if (y == "year") y = "";
  if (c == "country") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "hide")

    if (x[i].className.indexOf(y) > -1 && x[i].className.indexOf(c) > -1)
        {
          alert('c trouve');
          compteur++;
          alert('compteur = ' + compteur);
      }
       else {
         //alert('pas trouve');
         w3AddClass(x[i], "hide");


       }
    //w3RemoveClass(x[i], "hide");
    //if (x[i].className.indexOf(y) == -1 && x[i].className.indexOf(c) == -1) w3AddClass(x[i], "hide");
  }
  if( compteur % 3 == 2)
   {
     alert('modulo oui');
     let taber = document.getElementsByClassName("photo-body");
     let taberRowPhotoFrame = document.getElementsByClassName("row-photo_frame");
     for (let i = 0; i<taber.length;i++) {
       taber[i].classList.add("delete-space-between");
     }
     for (let i = 0; i< taberRowPhotoFrame.length;i++) {
       taberRowPhotoFrame[i].classList.add("add-margin");
     }
     /*
     let tabis = document.getElementsByClassName("row-photo_frame");
     for (let i = 0; i<tabis.length;i++) {
       tabis[i].classList.add("delete-space-between");
     }
     */
   }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}
