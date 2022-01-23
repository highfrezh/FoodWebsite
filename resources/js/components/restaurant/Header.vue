<template>
    <div>
           <!-- header section -->
        <header class="header">
            <a href="#" class="logo"><i class="fas fa-utensils spoon"></i>Resto.</a>

            <nav class="navbar">
                <a href="/#home" class="nav-active">Home</a>
                <a href="/#dishes">Dishes</a>
                <a href="/#about">About</a>
                <a href="/#menu">Menu</a>
                <a href="/#review">Review</a>
                <a href="/#order">Order</a>
            </nav>

            <div class="icons">
                <i class="fas fa-bars i" id="menu-bars"></i>
                <i class="fas fa-search i" id="search-icon"></i>
                <a href="#" class="fas fa-shopping-cart a">
                    <span class="cart-no">50</span>
                </a>
            </div>

            <div class="reg-log">
                <div v-show="!username">
                    <router-link to="/login">
                        Login
                    </router-link>
                    <a href="#" >|</a>

                    <router-link to="/register">
                        Register
                    </router-link>
                </div>

                <div v-show="username" class="dropdown">
                    <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                        {{ username }}
                    </a>
                    <div class="dropdown-menu drop-list" aria-labelledby="dropdownMenuButton">
                        <router-link to="/profile" class="dropdown-item">My Account</router-link>
                        <a class="dropdown-item" href="#" @click="logout">Logout</a>
                    </div>
                </div>
                
            </div>

        </header>
        <!-- end of header section -->

        <!-- search form -->
        <form action="" id="search-form">
            <input type="text" class="" placeholder="seach here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
            <i class="fas fa-times" id="close"></i>
        </form>
        <!-- end of search form -->

    </div>
</template>

<script>
import {mapActions, mapGetters} from 'vuex';
export default {
    data:() => ({
        username: '',
        user: null
    }),

    methods: {
        ...mapActions(["logoutRequest"]),

        // login Request
        logout(){
            this.logoutRequest(this.username);
        },

    },

    // computed: mapGetters(['loginUser']),
    mounted(){

        if(localStorage.loginUser){
            this.username = localStorage.getItem('loginUser')
        };
        
        let menu = document.querySelector('#menu-bars');
        let navbar = document.querySelector('.navbar');
        let navActive = document.querySelector('.nav-active');
        let section = document.querySelectorAll('section');
        let navLinks = document.querySelectorAll('header .navbar a');

        menu.onclick = () =>{
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
            navActive.classList.toggle('active');
        };

        window.onscroll = () =>{
            menu.classList.remove('fa-times');
            navbar.classList.remove('active');

            // navbar sticky and nav link active

            // section.forEach(sec =>{

            //     let top = window.scrollY;
            //     let height = sec.offsetHeight;
            //     let offset = sec.offsetTop - 100;
            //     let id = sec.getAttribute('id');

            //     if(top >= offset && top < offset + height){
            //         navLinks.forEach(links =>{
            //         links.classList.remove('active');
            //         document.querySelector('header .navbar a[href*='+id+']').classList.add('active');
            //         });
            //     };
            // });

            // end of navbar sticky and nav link active

            // searh form
            let searchIcon = document.querySelector('#search-icon');
            let searchForm = document.querySelector('#search-form');
            let closeSearchForm = document.querySelector('#close');


            searchIcon.onclick = () => {
                searchForm.classList.toggle('active');
            }

            closeSearchForm.onclick = () => {
                searchForm.classList.remove('active');
            }


        }
        
    },

    created(){

        // this.profile();
        // let token = localStorage.getItem('token');
        // if(token){
        //     axios.defaults.headers.common["Authorization"] = 'Bearer ' + token;
        //     // axios.defaults.headers.common["Authorization"] = `Bearer ${token}`; // + localStorage.getItem("token");
        // }
    }
}
</script>

<style lang="scss" scoped>
    .username {
        text-transform: capitalize;
        font-size: 1rem;
        color: #666;
        cursor: pointer;
    }
    .drop-list{
        border: none !important;
        
    }
</style>
