import { adminAuth } from "./auth.js";
import { showCategoriesInDOM } from "./categories.js";
import { showProductsInDOM } from "./products.js";

const token = adminAuth();

const adminLogOutBtn = document.getElementById('admin-log-out-btn');

adminLogOutBtn.addEventListener('click', (e) => {
    
    window.sessionStorage.removeItem('adminToken');
    window.location.href = '/admin';
});

const changePageWithCurrentHash = () => {
    const hash = window.location.hash.slice(1);
    if(hash === 'products') {
        document.getElementById('panel-categories').classList.remove('flex');
        document.getElementById('panel-categories').classList.add('hidden');

        document.getElementById('panel-products').classList.remove('hidden');
        document.getElementById('panel-products').classList.add('flex');

        showProductsInDOM();
    }else if(hash === 'categories') {
        document.getElementById('panel-products').classList.remove('flex');
        document.getElementById('panel-products').classList.add('hidden');

        document.getElementById('panel-categories').classList.remove('hidden');
        document.getElementById('panel-categories').classList.add('flex');

        showCategoriesInDOM();
    };
};

window.addEventListener('hashchange', (e) => {
    changePageWithCurrentHash();
});

window.addEventListener('load', (e) => {
    changePageWithCurrentHash();
});