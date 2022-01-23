export const auth = () => {
    const token = window.sessionStorage.getItem('adminToken');

    if(token) return token;
    else window.location.href = '/admin/index';
};

export const isAuth = () => {
    const token = window.sessionStorage.getItem('adminToken');
    if(token) return true;
    else return false;
};