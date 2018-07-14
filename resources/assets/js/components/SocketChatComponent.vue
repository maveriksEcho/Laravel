<template>
    <div>
        <h3>Chat</h3>
        <div id="chat">

           <textarea class="form-poshytip" readonly="" rows="5" cols="20" title="Chat messages" readonly="" >{{messages.join('\n')}}</textarea>

            <input @keyup.enter="sendMessage" type="text" class="form-poshytip" placeholder="Messege" title="Enter messages" v-model="message">

                <button @click="sendMessage" name="submit" id="submit" type="button" >Send message</button>

        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                messages: [],
                message: "",
        }
    },
    mounted() {
           window.Echo.channel('chat').listen('Message',({message}) =>{
               this.messages.push(message);
           })
    },
    methods: {
        sendMessage: function () {
            axios({method: 'post', url: '/chat', params: {message: this.message}});
                this.messages.push(this.message);
                this.message = "";
            }
        }
    }
</script>