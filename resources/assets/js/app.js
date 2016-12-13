//Requires
var Vue = require('vue');
var VueRouter = require('vue-router');

//Uses
Vue.use(VueRouter);
Vue.use(require('vue-resource'));

//Components
import DataBinding from './components/layouts/DataBinding.vue';
import ClassBinding from './components/layouts/ClassBinding.vue';
import Components from './components/layouts/Components.vue';
import LaravelAjaxFilters from './components/layouts/LaravelAjaxFilters.vue';

//Router initializaiton
var router = new VueRouter({

    //Set default class for active links
    linkActiveClass: 'active',

});

//Mapping
router.map({
    '/data-binding': {
        name : 'data-binding',
        component: DataBinding,
    },
    '/class-binding': {
        name : 'class-binding',
        component: ClassBinding,
    },
    '/components-and-props': {
        name : 'components-and-props',
        component: Components,
    },
    '/laravel-ajax-filters': {
        name : 'laravel-ajax-filters',
        component: LaravelAjaxFilters,
    },
});

//Vuejs initialization with router
router.start(Vue.extend({
    data(){
        return {
            title : 'Hello, wellcome...',
        };

    },
}), '#app');
