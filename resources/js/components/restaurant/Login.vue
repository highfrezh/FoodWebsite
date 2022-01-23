<template>

<!-- login section -->

    <section class="login" id="login">

        <h1 class="heading" style="color: #27ae60 !important;">Login</h1>

        <form @submit.prevent="login()" class="login-form">
            <div class="inputBox">

                <div class="input">
                    <span>Username</span>
                    <input v-model="form.username" type="text" placeholder="username">
                    <div v-if="errors.username" class="text-danger" style="font-size: 1rem;">
                        {{ errors.username[0] }}
                    </div>
                </div>
                <div class="input">
                    <span>Password</span>
                    <input v-model="form.password" type="password" placeholder="password">
                    <div v-if="errors.password" class="text-danger" style="font-size: 1rem;">
                        {{ errors.password[0] }}
                    </div>
                </div>
        
            </div>
            
            <div class="login-footer">
                <button class="btn">Login</button>
                <div>
                    <router-link to="/resetPassword">Forget password..?</router-link>
                    <router-link to="/register">Register</router-link>
                </div>
            </div>

        </form>
        
    </section>
</template>

<script>

import {mapActions, mapGetters} from 'vuex';

export default {
    
    data: () =>({
        form: new Form({
            password:   '',
            username:   '',
        })
    }),

    computed: {
    ...mapGetters(["errors"])
  },

    methods: {
        ...mapActions(["loginRequest"]),
        // login Request
        login(){
            this.loginRequest(this.form);
        }
    },

    mounted(){
        window.scrollTo(0,0);

        window.onbeforeunload = function (){
            window.scrollTo(0,0);
        }
    }

}
</script>

<style>

.login{
    margin-top: 2rem;
}

</style>