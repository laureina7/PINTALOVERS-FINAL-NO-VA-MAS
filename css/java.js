// Perfect scrollbar
const myCustomScrollbar = document.querySelector('.my-custom-scrollbar');
const ps = new PerfectScrollbar(myCustomScrollbar);
const scrollbarY = myCustomScrollbar.querySelector('.ps.ps--active-y>.ps__scrollbar-y-rail');
myCustomScrollbar.onscroll = function () {
  scrollbarY.style.cssText = `top: ${this.scrollTop}px!important; height: 288px; right: ${-this.scrollLeft}px`;
}

const $myForm = $('#myForm');

$('#chat').on('click', function () {

  if ($myForm.hasClass('slim') || !$myForm.is(':visible')) {

    $myForm.css('display', 'block');
    $myForm.removeClass('slim');
  };
})

$('#closeButton').not('#toggle').on('click', function () {

  $myForm.hide();
})

$("#toggle").on('click', function () {

  $myForm.toggleClass('slim');
});