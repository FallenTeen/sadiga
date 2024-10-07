import './bootstrap';
import './nav';
import './mainnav';
import 'taos';

document.addEventListener('DOMContentLoaded', () => {
    taos.init();
  });