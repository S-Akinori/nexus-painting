export const accordion = () => {
  $('.Accordion__item__title').on('click', (e) => {
    $(e.currentTarget).toggleClass('open')
    $(e.currentTarget).parents('.Accordion__item').find('.Accordion__item__content').slideToggle();
  })
}