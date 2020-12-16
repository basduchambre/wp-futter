import babelPolyfill from 'babel-polyfill'
import Vue from 'vue'
import WPFutter from './WPFutter.vue'

window.onload = function () {
    const element = document.getElementById('WPFutter');

    if ( element ) {
        const options = element.getAttribute('data-options');
        const props = JSON.parse(options)
        new Vue({
            el: '#WPFutter',
            render: h => h(WPFutter, {
                props: {
                    'hasHandle': props.handle != '' ? true : false,
                    'handle': props.handle || 'Fill in your username in the WP Futter settings',
                    'amount': parseInt(props.amount),
                    'bg_color': props.bg_color
                }
            })
        });
    }
}