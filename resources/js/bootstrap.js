import axios from 'axios';
window.axios = axios;
import Alpine from 'alpinejs'
import anchor from '@alpinejs/anchor'

Alpine.plugin(anchor)

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
