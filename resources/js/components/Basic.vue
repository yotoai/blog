<template>
    <div>
        <hnav></hnav>
        <hcontent></hcontent>
        <hfooter></hfooter>
    </div>
</template>

<script>
    import Hnav from '../components/Nav';
    import Hcontent from '../components/Content';
    import Hfooter from '../components/Footer';

    export default {
        name: 'Home',
        data () {
            return {
                visible: false,
            }
        },
        components: {
            Hnav,
            Hcontent,
            Hfooter
        }
    };
</script>

<style scoped>

</style>