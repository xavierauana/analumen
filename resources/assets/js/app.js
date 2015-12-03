/**
 * Created by Xavier on 3/12/15.
 */
var Vue = require('vue');

Vue.use(require('vue-resource'));

import Chatbox from "./components/chatbox.vue";

new Vue({
   el: "body",
    components:{ Chatbox },
    data:{
      list:[]
    },
    ready: function(){
        console.log('vue ready');
    }
});