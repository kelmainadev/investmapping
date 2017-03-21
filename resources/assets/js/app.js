require('./bootstrap');




//
// new Vue({
//    el:'#app',
//     data:{message:'Investment Mapping'},
//     filters:{
//        reverse: require('./filters/reverse')
// }
// });



/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
// //
// const app = new Vue({
//     el: '#app',
//     data:{message:'Investment Mapping'}

// })
 Vue.component('forms',require('./components/welcome.vue'));

 const forms =new Vue({
     el: '#forms',
     data: {
         message: 'this is a vue component form',
         todos: [
             { text: 'Laravel' },
             { text: 'Vuejs' },
             { text: 'Javascript' }
         ]
     }
 });
Vue.component('todo-item', {
    props: ['todo'],
    template: '<li>{{ todo.text }}</li>'
});

