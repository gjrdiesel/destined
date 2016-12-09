<template>
    <div>
        <div class="panel panel-default">
            <div class="panel-heading">Manage Destiny Account</div>

            <div class="panel-body">

                <div class="col-xs-4">
                    <div>
                        <label>
                            <input type="radio" value="playstation" v-model="console">
                            Playstation
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="radio" value="xbox" v-model="console">
                            Xbox
                        </label>
                    </div>
                </div>

                <div class="col-xs-8">
                    <input v-model="gamertag" type="text" placeholder="Enter your gamertag" class="form-control">
                </div>

            </div>
        </div>

        <br><br><br>

        <div class="panel panel-default">
            <div class="panel-heading">Manage Account</div>

            <div class="panel-body">

                <div class="col-xs-8">
                    <input v-model="email" type="text" placeholder="Be sure to enter an email here" class="form-control">
                </div>

                <div class="col-xs-4">
                    <div>
                        <label>
                            <input type="radio" value="playstation" v-model="console">
                            Emails Enabled
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="radio" value="xbox" v-model="console">
                            Disable Emails
                        </label>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
<style scoped>
    .panel-body {
        padding: 15px;
        display: flex;
        align-items: center;
    }
</style>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                console: '',
                gamertag: ''
            }
        }
    }
</script>
