import babelPolyfill from 'babel-polyfill'
import Vue from 'vue'
import WPFutter from './components/WPFutter.vue'

window.onload = function () {
    const instagram = document.getElementById('WPFutter').getAttribute('data-ig');

    new Vue({
        el: '#WPFutter',
        render: h => h(WPFutter, {
            props: {
                'hasHandle': instagram != '' ? true : false,
                'handle': instagram || 'Fill in your username in the WP Futter settings'
            }
        })
    });
}