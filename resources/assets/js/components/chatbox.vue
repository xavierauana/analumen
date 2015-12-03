<style>
    #messagesContainer{
        max-height: 400px;
        overflow-y: scroll;
    }
</style>

<template>
    <div id="messagesContainer" v-show="hasMessage">
        <li v-for="message in list | orderBy 'id' -1"  v-bind:class="isOdd($index)">
            {{message.title}}
        </li>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                url: "http://jsonplaceholder.typicode.com",
                list:[]
            }
        },
        computed:{
            hasMessage: function(){
                return this.list.length > 0
            }
        },
        methods:{
            isOdd: function(number){
                return parseInt(number) % 2 == 0 ? 'left' : "right";
            }
        },
        created: function(){
            let url = this.url+"/posts";
            this.$http.get(url, function(response){
                this.$set('list', response)
            });
        }
    }
</script>