import { getCountries, getStates, storeAddress } from "./admin/services.js";

const token = window.sessionStorage.getItem('userToken');
if(!token) window.location.href = '/index';

// Inputs
const domUserAddressInput = document.getElementById('user-address');
const domUserZipcodeInput = document.getElementById('user-zipcode');
const domUserCityInput = document.getElementById('user-city');
const domUserStateSelect = document.getElementById('user-state');
const domUserCountrySelect = document.getElementById('user-country');

const domForm = document.getElementById('form-new-address');

const userAddress = {
    address: '',
    zipcode: '',
    city: '',
    countries_id: '',
    states_id: '',
};

domUserAddressInput.addEventListener('keyup', (e) => {
    userAddress.address = e.target.value;
});

domUserZipcodeInput.addEventListener('keyup', (e) => {
    userAddress.zipcode = e.target.value;
});

domUserCityInput.addEventListener('keyup', (e) => {
    userAddress.city = e.target.value;
});

domUserCountrySelect.addEventListener('change', (e) => {
    userAddress.countries_id = e.target.value;
});

domUserStateSelect.addEventListener('change', (e) => {
    userAddress.states_id = e.target.value;
});

domForm.addEventListener('submit', async (e) => {
    e.preventDefault();

    let data;
    if(userAddress) { 
        data = await storeAddress(token, userAddress);
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Rellene todos los datos',
        });
    };
    if(data !== false) {
        Swal.fire({
            icon: 'info',
            title: 'Exito',
            text: 'Dirección actualizada con exito',
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Algo salio mal con los datos, intentalo de nuevo',
        });
    }
});

const chargeCountries = async () => {
    const countries = await getCountries(token);
    let states;

    countries.map((country, i) => {
        const option = document.createElement('option');
        
        option.textContent = country.name;
        option.value = country.id;
        
        domUserCountrySelect.appendChild(option);
    });

    domUserCountrySelect.addEventListener('change', async (e) => {
        states = await getStates(e.target.value, token);

        domUserStateSelect.innerHTML = '';
        states.map((state, i) => {
            const option = document.createElement('option');
            
            option.textContent = state.name;
            option.value = state.id;
            
            domUserStateSelect.appendChild(option);
        });

    });
};

const chargeElementsInDOM = () => {
    chargeCountries();
};

(() => chargeElementsInDOM())();