<template>
    <div class="row">
        <div class="col-md-2" v-if="article.image">
            <img v-bind:src="article.image | path">
        </div>

        <div class="col-md-{{ article.image ? 10 : 12 }}">
            <h3>{{ article.title | myOwnLimitWithDott 50 }}</h3>

            <p v-if="article.content">{{{ article.content }}}</p>

            <p>By <strong>{{ article.author }}</strong></p>

        </div>
    </div>

    <hr>
</template>

<script>
    export default {
        props : ['article'],

        filters : {
            path(file){
                return '/uploads/articles/image/thumbs/' + file;
            },
            myOwnLimitWithDott(text, size){

                if ( text.length > size )
                    return text.substr(0, size) + '...';

                return text;
            },
        }
    }
</script>