<template>
    <div class="container">
        <p>Hey am child data: {{ msg }}</p>
        <p>Hey am parent data: {{ message }}</p>
        <h1>Example Component</h1>

        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores cumque dicta dolor, molestias natus nemo numquam quia. Asperiores dolores explicabo laboriosam nesciunt nisi reiciendis sequi similique soluta tempora voluptas!
    </div>
</template>

<script>
    export default {
        props:['msg'],
        data(){
            return {
                message: 'hgkjhgkj'
            }
        }
//        mounted() {
//            console.log('Component mounted.')
//        }
    }
</script>
