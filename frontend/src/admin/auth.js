export const adminAuth = () => {
    const token = window.sessionStorage.getItem('adminToken');

    if(token) return token;
    else window.location.href = '/admin/index';
};

export const userAuth = () => {
    const token = window.sessionStorage.getItem('userToken');

    if(token) return token;
    else window.location.href = '/index';
};

export const isAdminAuth = () => {
    const token = window.sessionStorage.getItem('adminToken');
    if(token) return true;
    else return false;
};

export const isUserAuth = () => {
    const token = window.sessionStorage.getItem('userToken');
    if(token) return true;
    else return false;
};