$(document).ready(function(){
        $('#search_box').keyup(function() {
            var valu = $(this).val();
            if (valu != '') {
                $("#search_box").autocomplete({
                    source: function (request, response) {
                        $.ajax({
                            type: "POST",
                            url: 'site/ajax',
                            headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
                            dataType: "json",
                            data: {"ar": valu},
                            success: function (data) {
                                response(data);
                            }
                        });
                    }
                });
            }
        });
    $('#search_b').keyup(function() {
        var valu = $(this).val();
        if (valu != '') {
            $("#search_b").autocomplete({
                source: function (request, response) {
                    $.ajax({
                        type: "POST",
                        url: '../site/ajax',
                        headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
                        dataType: "json",
                        data: {"ar": valu},
                        success: function (data) {
                            response(data);
                        }
                    });
                }
            });
        }
    });
    
    
  $('#contactForm').submit(function(e){
    e.preventDefault();
    $("#submit").hide();
    var name =$("input#name").val();
    var email =$("input#email").val();
    var phone =$("input#phone").val();
    var message =$("textarea#message").val();
    $.ajax({
     type:"POST",
     url:"Email_data",
     headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
     dataType:'json',
     data:{ name1: name,email1: email,phone1: phone,msg: message},
     success: function (data) {
         alert('done');
     }

    });
   }); 
    
});

    