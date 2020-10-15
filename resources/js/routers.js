import ArticleList from './components/article/List.vue';
import ArticleDetail from './components/article/Detail.vue';

const routers = [
    {
        path: '/',
        redirect: '/article/list'
    },
    {
        path: '/article/list',
        name: 'ArticleList',
        component: ArticleList
    },
    {
        path: '/article/detail',
        name: 'ArticleDetail',
        component: ArticleDetail
    }
];

export default routers;
