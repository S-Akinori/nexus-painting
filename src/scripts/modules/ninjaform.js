export const ninjaForm = () => {
  $(document).on('nfFormReady', () => {
    const $nfFieldContainers = $('.nf-field-container')
    const $nfFields = $('.ninja-forms-field');
    let index = 0
    $nfFieldContainers.first().fadeIn()
    $nfFields.on('change', (e) => {
      const $this = $(e.currentTarget);
      if($this.attr('aria-invalid') === 'false') {
        index++;
        $nfFieldContainers.eq(index).fadeIn();
      }
    })
  })
}