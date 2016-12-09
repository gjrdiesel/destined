<template>
    <div class="settings">

        <input v-model="gamertag" type="text" placeholder="Enter your gamertag" class="form-control">
         <label>
            <input type="radio" value="playstation" v-model="console">
            Playstation
        </label>
        <label>
            <input type="radio" value="xbox" v-model="console">
           Xbox 
        </label>

   </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
