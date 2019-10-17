/*Created by Shourya Lala
  15-7-2016 */

    window.onload = function() {
      var ex1 = document.getElementById('venue_close'); 
      var ex2 = document.getElementById('venue_open'); 
      var ex3 = document.getElementById('cb_venue');
      var ex4 = document.getElementById('cb_decor');
      var ex5 = document.getElementById('cb_catering');
      var ex6 = document.getElementById('cb_photography');
      var ex7 = document.getElementById('cb_invites');
      var ex8 = document.getElementById('cb_wedding_band');
      var ex9 = document.getElementById('cb_enter');
      var ex10 = document.getElementById('cb_makeup');



      ex1.disabled = true;
      ex2.disabled = true;      
      ex1.onclick = handler;
      ex2.onclick = handle;
      ex3.onclick = venue;
      ex4.onclick = decor;
      ex5.onclick = catering;
      ex6.onclick = photography;
      ex7.onclick = invites;
      ex8.onclick = wedding_band;
      ex9.onclick = entertainment;
      ex10.onclick = makeup;

    }

    function handler() {
      var ex = document.getElementById('venue_close');      
      if(ex.checked){
          document.getElementById('cb_decor').checked= true;
          decor();
         document.getElementById('cb_decor').disabled= true; 
         document.getElementById('cb_catering').checked = true;
         catering();
         document.getElementById('cb_catering').disabled = true;
      }
    }
    function handle(){
      var ex = document.getElementById('venue_open');      
      if(ex.checked){          
         document.getElementById('cb_decor').disabled= false;         
         document.getElementById('cb_catering').disabled = false;         
         document.getElementById('cb_decor').checked = false;
         decor();
         document.getElementById('cb_catering').checked = false;
         catering();         
      }   
    }
    function venue(){      
      var ex = document.getElementById('cb_venue');      
      var a = document.getElementById('venue_open');
      var b = document.getElementById('venue_close');
      var c = document.getElementById('cb_decor');
      var d = document.getElementById('cb_catering');
      var e = document.getElementById('venue_filter');
      if(ex.checked){
        a.checked= true;
        a.disabled = false;
        b.disabled = false;
        $("#venue_cb").removeClass();
        $("#venue_cb").addClass("selected");       
      }
      else{
        a.checked= false;
        b.checked= false;
        a.disabled = true;
        b.disabled = true;
        if(c.disabled){c.disabled = false;d.disabled=false;}
        $("#venue_cb").removeClass();
        $("#venue_cb").addClass("deselected");        
      }         
    }

    function decor(){
      var a = document.getElementById('cb_decor');
      if(a.checked){
        $("#decor_cb").removeClass();
        $("#decor_cb").addClass("selected");
      }
      else {     
        $("#decor_cb").removeClass();
        $("#decor_cb").addClass("deselected");
      }
    }

    function catering(){
      var a = document.getElementById('cb_catering');
      if(a.checked){
        $("#catering_cb").removeClass();
        $("#catering_cb").addClass("selected");
      }
      else {     
        $("#catering_cb").removeClass();
        $("#catering_cb").addClass("deselected");
      }      
    }

    function photography(){
      var a = document.getElementById('cb_photography');
      if(a.checked){
        $("#photography_cb").removeClass();
        $("#photography_cb").addClass("selected");
      }
      else {     
        $("#photography_cb").removeClass();
        $("#photography_cb").addClass("deselected");
      }      
    }

    function invites(){
      var a = document.getElementById('cb_invites');
      if(a.checked){
        $("#invites_cb").removeClass();
        $("#invites_cb").addClass("selected");
      }
      else {     
        $("#invites_cb").removeClass();
        $("#invites_cb").addClass("deselected");
      }
    }

    function wedding_band(){
      var a = document.getElementById('cb_wedding_band');
      if(a.checked){
        $("#wedding_band_cb").removeClass();
        $("#wedding_band_cb").addClass("selected");
      }
      else {     
        $("#wedding_band_cb").removeClass();
        $("#wedding_band_cb").addClass("deselected");
      }
    }

    function entertainment(){
      var a = document.getElementById('cb_enter');
      if(a.checked){
        $("#enter_cb").removeClass();
        $("#enter_cb").addClass("selected");
      }
      else {     
        $("#enter_cb").removeClass();
        $("#enter_cb").addClass("deselected");
      }
    }

    function makeup(){
      var a = document.getElementById('cb_makeup');
      if(a.checked){
        $("#makeup_cb").removeClass();
        $("#makeup_cb").addClass("selected");
      }
      else {     
        $("#makeup_cb").removeClass();
        $("#makeup_cb").addClass("deselected");
      }
    }


    function validateForm(){
        event.preventDefault();
        var size = document.forms["form1"]["shaadi_size"].value;
        var budget = document.forms["form1"]["budget"].value;
        var date = document.forms["form1"]["txtDate"].value;
        var venue = document.getElementById('cb_venue');
        var decor = document.getElementById('cb_decor');
        var catering = document.getElementById('cb_catering');
        var photo = document.getElementById('cb_photography');
        var invites = document.getElementById('cb_invites');
        var wb = document.getElementById('cb_wedding_band');
        var makeup = document.getElementById('cb_makeup');
        
        if (size == null || size == "") {
          $("#shaadi_size").shake();
          return false;
        }
        if (budget == null || budget == "") {
          $("#budget").shake();
        return false;    
        }
        if (date == null || date=="") {
          $("#txtDate").shake();
        return false;    
        } 
        if(!venue.checked && !decor.checked && !catering.checked && !photo.checked && !invites.checked && !wb.checked && !makeup.checked){
          alert("Atleast one category has to be included");
        }
        else 
        {
          $("#shaadi_size").animate({opacity:0},200,function(){
              $("#budget").animate({opacity:0},200,function(){
                $("#txtDate").animate({opacity:0},200,function(){
                $("#include_id").animate({opacity:0},200,function(){
                  $("#submit_button").animate({opacity:0},200,function(){
                    $("#home_img").animate({"top":-70},400,function(){
                    $("#end").animate({"bottom":0},2000,function(){
                       $("#loader").show().animate({opacity:1},4000,function(){
                        document.forms["form1"].submit(); });
                     });
                   });
                });
                });
              });
            });
          });
        }
     }

  

jQuery.fn.shake = function(intShakes, intDistance, intDuration) {
  
    intShakes = intShakes || 5;
    intDistance = intDistance || 3;
    intDuration = intDuration || 500;
  
    this.each(function() {
        $(this).css("position","relative"); 
        for (var x=1; x<=intShakes; x++) {
        $(this).animate({left:(intDistance*-1)}, (((intDuration/intShakes)/4)))
    .animate({left:intDistance}, ((intDuration/intShakes)/2))
    .animate({left:0}, (((intDuration/intShakes)/4)));
    }
  });
return this;
};

