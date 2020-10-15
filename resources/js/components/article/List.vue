<template>
    <div>
        <div class="title-header">
            <h1><i class="el-icon-notebook-2"></i> 全部文章</h1>
            <div class="sort-area">
                <div>排序：</div>
                <div>
                    <el-select v-model="value" size="small" style="width: 120px;" @change="sortAct" placeholder="请选择">
                        <el-option
                            v-for="item in options"
                            :key="item.value"
                            :label="item.label"
                            :value="item.value">
                        </el-option>
                    </el-select>
                </div>
            </div>
        </div>
        <hr style="border-top: 1px solid #d3e0e9;"/>
<<<<<<< HEAD
        <div v-for="i in 10" :key="i" >
            <div class="title-area">
                <div class="pull-title">
                    <router-link class="pull-title" tag="a" :to="{path:'/article/detail', query: {id: i}}">
                        <span> 合并以下两个开源类库：</span>
                    </router-link>
=======
        <div>
            <div class="title-area">
                <div class="pull-title">
                    <span> 合并以下两个开源类库：</span>
>>>>>>> cd7d4f2c56d8a81be5c90ef662019cfc1542d815
                </div>
                <el-breadcrumb separator="/">
                    <el-breadcrumb-item>分类：PHP</el-breadcrumb-item>
                    <el-breadcrumb-item><i class="el-icon-view"></i> 10086</el-breadcrumb-item>
                    <el-breadcrumb-item>发布于2年前</el-breadcrumb-item>
                </el-breadcrumb>
            </div>
            <el-divider style="margin: 20px 0"></el-divider>
        </div>
<<<<<<< HEAD
        <div class="fenye">
            <el-pagination
                background
                layout="prev, pager, next"
                @current-change="currChange"
                :total="1000">
            </el-pagination>
=======
        <div>
            <div class="title-area">
                <div class="pull-title">
                    <span> 合并以下两个开源类库：</span>
                </div>
                <el-breadcrumb separator="/">
                    <el-breadcrumb-item>分类：PHP</el-breadcrumb-item>
                    <el-breadcrumb-item><i class="el-icon-view"></i> 10086</el-breadcrumb-item>
                    <el-breadcrumb-item>发布于2年前</el-breadcrumb-item>
                </el-breadcrumb>
            </div>
            <el-divider style="margin: 20px 0"></el-divider>
>>>>>>> cd7d4f2c56d8a81be5c90ef662019cfc1542d815
        </div>
    </div>
</template>

<script>

    export default {
        name: "ArticleList",
        data() {
            return {
                visible: false,
                value: 'addtime',
                options: [
                    {
                        'value': 'addtime',
<<<<<<< HEAD
                        'label': '新发布'
=======
                        'label': '新发布',
                        'default': true
>>>>>>> cd7d4f2c56d8a81be5c90ef662019cfc1542d815
                    },
                    {
                        'value': 'views',
                        'label': '访问多',
                    },
                ]
            }
        },
        created: function () {
            console.log(1);
            this.sortAct();
        },
        mounted(){
            console.log(2);
        },
        methods: {
            sortAct (value) {
                axios({
                    url: 'article',
                    method: 'get'
                }).then(res => {

                });
                console.log(value)
<<<<<<< HEAD
            },
            currChange (page) {
                console.log(page)
            },
            prevClick (page) {
                console.log(page)
            },
            nextClick (page) {
                console.log(page)
=======
>>>>>>> cd7d4f2c56d8a81be5c90ef662019cfc1542d815
            }
        }
    }
</script>

<style scoped>
<<<<<<< HEAD
    a {
        text-decoration: none;
        color: #636b6f;
    }

=======
>>>>>>> cd7d4f2c56d8a81be5c90ef662019cfc1542d815
    .el-divider--horizontal {
        margin: 20px 0!important;
        height: 0!important;
    }
    .el-divider {
        background: 0 0;
        border: 1px dashed #FF6666!important;
    }

    .title-header {
        display: flex;
        padding-top: 20px;
        color: #636b6f;
    }

    .title-header h1 {
        display:block;
        width: 70%;
    }

    .title-area {
        padding: 15px 0 0 0;
    }

    .main-panel h1 {
        margin-top: 0;
        font-size: 20px;
        font-weight: 400;
        font-family: Lato,Helvetica Neue,Arial,Helvetica,sans-serif;
        margin-bottom: 15px;
    }

    .sort-area {
        display: flex;
        width: 30%;
        float: right;
        text-align: right;
        line-height: 200%;
    }

    .pull-title {
        padding: 20px 0;
    }
<<<<<<< HEAD

    .fenye >>> .el-pagination.is-background .el-pager li:not(.disabled).active {
        background-color: #FFCCCC!important;
        color: #FFF;
    }

    .fenye >>> .el-pagination.is-background .el-pager li:not(.disabled):hover {
        color: #FFCCCC!important;
    }
=======
>>>>>>> cd7d4f2c56d8a81be5c90ef662019cfc1542d815
</style>