<template>
    <div class="container">
        <div class="content-bg">
            <div class="left-panel">
                <div class="l-panel">
                    <div class="avatar">
                        <img src="\img\d08d2c091919a824765bb84092283a59.jpg" alt="">
                    </div>
                    <div class="uname">
                        <p><font color="#FF8000">程</font><font color="#FFB300">序</font><font color="#FFE000">员</font><font color="#FFE000">豆</font><font color="#FFE000">腐</font></p>
                    </div>
                    <div class="desc">
                        <ul>
                            <li>
                                <p>文章</p>
                                <p>520</p>
                            </li>
                            <li>
                                <p>访问</p>
                                <p>10086</p>
                            </li>
                            <li>
                                <p>订阅</p>
                                <p>10086</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="l-panel">
                    <div class="all-art">
                        <router-link tag="a" :to="{path:'/article/list'}"><i class="el-icon-notebook-2"> 全部文章</i></router-link>
                    </div>
                </div>
                <div class="l-panel">
                    <div class="type-hot">
                        <p>热门文章</p>
                    </div>
                    <div class="act-list">
                        <ul>
                            <li>
                                <a href="">优点是能更加精准定位到高亮内容，而不会出现 DOM 改变后，内容错误标记的情况。</a>
                            </li>
                            <li>
                                <a href="">缺点是页面会出现重复的标示，不过这个可以通过提示用户增加标示字数来解决。</a>
                            </li>
                            <li>
                                <a href="">python爬取电影天堂新片精品模块电影列表，并用迅雷下载</a>
                            </li>
                            <li>
                                <a href="">python爬取电影天堂新片精品模块电影列表，并用迅雷下载</a>
                            </li>
                            <li>
                                <a href="">python爬取电影天堂新片精品模块电影列表，并用迅雷下载</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="l-panel">
                    <div class="type-hot">
                        <p>分类</p>
                    </div>
                    <div class="act-list">
                        <ul>
                            <li>
                                <a href="">
                                    <span>php</span>
                                    <span class="r-text">10篇</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span>go</span>
                                    <span class="r-text">8篇</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span>mysql</span>
                                    <span class="r-text">7篇</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span>html</span>
                                    <span class="r-text">16篇</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span>python</span>
                                    <span class="r-text">12篇</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span>vue</span>
                                    <span class="r-text">18篇</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-panel">
<!--                <article-detail></article-detail>-->
<!--                <article-list></article-list>-->
<!--                <component v-bind:is="currentTabComponent"></component>-->
                <router-view></router-view>
            </div>
            <div class="right-panel">
                <div class="l-panel">
                    <div class="type-hot">
                        <p>公告</p>
                    </div>
                    <span class="note">这个人很懒。。。</span>
                </div>
                <div class="l-panel">
                    <div class="type-hot">
                        <p>标签</p>
                    </div>
                    <div id="cloud">

                    </div>
                </div>
                <div class="l-panel">
                    <div class="type-hot">
                        <p>广告</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { articleDetail, articleList } from './article';

    export default {
        name: "Content.vue",
        data () {
            return {
                visible: false,
                goodsList: null,
                keyword: null,
                currentTabComponent: articleList
            }
        },
        components: {
            articleDetail,
            articleList
        },
        created: function () {
        },
        mounted(){
            this.getCloud();
        },
        methods: {
            getData(){
                axios({
                    url: 'http://bl.com/api/goods?name=' + this.keyword,
                    method: 'get'
                }).then(res => {
                    console.log(res);
                    this.goodsList = res.data
                }).catch(e => {
                    console.log(e)
                })
            },

            getCloud() {
                var chart = echarts.init(document.getElementById('cloud'));

                chart.setOption({
                    series: [{
                        type: 'wordCloud',

                        // The shape of the "cloud" to draw. Can be any polar equation represented as a
                        // callback function, or a keyword present. Available presents are circle (default),
                        // cardioid (apple or heart shape curve, the most known polar equation), diamond (
                        // alias of square), triangle-forward, triangle, (alias of triangle-upright, pentagon, and star.

                        shape: 'circle',

                        // A silhouette image which the white area will be excluded from drawing texts.
                        // The shape option will continue to apply as the shape of the cloud to grow.

                        // maskImage: maskImage,

                        // Folllowing left/top/width/height/right/bottom are used for positioning the word cloud
                        // Default to be put in the center and has 75% x 80% size.

                        left: 'center',
                        top: 'center',
                        width: '70%',
                        height: '80%',
                        right: null,
                        bottom: null,

                        // Text size range which the value in data will be mapped to.
                        // Default to have minimum 12px and maximum 60px size.

                        sizeRange: [13, 22],

                        // Text rotation range and step in degree. Text will be rotated randomly in range [-90, 90] by rotationStep 45

                        rotationRange: [-45, 90],
                        rotationStep: 30,

                        // size of the grid in pixels for marking the availability of the canvas
                        // the larger the grid size, the bigger the gap between words.

                        gridSize: 8,

                        // set to true to allow word being draw partly outside of the canvas.
                        // Allow word bigger than the size of the canvas to be drawn
                        drawOutOfBound: false,

                        // Global text style
                        textStyle: {
                            normal: {
                                fontFamily: 'Lato,Helvetica Neue,Arial,Helvetica,sans-serif',
                                fontWeight: 600,
                                // Color can be a callback function or a color string
                                color: function () {
                                    // Random color
                                    return 'rgb(' + [
                                        Math.round(Math.random() * 250),
                                        Math.round(Math.random() * 256),
                                        Math.round(Math.random() * 256)
                                    ].join(',') + ')';
                                }
                            },
                            emphasis: {
                                shadowBlur: 5,
                                shadowColor: '#FFCCCC'
                            }
                        },

                        // Data is an array. Each array item must have name and value property.
                        data: [{
                            name: '嘻嘻嘻',
                            value: 366,
                            id: 12,
                            // Style of single text
                            textStyle: {
                                normal: {},
                                emphasis: {}
                            }
                        },{
                            name: '哈哈哈',
                            value: 210,
                            id: 18,
                            // Style of single text
                            textStyle: {
                                normal: {},
                                emphasis: {}
                            }
                        },{
                            name: '呵呵呵呵',
                            value: 150,
                            id: 19,
                            // Style of single text
                            textStyle: {
                                normal: {},
                                emphasis: {}
                            }
                        },{
                            name: '哟哟哟哟',
                            value: 166,
                            id: 20,
                            // Style of single text
                            textStyle: {
                                normal: {},
                                emphasis: {}
                            }
                        },{
                            name: '哇啊哇',
                            value: 196,
                            id: 30,
                            // Style of single text
                            textStyle: {
                                normal: {},
                                emphasis: {}
                            }
                        }]
                    }]
                });

                chart.on('click', (param) => {
                    console.log(param);
                });
            }
        }
    }
</script>

<style scoped>

    .container {
        width: 100%;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .content-bg {
        width: 1366px;
        margin: 0 auto;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        position: relative;
    }

    .left-panel {
        display: block;
        width: 540px;
        padding: 0 10px;
        margin: 0 10px;
    }

    .l-panel {
        display:block;
        float: left;
        margin-bottom: 10px;
        background-color: #fff;
        border-top: 5px solid #FF9966;
        border-radius: 5px;
        padding: 5px;
    }

    .main-panel {
        display: block;
        width: 1160px;
        background-color: #ffffff;
        padding: 10px 20px;
        margin: 0 10px;
        border-radius: 5px;

    }

    .right-panel {
        display: block;
        width: 540px;
        padding: 0 10px;
        margin: 0 10px;
    }

    .avatar {
        display: table-cell;
        width: 300px;
        height: 120px;
        text-align: center;
        vertical-align: middle;
    }

    .type-hot {
        display: table-cell;
        width: 300px;
        text-align: center;
        font-weight: 800;
    }

    .avatar img {
        width: 84px;
        height: 84px;
        border-radius: 50%;
        margin: 0 auto;
    }

    .uname {
        text-align: center;
        font-size: 18px;
    }

    .uname p {
        margin-top: 0;
    }

    .desc ul {
        display: block;
        padding: 0;
        list-style-type: none;
    }

    .desc ul li {
        display: block;
        float: left;
        width: 33.33%;
        text-align: center;
    }

    .desc ul li p {
        display: block;
    }

    .act-list ul {
        display: block;
        padding: 0;
        margin: 0;
        list-style-type: none;
    }

    .act-list ul li a {
        display: block;
        text-decoration: none;
        font-size: 14px;
        margin-bottom: 10px;
        color: #555666;
        padding: 0 5px;
    }

    .act-list ul li a:hover {
        color: #0099CC;
    }

    .r-text {
        display: block;
        float: right;
        font-size: 13px;
    }

    .note {
        display:block;
        padding: 5px;
        font-size: 13px;
    }

    #cloud {
        display: block;
        width: 300px;
        height: 300px;
    }

    .all-art a {
        display: table-cell;
        width: 300px;
        padding: 10px;
        text-align: center;
        color: #555666;
    }
</style>