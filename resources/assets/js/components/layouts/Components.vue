<template>
    <h1>My articles:</h1>
    <hr>

    <article-builder v-for="row in articles" :article="row"></article-builder>
</template>

<script>
    import ArticleBuilder from '../partials/ArticleBuilder.vue';

    export default {
        components : { ArticleBuilder },

        //Data binding
        data(){
            return {

                articles : [
                    { title : 'First kiss', author : 'Marek Gogol', image : '00000002.png' },
                    { title : 'Second *****', author : 'Matej Lukac' },
                    { title : 'My first car', author : 'Simon Hudak' },
                    { title : 'How to secure my VPS', author : 'Miso Poremba' },
                ],

            };
        },

        created(){
            this.$root.title = 'Components & Properties';
        },
    }
</script>