import { login } from "./admin/services.js";

const token = window.sessionStorage.getItem('userToken');
if(token) window.location.href = '/index';

const domName = document.getElementById('name');
const domPassword = document.getElementById('password');

const domForm = document.getElementById('login-form');

let user = {
    name: '',
    password: '',
};

domName.addEventListener('keyup', (e) => {
    user.name = e.target.value;
});

domPassword.addEventListener('keyup', (e) => {
    user.password = e.target.value;
});

domForm.addEventListener('submit', (e) => {
    e.preventDefault();
    sendLogin();
});

const sendLogin = async () => {
    const token = await login(user);

    console.log(token);

    if(token) {
        window.sessionStorage.setItem('userToken', token)
        window.location.href = '/index'
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Algo ha salido mal! Intentalo de nuevo',
        });
    }
};