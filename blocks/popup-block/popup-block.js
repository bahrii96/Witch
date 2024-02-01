(function ($) {

  $(document).ready(function () {
    const popupButton = $('.popup-button');
    if (!popupButton) return;
    $('.popup-button').each(function (index, el) {
      const currentEl = $(this);
      const currentTitle = currentEl.text();
      const nextEl = currentEl.next();
      currentEl.attr('href', '#popup-' + index);
      nextEl.find('.modal').attr('id', 'popup-' + index);
      nextEl.find('.button-popup__title').text(currentTitle);
    })
  })
})(jQuery);

