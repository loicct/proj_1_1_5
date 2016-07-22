$(function() {

  $('#alertMe').click(function(e) {

    e.preventDefault();

    $('#successAlert').slideDown();

  });

  $('#alertSend').click(function(e) {

    e.preventDefault();

    $('#successAlertSend').slideDown();

  });

  $('a.pop').click(function(e){
    e.preventDefault();
  });

  $('a.pop').popover();

  $('[rel="tooltip"]').tooltip();

});
