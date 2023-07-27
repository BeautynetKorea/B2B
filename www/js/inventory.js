$(document).ready(function() {

}).on('change', '.requirements select', function() {
  let target = $(this).attr('aria-target');
  let idx = 0;

  if ( $(target).length ) {
    if ( $(target).find('.requirement-item').length ) {
      idx = $(target).find('.requirement-item').data('idx') + 1;
    }

    if ( !$(this).children('option:selected').attr('aria-appended') ) {
      $(this).children('option:selected').attr('aria-appended', true);

      $(target).append(
        $("<div/>").addClass('requirement-item').attr('data-idx', idx)
                  .append($('<input/>').attr('type', 'hidden').attr('name', 'requirement[' + idx + '][requirement_id]').val($(this).children('option:selected').val()))
                  .append($('<label/>').addClass('w-20').text($(this).children('option:selected').text()))
                  .append($('<textarea/>').addClass('w-80').attr('name', 'requirement[' + idx + '][requirement_detail]').attr('placeholder', $(this).children('option:selected').data('placeholder')))
      );
    }
  }
})