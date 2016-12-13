<template>
    <h1>My articles from database:</h1>

    <hr>
    <div class="form-group">
        <label>Limit</label>
        <input type="number" class="form-control" v-model="limit">
    </div>
    <hr>

    <article-builder v-for="row in articles | orderBy 'id' -1 | limitBy limit" :article="row"></article-builder>

    <a v-on:click="noLimit" v-if="isOverLimit"><strong>Show moooore!</strong></a>
</template>

<script>
    import ArticleBuilder from '../partials/ArticleBuilder.vue';

    export default {
        components : { ArticleBuilder },

        //Data binding
        data(){
            return {

                //Max rows per page
                limit : 2,

                //Here will be stored articles from db
                articles : [],

            };
        },

        created(){
            this.$root.title = 'Laravel / Ajax / Filters';
        },

        ready(){

            this.loadArticles();

            //Set interval for refreshing data from db
            this.refresh = setInterval(function(){
                this.loadArticles();
            }.bind(this), 1000);
        },

        //Remove interval
        destroyed(){
            clearInterval(this.refresh);
        },

        computed: {
            //Checks if is available more articles than limit
            isOverLimit(){
                return this.articles.length > this.limit;
            }
        },

        methods: {
            //Set limit to maximum
            noLimit(){
                this.limit = this.articles.length;
            },

            //Make ajax request
            loadArticles(){
                this.$http.get('/ajax/articles').then(function(response){

                    //Bind articles from request to local scope
                    this.articles = response.body;

                });
            },
        },

    }
</script>