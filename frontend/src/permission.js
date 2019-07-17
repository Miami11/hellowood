import router from '@/router'
import store from '@/store'
import { log } from 'util';

router.beforeEach((to, from, next) => {
    if (to.meta.needLogin) {
        console.log(1);
        next();
    } else {
        console.log(2);
        next();
    }
});
