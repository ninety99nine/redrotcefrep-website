<template>

    <div
        class="h-screen flex flex-col relative w-full text-white overflow-hidden"
        style="background-image: url('/images/lady-with-perfect-hand-sign.jpg'); background-size: cover; background-position: center;">

        <router-view></router-view>

        <Footer></Footer>

    </div>

</template>

<script>

    import Header from '@Layouts/website/components/Header.vue';
    import Footer from '@Layouts/website/components/Footer.vue';

    export default {
        components: {
            Header, Footer
        }
    };

</script>
