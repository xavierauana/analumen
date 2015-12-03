<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta id="csrf_token" content="<?php echo csrf_token() ?>">
    <title>Lumen app test</title>
    <script src="https://cdn.firebase.com/js/client/2.2.1/firebase.js"></script>

    <style>
        li{
            border: 1px solid grey;
            margin-bottom: 10px;
        }
        span{
            cursor: pointer;
        }
        #messagesContainer{
            width: 500px;
            background-color:grey;
            overflow: auto;
        }
        li{
            margin: 5px;
            list-style: none;
            padding: 10px;
            max-width: 300px;
            background-color: rgba(0, 242, 0, 0.27);
            clear: both;
        }
        li.left{
            float: left;
        }
        li.right{
            float:right;
        }
    </style>
</head>
<body>
    <div id="app">
        <chatbox :list="list" ></chatbox>
        <input type="text" v-model="message.name" name="inputName" placeholder="Name">
        <input type="text" v-model="message.message" name="inputMessage" @keypress="keyPress" placeholder="Your message">
    </div>

    <template id="template-chatbox">
        <div id="messagesContainer" v-show="hasMessage">
            <li v-for="message in list"  v-bind:class="isOdd($index)">
                <strong>{{message.name}}</strong> say, {{message.message}}
            </li>
        </div>
    </template>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.1.17/vue-resource.js"></script>
    <script src="/js/bundled.js"></script>
</body>
</html>