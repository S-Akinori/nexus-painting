import $ from './jquery'
import { accordion } from './modules/accordion'
import { forminator } from './modules/forminator';
import { ninjaForm } from './modules/ninjaform';

$(function() {
  const headerHeight = $('header').innerHeight();
  $('main').css('padding-top', headerHeight + 'px');
  accordion();
  forminator();
  ninjaForm();
})