<template>
    <div :class="containerChat"  style="max-width : 50%;" >
        <li class="list-group-item" :class="className"><slot></slot>
        <small class="float-right ml-3 mt-lg-3">{{ time }}</small></li>
        <small class="badge float-right" :class="badgeClass">{{ user }}</small>
    </div>
</template>

<script>
    export default {
        props: [
            'color',
            'user',
            'typing',
            'time',
            'floating',
        ],
        computed : {
            className(){
                return 'list-group-item-'+this.color;
            },
            badgeClass(){
                return 'badge-'+this.color;
            },
            containerChat(){
                return this.floating;
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
