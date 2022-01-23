<template>

    <!-- registration section -->

    <section class="register" id="register">
        
        <h1 class="heading" style="color: #27ae60 !important;">Register</h1>

        <form @submit.prevent="register()">
            <AlertError :form="form" message="There were some problems with your input." />
            <AlertSuccess :form="form">Your input registered successfully!</AlertSuccess>

            <div class="inputBox">
                 <div class="input">
                    <span>Username</span>
                    <input v-model="form.username" type="text" placeholder="username" :class="{ 'text-danger': form.errors.has('username') }">
                    <HasError :form="form" field="username" />
                </div>
                <div class="input">
                    <span>E-mail</span>
                    <input v-model="form.email" type="email" placeholder="e-mail" :class="{ 'text-danger': form.errors.has('email') }">
                    <HasError :form="form" field="email" />
                </div>
                <div class="input">
                    <span>Password</span>
                    <input v-model="form.password" type="password" placeholder="password" :class="{ 'text-danger': form.errors.has('password') }">
                    <HasError :form="form" field="password" />
                </div>
                <div class="input">
                    <span>Comfirm Password</span>
                    <input v-model="form.comfirm_password" type="password" placeholder="confirm password" :class="{ 'text-danger': form.errorPassword }" >
                    <div class="invalid-feedback" style="">{{ form.errorPassword }}</div>
                </div>
            </div>
            <div class="reg-footer">
                <Button :form="form" class="btn">Submit</Button>
                <h6>I have an account <router-link to="/login">Sign In</router-link></h6>
            </div>

            

        </form>


    </section>

    <!-- end of registration section -->

</template>

<script>
import {
  Button,
  HasError,
  AlertError
} from 'vform/src/components/bootstrap4';

export default {
    data: () => ({
        form: new Form({
            id:                '',
            username:          '',
            password:          '',
            comfirm_password:  '',
            email:             '',
            errorPassword:     null,
        }),
        
    }),

    methods: {

        register(){

            if (this.form.password !== this.form.comfirm_password) {

                this.form.errorPassword = 'Password not match..';
                // this.$router.push({ name: "Register"});
                window.scrollTo(0,0);
                this.form.password = null;
                this.form.comfirm_password = null;
            }

            if (this.form.password === this.form.comfirm_password) {
                
                this.form.post('api/register').then(() => {
                    this.$router.push({name: 'Login'})
                })

            }

        }
    },

    components: {
    Button, HasError, AlertError
  },

  mounted(){
    // load the page at the top
    window.scrollTo(0,0);

    window.onbeforeunload = function (){
        window.scrollTo(0,0);
    }
  }

}
</script>

<style>

.register{
    margin-top: 3rem;
}

.reg-footer{
    display: flex;
    justify-content: space-between;
}

</style>