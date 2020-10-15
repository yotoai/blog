<template>
    <div class="h-nav">

    </div>
</template>

<script>
    export default {
        data() {
            return {
                activeIndex: '1',
                activeIndex2: '1'
            };
        },
        methods: {
            handleSelect(key, keyPath) {
                console.log(key, keyPath);
            }
        }
    }
</script>

<style scoped>
.h-nav {
    display: block;
    width: 100%;
    min-width: 1366px;
    height: 60px;
    background-color: #fff;
    border-top: 5px solid #FF6666;
    -moz-box-shadow: 0 2px 4px #FFCCCC; /* 老的 Firefox */
    box-shadow: 0 2px 4px #FFCCCC;
}

    .el-menu-nav {
        padding-left: 55px;
    }
</style>