<template>
    <div>
    <div class="panel panel-primary">
            <div class="panel-heading" id="accordion">
                <span class="glyphicon glyphicon-comment"></span> Chat: {{ teachingObject.title }}
                <div class="btn-group pull-right">
                    <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion-" :href="'#collapseOne-' + teachingObject.id">
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                </div>
            </div>
            <div class="panel-collapse collapse" :id="'collapseOne-' + teachingObject.id">
                <div class="panel-body chat-panel">
                    <ul class="chat">
                        <li v-for="conversation in conversations">
                        <!-- <span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span> -->
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">{{ conversation.user.name }}</strong>
                                </div>
                                <p>
                                    {{ conversation.message }}
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Escriba su mensaje aqui..." v-model="message" @keyup.enter="store()" autofocus />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat" @click.prevent="store()">
                                Enviar</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['teaching-object'],

        data() {
            return {
                conversations: [],
                message: '',
                teaching_object_id: this.teachingObject.id
            }
        },

        mounted() {
            this.listenForNewMessage();
        },

        methods: {
            store() {
                console.log(window.axios.defaults.headers.common);
                axios.post('/conversations', {message: this.message, teaching_object_id: this.teachingObject.id})
                .then((response) => {
                    this.message = '';
                    this.conversations.push(response.data);
                });
            },

            listenForNewMessage() {
                Echo.private('teaching-object.' + this.teachingObject.id)
                    .listen('NewMessage', (e) => {
                        // console.log(e);
                        this.conversations.push(e);
                    });
            }
        }
    }
</script>
