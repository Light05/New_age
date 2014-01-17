   $(document).ready(function() {
      $('.ul').roundabout({
         spr1pe: "lazySusan"  
      });
   }); 

    $(document).ready(function() {   
    $('.pr2').hide();   
    $('.pr3').hide();   
    $('.pr5').hide();   
    $('.pr4').hide();  
	
	$('.pr1').fadeIn();  
	
var col_li = 5;	 

var item1 = $('.roundabout-moveable-item1');
 

item1.click(function(){ 	
for (var colpr = 1; colpr <= col_li; colpr++){$('.pr'+colpr).fadeOut(); }
$('.pr1').fadeIn();   
for (var i = 0; i < 10; i++){ 
	clearTimeout(window['id1'+i]);
	clearTimeout(window['id2'+i]);
	clearTimeout(window['id3'+i]);
	clearTimeout(window['id4'+i]);
	clearTimeout(window['id5'+i]);
} 
$('.ul').roundabout("stopAutoplay");
});  

$('.roundabout-moveable-item2').click(function(){ 	
for (var colpr = 1; colpr <= col_li; colpr++){$('.pr'+colpr).fadeOut(); }
$('.pr2').fadeIn();   
for (var i = 0; i < 10; i++){ 
	clearTimeout(window['id1'+i]);
	clearTimeout(window['id2'+i]);
	clearTimeout(window['id3'+i]);
	clearTimeout(window['id4'+i]);
	clearTimeout(window['id5'+i]);
} 
$('.ul').roundabout("stopAutoplay");
});  

$('.roundabout-moveable-item3').click(function(){ 	
for (var colpr = 1; colpr <= col_li; colpr++){$('.pr'+colpr).fadeOut(); }
$('.pr3').fadeIn();   
for (var i = 0; i < 10; i++){ 
	clearTimeout(window['id1'+i]);
	clearTimeout(window['id2'+i]);
	clearTimeout(window['id3'+i]);
	clearTimeout(window['id4'+i]);
	clearTimeout(window['id5'+i]);
} 
$('.ul').roundabout("stopAutoplay");
});  

$('.roundabout-moveable-item4').click(function(){ 	
for (var colpr = 1; colpr <= col_li; colpr++){$('.pr'+colpr).fadeOut(); }
$('.pr4').fadeIn();   
for (var i = 0; i < 10; i++){ 
	clearTimeout(window['id1'+i]);
	clearTimeout(window['id2'+i]);
	clearTimeout(window['id3'+i]);
	clearTimeout(window['id4'+i]);
	clearTimeout(window['id5'+i]);
} 
$('.ul').roundabout("stopAutoplay");
});  

$('.roundabout-moveable-item5').click(function(){ 	
for (var colpr = 1; colpr <= col_li; colpr++){$('.pr'+colpr).fadeOut(); }
$('.pr5').fadeIn();   
for (var i = 0; i < 10; i++){ 
	clearTimeout(window['id1'+i]);
	clearTimeout(window['id2'+i]);
	clearTimeout(window['id3'+i]);
	clearTimeout(window['id4'+i]);
	clearTimeout(window['id5'+i]);
} 
$('.ul').roundabout("stopAutoplay");
});  

var coltime = 0;

var time1 = 15000;
var time3 = 6000;
var time4 = 9000;
var time5 = 12000;
var time2 = 3000;

while (coltime <= 10){	
	
window['id1'+coltime] = setTimeout(function() {
	for (var i = 1; i <= col_li; i++){ 
		$('.pr'+i).fadeOut(); 
	}	
	$('.pr1').fadeIn();
	
	},time1); 	

window['id2'+coltime] = setTimeout(function() {
	for (var i = 1; i <= col_li; i++){ 
		$('.pr'+i).fadeOut(); 
	}	 
	$('.pr2').fadeIn(); 
	
	}, time2); 

window['id3'+coltime] = setTimeout(function() {
	for (var i = 1; i <= col_li; i++){ 
		$('.pr'+i).fadeOut(); 
	}	
	$('.pr3').fadeIn(); 
	
	},time3); 	
	
window['id4'+coltime] = setTimeout(function() {
	for (var i = 1; i <= col_li; i++){ 
		$('.pr'+i).fadeOut(); 
	}	
	$('.pr4').fadeIn(); 
	
	},time4); 	
	
window['id5'+coltime] = setTimeout(function() {
	for (var i = 1; i <= col_li; i++){ 
		$('.pr'+i).fadeOut(); 
	}	
	$('.pr5').fadeIn();
	
	},time5); 	


coltime++;	
time1 +=15000;	
time2 +=15000;	
time3 +=15000;	
time4 +=15000;	
time5 +=15000;	
}	
});    