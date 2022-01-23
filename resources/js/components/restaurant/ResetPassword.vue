<template>
    <div class="resetPassword justify-content-center">
        <div class="content">
            <h2 class="">Forgot your password?</h2>
            <p class="mb-4">Don't fret! Just type in your email and we will send you a code to reset your password!</p>
            <form action="#">
                <div class="mb-4">
                    <div class="input-group"> 
                        <input type="email" class="form-control" id="email" placeholder="john@company.com" required="" autofocus="">
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="btn">Recover password</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
.resetPassword{
    margin-top: 5rem !important;
    width: 30rem;
    padding: 2rem;
    margin: auto;
    border: 0.1rem solid rgba(0, 0, 0, 0.2);
    border-radius: 0.5rem;
    margin-bottom: 1rem;
    background: #fff;
}
.content{
    justify-content: center;
    text-align: center;
}
.content h2{
    color: #27ae60;
}

</style>
