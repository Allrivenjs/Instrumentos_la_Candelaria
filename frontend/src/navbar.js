import { isAuth } from "../admin/src/auth.js";

const loginBtn = document.getElementById('login-btn');
const loginBtnMobile = document.getElementById('login-btn-mobile');

const insertLoginBtn = () => {
    console.log(isAuth());
    if(!isAuth()) {
        loginBtn.innerHTML = `
            <img src="./assets/icons/login.svg">
            <a href="./login">Login</a>
        `;
        loginBtnMobile.innerHTML = `
            <img src="./assets/icons/login.svg">
            <a href="./login">Login</a>
        `;
    }else {
        loginBtn.innerHTML = `
            <img src="./assets/icons/user.svg">
            <a href="./profile">Perfil</a>
        `;
        loginBtnMobile.innerHTML = `
            <img src="./assets/icons/user.svg">
            <a href="./profile">Login</a>
        `;
    };
};

const insertNavbarBtns = () => {
    insertLoginBtn();
};

( () => insertNavbarBtns() )();