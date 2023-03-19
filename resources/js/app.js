import './bootstrap';
import '../sass/app.scss';
import '../sass/template/dark.scss';
import '../sass/template/responsive.scss';
import '../sass/template/style.scss';
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

import 'flatpickr/dist/flatpickr.min.css';
import flatpickr from 'flatpickr';
import {de as German} from 'flatpickr/dist/l10n/de.js';

flatpickr("#datepicker", {
  locale: 'de',
});