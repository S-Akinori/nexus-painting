export const forminator = () => {
  // const $rows = $('.forminator-row');
  // const $fields = $('.forminator-field');
  // console.log($rows)
  // $rows.each((index, el) => {
  //   if(index !== 0) $(el).css('display', 'none');
  // })
  // $inputs.on('blur', (e) => {
  //   const $currentTarget = $(e.currentTarget);
  //   if($currentTarget.val()) {
  //     $currentTarget.parents('.forminator-row').next().css('display', 'block')
  //   }
  // })
  $('.forminator-checkbox').on('click', (e) => {
    console.log(e.currentTarget)
    $(e.currentTarget).toggleClass('active');
  })
}