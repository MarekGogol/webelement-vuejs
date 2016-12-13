<template>
    <h3>1. Print value</h3>
    <p>I have <strong>{{ cars }} cars</strong></p>

    <hr>

    <h3>2. Dynamic data binding</h3>
    <div class="form-group">
        <label>Amount</label>
        <input type="number" class="form-control" v-model="cars">
    </div>

    <h3>3. Computed value</h3>
    <p>I have <strong>{{ cars }} cars</strong>, but Matej has <strong>{{ matejCars }} cars</strong></p>
    <p>Has matej more than 50 cars?, <strong>{{ hasMatejMoreThan50 }}</strong></p>
    <hr>
</template>

<script>
    export default {
        //Data binding
        data(){
            return {

                cars : 5,

            };
        },

        created(){
            this.$root.title = 'Data binding';
        },

        computed : {
            matejCars(){
                return this.cars * 10;
            },
            hasMatejMoreThan50(){
                return this.matejCars > 50 ? 'yeeeeees wohooo' : 'no, shit.';
            },
        },
    }
</script>