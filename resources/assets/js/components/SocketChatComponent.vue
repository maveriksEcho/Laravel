<template>
    <div class="chat_form">
        <div id="headline" class="chat_messages">
            <h3>Chat</h3>
                <div id="chat">

                   <textarea  class="form-poshytip" readonly="" rows="5" cols="20" title="Chat messages">{{messages.join('\n')}}</textarea>

                    <input @keyup.enter="sendMessage" type="text" class="form-poshytip" placeholder="Messege" title="Enter messages" v-model="message">

                    <button v-on:click="show = !show" name="submit" id="submit" type="button">Users</button>

                        <button @click="sendMessage" name="submit" id="submit" type="button" >Send message</button>

                </div>
        </div>
        <transition name="fade">
            <div id="headline" class="chat_users" v-if="show">
                <ul>
                    <li v-for="user in activeUsers">{{user}}</li>
                </ul>
            </div>
        </transition>


    </div>
</template>

<script>
    export default {
        props: ['user'],
        data: function() {
            return {
                messages: [],
                message: "",
                show: false,
                activeUsers: []
        }
    },
        computed: {
            channel() {
                return window.Echo.join('chat');
            }
        },
    mounted() {

           this.channel
                .here((users) => {this.activeUsers = users;})
                .joining((user) => {this.activeUsers.push(user);})
                .leaving((user) => {this.activeUsers.splice(this.activeUsers.indexOf(user),1);})
                .listen('Message', ({message}) => {this.messages.push(message)});
    },
    methods: {
        sendMessage: function () {
            axios({method: 'post', url: '/chat', params: {body: this.message}});
                this.messages.push(this.message);
                this.message = "";
            }
        }
    }
</script>