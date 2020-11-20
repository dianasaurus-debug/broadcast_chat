<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chat App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .list-group {
            height : 250px;
            overflow-y : auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" id="app">
            <div class="offset-4 col-4 offset-sm-1 col-sm-10">
                <li class="list-group-item active">Chat App<span class="badge badge-pill badge-danger">@{{ numberOfUsers }}</span></li>
                <div class="badge badge-pill badge-info">@{{ typing }}</div>
                <ul class="list-group" v-chat-scroll>
                    <message v-for="value,index in chat.message" :key=value.index :color=chat.color[index] :user=chat.user[index] :time=chat.time[index] :floating=chat.float[index]>
                        @{{ value }}
                    </message>
                </ul>
                <input class="form-control" type="text" placeholder="Type your message ..." v-model="message" @keyup.enter="send">
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
