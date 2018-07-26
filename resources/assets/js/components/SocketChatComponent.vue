<template>
    <div class="chat_form">
        <div id="headline" class="chat_messages">
            <h3>Chat</h3>
                <div id="chat">

                    <section  class="chat" v-chat-scroll>
                        <div v-for="message, index in messages" class="message" id="message">
                            <time class="message__time">{{now}}</time>
                            <div class="message__text">
                                <p>{{message}}</p>
                            </div>
                        </div>
                    </section>
                 <!--  <textarea  class="form-poshytip" readonly="" rows="5" cols="20" title="Chat messages">{{messages.join('\n')}}</textarea>-->
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
                activeUsers: [],
        }
    },
        computed: {
            channel: function() {
                return window.Echo.join('chat');
            },
            now: function () {
                return moment().calendar();

            },
        },
    mounted() {

           this.channel
                .here((users) => {this.activeUsers = users;})
                .joining((user) => {this.activeUsers.push(user);})
                .leaving((user) => {this.activeUsers.splice(this.activeUsers.indexOf(user),1);})
                .listen('Message', ({message}) => {this.messages.push(user.name + ':' +message)});
    },
    methods: {
        sendMessage: function () {
            axios({method: 'post', url: '/chat', params: {body: this.message}});
                this.messages.push(this.user.name + ': ' + this.message);
                this.message = "";
            }
        },
    }
</script>

<style>
    .chat {
        padding: 5px;
        margin: 10px 0 10px 0;
        height: 300px;
        background-color: #EAEAEA;
        overflow-y:scroll;
    }

    .message {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .message__time {
        font-size: 10px;
        color: #6C4444;
        width: 100%;
        margin: 0 0 0px 130px;
    }

    .message__text {
        padding: 0px;
        border-radius: 10px;
        height: 19px;
        max-width: 90%;
    }
    .message__text p {
        margin: 0px;
    }

    .message--user-2 {
        justify-content: flex-end;
    }
    .message--user-2 .message__time {
        text-align: right;
        margin: 0 130px 5px 0;
    }

</style>