$(document).ready(function () {
    $('#initial-text').delay(2000).fadeOut(400, function () {
        $('#form').fadeIn(400);
    });


    $('#product-select').change(function() {
        var selectedProduct = $(this).val();
        if (selectedProduct === 'Pump Controller') {
            $('#pump-problem-dropdown').show();
            $('#cctv-problem-dropdown').hide();
        } else if (selectedProduct === 'CCTV') {
            $('#pump-problem-dropdown').hide();
            $('#cctv-problem-dropdown').show();
        }
    });


    var today = new Date().toISOString().split('T')[0];
    $('#date').attr('max', today);

});


//  $(document).ready(function() {
//      $('#Service-form').submit(function(event) {
//          event.preventDefault();
        
//         var name = $('#name').val();
//         var phoneNumber = $('#phoneNumber').val();
//         var email = $('#email').val();
//         var address = $('#address').val();
//         var date = $('#date').val();
//         var file = $('#Invoice-file').val();
//          var product = $('#product-select').val();
//          var problem = '';
//          if (product === 'Pump Controller') {
//              problem = $('#pump-problem-dropdown select').val();
//          } else if (product === 'CCTV') {
//              problem = $('#cctv-problem-dropdown select').val();
//          }
//          var issueDescription = $('textarea[name="Problem"]').val();
        

//         console.log('Name:', name);
//         console.log('Phone Number:', phoneNumber);
//         console.log('Email:', email);
//         console.log('Address:', address);
//         console.log('Date:', date);
//         console.log('File:', file);
//         console.log('Product:', product);
//         console.log('Problem:', problem);
//         console.log('Issue Description:', issueDescription);
//      });
//  });
