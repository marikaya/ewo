require('./bootstrap');


// Require Froala Editor js file.
require('froala-editor/js/froala_editor.pkgd.min');

// Require Froala Editor css files.
require('froala-editor/css/froala_editor.pkgd.min.css');
require('font-awesome/css/font-awesome.css');
require('froala-editor/css/froala_style.min.css');

// Import and use Vue Froala lib.
import VueFroala from 'vue-froala-wysiwyg'


window.Vue = require('vue');

Vue.use(VueFroala);
Vue.component('text-editor', require('./components/TextEditor.vue'));
Vue.component('entry', require('./components/Entry.vue'));
Vue.component('entry-lister', require('./components/EntryLister.vue'));
Vue.component('topic-list', require('./components/TopicList.vue'));
Vue.component('topic-header', require('./components/TopicHeader.vue'));


const app = new Vue({
    el: '#app'
});
