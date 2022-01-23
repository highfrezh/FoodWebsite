<template>
   <!-- preloader section -->

    <div class="loader-container">
        <img :src="'/images/loader.gif'" alt="preloder">
    </div>

    <!--end of preloader section -->

</template>

<script>
export default {

    mounted(){
          // preloader
        function loader (){
        document.querySelector('.loader-container').classList.add('fade-out');
        }
        
        function fadeOut(){
        setInterval(loader, 1500);
        }
        
        window.onload = fadeOut;
    }

}
</script>

<style>

</style>