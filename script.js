$(document).ready(function () {
    $('#englishInput').on('keypress', function (e) {
      const key = e.keyCode || e.which;
      
      if (key === 13) {
        $('#englishInput').val($('#hindiOutput').text());
        $('#hindiOutput').text('');
        $('.select-option').hide();
      } else {
        $('.select-option').show();
      }
  
      const englishText = $('#englishInput').val();
  
      $.ajax({
        url: `https://translate.googleapis.com/translate_a/single?client=gtx&sl=en&tl=hi&dt=t&q=${encodeURI(englishText)}`,
        success: function (result) {
          if (result[0] !== undefined && result[0] !== null) {
            const hindiText = result[0][0][0];
            $('#hindiOutput').text(hindiText);
          } else {
            $('#hindiOutput').text('');
          }
        }
      });
    });
  
    $(document).on('click', '.select-option', function () {
      $('#englishInput').val($('#hindiOutput').text());
      $('#hindiOutput').text('');
    });
  });
  