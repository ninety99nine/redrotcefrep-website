import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: '/',
        component: () => import('@Layouts/website/Website.vue'),
        children: [
            {
                path: '',
                name: 'landing',
                component: () => import('@Pages/landing/Landing.vue')
            },
        ]
    },
    {
        path: '/:catchAll(.*)',
        name: 'notFound',
        component: () => import('@Pages/error/404.vue'),
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
