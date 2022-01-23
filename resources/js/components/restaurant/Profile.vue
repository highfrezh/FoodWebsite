<template>
    <div class="container">
          <div class="container rounded bg-white mt-5 mb-5">
            <div class="row" v-if="verifiedUser">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" :src="'/images/profile/' + form.image">
                        <div v-if="form">
                            <span class="font-weight-bold">{{ form.username }}</span>
                            <h6 class="text-black-50">{{ form.email }}</h6>
                        </div>
                        <hr>
                        <!-- <span>
                            <div class="ml-3 mt-3">
                                <h4>
                                Change profile image
                                </h4>
                                <form >
                                    <input class="form-control-sm" type="file" @change="gettingImage"/>
                                    <button @click.prevent="uploadImage" class="btn btn-primary profile-button" type="submit">
                                        Save image
                                    </button>
                                </form>
                            </div>
                        </span> -->
                    </div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="d-flex justify-content-between align-items-center mb-2 mt-2">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form @submit.prevent="editProfile()" class="mb-5">

                        <div class="col-md-12 mt-2">
                            <label class="labels">Full Name</label>
                            <input type="text" class="form-control" placeholder="full name" v-model="form.name">
                            <div v-if="errors.name" class="text-danger" style="font-size: 1rem;">
                                {{ errors.name[0] }}
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <label class="labels">Country</label>
                            <input type="text" class="form-control" placeholder="country" v-model="form.country">
                            <div v-if="errors.country" class="text-danger" style="font-size: 1rem;">
                                {{ errors.country[0] }}
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <label class="labels">State/Region</label>
                            <input type="text" class="form-control" placeholder="state/region" v-model="form.state">
                            <div v-if="errors.state" class="text-danger" style="font-size: 1rem;">
                                {{ errors.state[0] }}
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <label class="labels">Postcode</label>
                            <input type="number" class="form-control" placeholder="poster code" v-model="form.zip_code">
                            <div v-if="errors.zip_code" class="text-danger" style="font-size: 1rem;">
                                {{ errors.zip_code[0] }}
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <label class="labels">Address</label>
                            <input type="text" class="form-control" placeholder="enter address" v-model="form.address">
                            <div v-if="errors.address" class="text-danger" style="font-size: 1rem;">
                                {{ errors.address[0] }}
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <label class="labels">Mobile Number</label>
                            <input type="number" class="form-control" placeholder="enter phone number" v-model="form.phone_num">
                            <div v-if="errors.phone_num" class="text-danger" style="font-size: 1rem;">
                                {{ errors.phone_num[0] }}
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <label class="labels">Profile Image (Optional)</label>
                            <input type="file" class="form-control" id="inputGroupFile02" @change="gettingImage">
                        </div>

                        <div class="mt-2 text-center">
                            <button class="btn btn-primary profile-button" type="submit">
                                Save Profile
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience">
                            <span>Change password</span>
                            <span class="border px-3 p-1 add-experience">
                                <i class="fa fa-plus"></i>
                                &nbsp;
                            </span>
                        </div>
                        <br>
                        <form action="#">
                            <div class="col-md-12">
                                <label class="labels">
                                    Old Password
                                </label>
                                <input type="text" class="form-control" v-model="pwdChange.oldPwd"  placeholder="Old password">
                            </div> 
                            <div class="col-md-12">
                                <label class="labels">
                                    New Password
                                </label>
                                <input type="text" v-model="pwdChange.newPwd" class="form-control" placeholder="new password">
                            </div> 
                            <div class="mt-2 text-center">
                                <button class="btn btn-primary profile-button" type="button">
                                    Change
                                </button>
                            </div>
                        </form>
                        
                        <br>
                    </div>
                </div>
            </div>
            <div v-if="!verifiedUser">
                <NotFound></NotFound>
            </div>
        </div>
    </div>
</template>

<script>
import NotFound from '../NotFound';
import  {Api} from '..//..//store/modules/restuarant';

import { mapGetters, mapActions } from "vuex";
export default {
    data: () => ({
        verifiedUser:  '',

        pwdChange: new Form({
            oldPwd:     '',
            newPwd:     ''
        }),

        form: new Form({
            id:                '',
            name:              '',
            username:          '',
            email:             '',
            phone_num:         '',
            zip_code:          '',
            address:           '',
            country:           '',
            state:             '',
            image:             '',
        })
    }),

    components: {
    NotFound,
    },

      mounted(){
        window.scrollTo(0,0);
        window.onbeforeunload = function (){
            window.scrollTo(0,0);
        };

        if(localStorage.loginUser){
            this.verifiedUser = localStorage.getItem('loginUser');
        };

        // if(localStorage.userId){
        //     this.form.id = localStorage.getItem('userId')
        // };

        this.profile()
        Fire.$on('updateData', () => {this.profile()});
        // setInterval(() => this.profile(), 3000); // fire a request every 3sec;
            
    },

    computed:{
        ...mapGetters(["errors"])
        // this.$set(this.formData, "description", this.getOneTask.description)
    },

    methods:{
        // ...mapActions(["editProfileRequest"]),
        ...mapActions(["profileRequest"]),

        profile(){
            Api().get('/profile').then((response) => {
                this.form.fill(response.data);
                
            })

            // this.profileRequest()
        },


        editProfile(){
            this.$Progress.start();
            this.$store.dispatch('editProfileRequest',
            {
            id:        this.form.id,
            form:      this.form
            });
            Fire.$emit('updateData');
            this.$Progress.finish();
            this.form.reset();
        },

        gettingImage(e){
            let file = e.target.files[0];
            // console.log(file);
            let reader = new FileReader();
            if(file['size'] < 1000000 ){
                reader.onloadend = (file) => {
                    // console.log('RESULT', reader.result)
                    this.form.image = reader.result;
                }
                reader.readAsDataURL(file);
            }else{
                
           swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Image should less than or 1MB!',
                })
            }
        },

        uploadImage(){
            Api().post('/profileImage',{image : this.form.image});
        }

    },



}
</script>

<style scoped>

.container {
    margin-top: 5rem !important;
}


.form-control:focus {
    box-shadow: none;
    border-color: #27ae60;
}

.profile-button {
    background: #27ae60;
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #27ae60;
}

.profile-button:focus {
    background: #27ae60;
    box-shadow: none
}

.profile-button:active {
    background: #27ae60;
    box-shadow: none
}

.back:hover {
    color:#27ae60;;
    cursor: pointer
}
.add-experience:hover {
    background: #27ae60;;
    color: #fff;
    cursor: pointer;
    border: solid 1px #27ae60;
}
hr{
    width: 100%;
    border: solid 2px #27ae60;
}
.form-control{
    min-width: 100%  !important;
}
</style>