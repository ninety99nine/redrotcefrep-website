<template>

    <footer class="relative bg-gradient-to-b from-indigo-700 to-indigo-900 text-white pb-8 overflow-hidden">

        <div class="relative z-10 mt-8 text-center text-indigo-200">
            &copy; {{ currentYear }} Perfect Order. All rights reserved.
        </div>

    </footer>

</template>

<script>

    export default {
        data() {
            return {
                currentYear: new Date().getFullYear()
            };
        }
    };

</script>
