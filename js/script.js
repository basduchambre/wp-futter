import babelPolyfill from 'babel-polyfill'
import Vue from 'vue'
import WPFutter from './WPFutter.vue'

window.onload = function () {
    const options = document.getElementById('WPFutter').getAttribute('data-options');
    const props = JSON.parse(options)
    new Vue({
        el: '#WPFutter',
        render: h => h(WPFutter, {
            props: {
                'hasHandle': props.handle != '' ? true : false,
                'handle': props.handle || 'Fill in your username in the WP Futter settings',
                'amount': props.amount,
                'bg_color': props.bg_color
            }
        })
    });
}