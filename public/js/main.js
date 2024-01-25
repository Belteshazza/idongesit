$('#reload').click(function () {
  $.ajax({
    type: 'GET',
    url: 'formation-plate-test/reload-captcha',
    success: function (data) {
      $(".captcha span").html(data.captcha);
      $(".captcha").load(window.location.href + " .captcha");
    }
  });
});
