<template>
    <div class="form-group">
        <label>Amount</label>
        <input type="number" class="form-control" v-model="cars">
    </div>

    <div class="form-group">
        <label>Limit</label>
        <input type="number" class="form-control" v-model="limit">
    </div>

    <h3>3. Allowed cars {{ limit }}</h3>

    <i v-for="index in parseInt(cars)" v-bind:class="['fa', 'fa-car', { 'overLimit' : overLimit( index ) }]"></i>

    <hr>
</template>

<script>
    export default {
        //Data binding
        data(){
            return {

                cars : 10,

                limit : 5,

            };
        },

        created(){
            this.$root.title = 'Class & Attributes binding';
        },

        methods : {
            overLimit(index) {
                return index >= this.limit;
            }
        },
    }
</script>