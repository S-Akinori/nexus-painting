export const ninjaForm = () => {
  $(document).on('nfFormReady', () => {
    const $nfFieldContainers = $('.nf-field-container');
    $nfFieldContainers.each((index, el) => {
      if(index > 0) {
        $(el).addClass('nf-field-container--before')
      }
      $(el).attr('data-nf-field-container-index', index);
    })
    const $nfFields = $('.ninja-forms-field');
    $nfFieldContainers.first().fadeIn()
    $nfFields.each((index, el) => {
      //iphoneだと電話番号入力で「改行」がないため、入力したら処理する
      if($(el).attr('type') === 'tel') {
        $(el).on('input', (e) => {
          const $this = $(e.currentTarget);
          const $thisFieldWrap = $this.parents('.field-wrap');
          const index = parseInt($this.parents('.nf-field-container').data('nf-field-container-index'))
          const nextIndex = index + 1;
          setTimeout(() => {
            if(!$thisFieldWrap.hasClass('nf-error') && $nfFieldContainers.eq(nextIndex).css('display') === 'none') {
              $nfFieldContainers.eq(nextIndex).fadeIn();
              for(let i=nextIndex; i < $nfFields.length; i++) {
                if($nfFieldContainers.eq(i).find('.ninja-forms-field').attr('required') === undefined) {
                  $nfFieldContainers.eq(i+1).fadeIn();
                } else {
                  break;
                }
              }
            }
          }, 600)
        })
      } else {//それ以外は値変更後に処理
        $(el).on('change', (e) => {
          const $this = $(e.currentTarget);
          const $thisFieldWrap = $this.parents('.field-wrap');
          const index = parseInt($this.parents('.nf-field-container').data('nf-field-container-index'))
          const nextIndex = index + 1;
          setTimeout(() => {
            if(!$thisFieldWrap.hasClass('nf-error') && $nfFieldContainers.eq(nextIndex).css('display') === 'none') {
              $nfFieldContainers.eq(nextIndex).fadeIn();
              for(let i=nextIndex; i < $nfFields.length; i++) {
                if($nfFieldContainers.eq(i).find('.ninja-forms-field').attr('required') === undefined) {
                  $nfFieldContainers.eq(i+1).fadeIn();
                } else {
                  break;
                }
              }
            }
          }, 300)
        })
      }
    })
  })
}