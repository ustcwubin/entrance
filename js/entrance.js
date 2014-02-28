$(function() {
  var entrance = $('.entrance-container');
  var entranceInner =  entrance.find('.entrance-inner');

  entrance.hover(function() {
    entrance.addClass('open');
    entranceInner.stop(true).slideDown(200);
  }, function() {
    entrance.removeClass('open');
    entranceInner.stop(true).slideUp(200);
  });
})