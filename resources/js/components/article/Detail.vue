<template>
    <div class="detail">
        <div class="title-area">
            <h1>
                <div class="pull-title">
                    <span> 合并以下两个开源类库221：</span>
                </div>
            </h1>
            <el-breadcrumb separator="/">
                <el-breadcrumb-item>分类：PHP</el-breadcrumb-item>
                <el-breadcrumb-item><i class="el-icon-view"></i> 10086</el-breadcrumb-item>
                <el-breadcrumb-item>发布于2年前</el-breadcrumb-item>
            </el-breadcrumb>
        </div>

        <el-divider style="margin: 20px 0"></el-divider>
        <div>
            合并以下两个开源类库111：

            标记 github.com/dvnc/annotator
            高亮 github.com/julmot/mark.js/
            以此来实现标记高亮文章内容。

            对比常见的 XPATH 记录位置 ：

            优点是能更加精准定位到高亮内容，而不会出现 DOM 改变后，内容错误标记的情况。

            缺点是页面会出现重复的标示，不过这个可以通过提示用户增加标示字数来解决。

            太少字数的内容、或者出现频率太高的内容，其实也没必要标示。所以从实际使用上来讲也不会是个大问题。

            讨论请前往：

            ————————————————
            原文作者：Summer
            转自链接：https://learnku.com/articles/47096
            版权声明：著作权归作者所有。商业转载请联系作者获得授权，非商业转载请保留以上作者信息和原文链接。
        </div>
    </div>
</template>

<script>
    export default {
        name: "ArticleDetail"
    }
</script>

<style scoped>
    .el-divider--horizontal {
        margin: 20px 0!important;
    }

    .title-area {
        padding: 20px 0 0 0;
    }

    .main-panel h1 {
        margin-top: 0;
        font-size: 20px;
        font-weight: 400;
        font-family: Lato,Helvetica Neue,Arial,Helvetica,sans-serif;
        margin-bottom: 15px;
    }
</style>