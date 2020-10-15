<template>
    <div id="app">
        <hnav></hnav>
        <hcontent></hcontent>
        <hfooter></hfooter>
    </div>
</template>
<script>
    import Hnav from './components/Nav';
    import Hcontent from './components/Content';
    import Hfooter from './components/Footer';

    export default {
        name: 'app',
        data() {
            return {}
        },
        components: {
            Hnav,
            Hcontent,
            Hfooter
        }
    };
</script>
<style scoped>
    /* Add scoped styles */
    #app {
        /*padding: 20px;*/
        background-color: #F0F2F5;

    }
</style>
