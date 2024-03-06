


/*slider image*/

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 2 seconds
}



/*dropdown filter*/
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }


  function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }


/*carousel here-----------*/
  $(".owl-carousel").owlCarousel({
    items: 1,
    nav: true,
    dots: false,
    loop: true,
    center: true,
    margin:15,
    responsive : {
    291 : {
      items:1
    },
    751 : {
      items:2
    },
    1011 : {
      items:3
    }
  }
  });

  /*carousel ends here-----------*/



 
    new WOW().init();
 