export const auth = () => {
    const token = window.sessionStorage.getItem('userToken');

    if(token) return token;
    else window.location.href = '/index';
};

export const isAuth = () => {
    const token = window.sessionStorage.getItem('userToken');
    if(token) return true;
    else return false;
};