import { getCountries, getStates, getUserAddresses, getUserData, updateAddress, deleteAddress } from "./admin/services.js";

const token = window.sessionStorage.getItem('userToken');
if(!token) window.location.href = '/index';

const domLogoutBtn = document.getElementById('logout-btn');

const domUserName = document.getElementById('user-name');
const domUserEmail = document.getElementById('user-email');
const domUserPhoto = document.getElementById('user-photo');

domLogoutBtn.addEventListener('click', (e) => {
    window.sessionStorage.removeItem('userToken');
    window.location.href = '/index';
});

const domUserAddresses = document.getElementById('user-addresses');


const userAddresesData = [];
const addressInputList = [];

let statesPerCountry = [];

const sendAddresData = async (index, id) => {
    let data
    if(userAddresesData[index]) { 
        data = await updateAddress(id, token, userAddresesData[index])
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
};

const changeInputVisibility = (i) => {
    addressInputList[i].inputs.map((element, i) => {
        if(element.classList.contains('hidden')) {
            element.classList.remove('hidden');
            element.classList.add('block');
        } else {
            element.classList.add('hidden');
            element.classList.remove('block');
        };
    });

    addressInputList[i].ps.map((element, i) => {
        if(element.classList.contains('hidden')) {
            element.classList.remove('hidden');
            element.classList.add('block');
        } else {
            element.classList.add('hidden');
            element.classList.remove('block');
        };
    });

    if(addressInputList[i].sendBtn.classList.contains('hidden')) {
        addressInputList[i].sendBtn.classList.remove('hidden');
        addressInputList[i].sendBtn.classList.add('block')
    } else {
        addressInputList[i].sendBtn.classList.add('hidden');
        addressInputList[i].sendBtn.classList.remove('block')
    };
};

const updateUserAddressContent = (i, key, value) => {
    userAddresesData[i] = { ...userAddresesData[i], [key]: value };
};

const deleteUserAddress = (id) => {
    Swal.fire({
        title: '¿Realmente quiere eliminar este elemento?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Si',
        denyButtonText: `No`,
    }).then((result) => {
        if (result.isConfirmed) {
            deleteAddress(id, token);
            Swal.fire('Dirección eliminado', '', 'success')
            chargeDataInDOM();
        } else if (result.isDenied) {
            return;
        }
    });
};

const chargeAddressData = async (countries) => {
    const data = await getUserAddresses(token);
    
    data.map((element, i) => {
        addressInputList.push({ inputs: [], ps: [], sendBtn: null });

        const div = document.createElement('div');

        const editBtn = document.createElement('button');
        editBtn.classList = 'px-2 py-1 mb-2 text-white bg-green-500 rounded-md shadow-md w-fit hover:bg-green-600 mt-4';
        editBtn.textContent = 'Editar';
        editBtn.addEventListener('click', (e) => changeInputVisibility(i));

        const deleteBtn = document.createElement('button');
        deleteBtn.classList = 'px-2 py-1 mb-2 mr-2 text-white bg-red-500 rounded-md shadow-md w-fit hover:bg-red-600 mt-4';
        deleteBtn.textContent = 'Eliminar';
        deleteBtn.addEventListener('click', (e) => deleteUserAddress(element.id));

        const form = document.createElement('form');
        form.classList = 'grid gap-2 p-2 text-sm rounded-md bg-gray-50 md:grid-cols-2'
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            sendAddresData(i, element.id)
        });
        
        {
            const divInputGroup = document.createElement('div');
            divInputGroup.classList = 'grid grid-cols-2';
            {
                const domUserAddresLabel = document.createElement('label');
                domUserAddresLabel.classList = 'px-4 py-2 font-semibold';
                domUserAddresLabel.htmlFor = 'user-address';
                domUserAddresLabel.textContent = 'Dirección';

                const domUserAddressInput = document.createElement('input');
                domUserAddressInput.classList = 'hidden px-4 py-2 border rounded-md border-slate-400';
                domUserAddressInput.type = 'text';
                domUserAddressInput.name = 'user-address';
                domUserAddressInput.value = `${element.address}`;
                domUserAddressInput.addEventListener('keyup', (e) => updateUserAddressContent(i, 'address', e.target.value));
                addressInputList[i].inputs.push(domUserAddressInput);
                
                const domUserAddressP = document.createElement('p');
                domUserAddressP.classList = 'px-4 py-2';
                domUserAddressP.textContent = `${element.address}`;
                addressInputList[i].ps.push(domUserAddressP);

                divInputGroup.appendChild(domUserAddresLabel);
                divInputGroup.appendChild(domUserAddressInput);
                divInputGroup.appendChild(domUserAddressP);
            }
            form.appendChild(divInputGroup);
        }

        {
            const divInputGroup = document.createElement('div');
            divInputGroup.classList = 'grid grid-cols-2';
            {
                const domUserZipcodeLabel = document.createElement('label');
                domUserZipcodeLabel.classList = 'px-4 py-2 font-semibold';
                domUserZipcodeLabel.htmlFor = 'user-zipcode';
                domUserZipcodeLabel.textContent = 'Código postal';

                const domUserZipcodeInput = document.createElement('input');
                domUserZipcodeInput.classList = 'hidden px-4 py-2 border rounded-md border-slate-400';
                domUserZipcodeInput.type = 'text';
                domUserZipcodeInput.name = 'user-zipcode';
                domUserZipcodeInput.value = `${element.zipcode}`;
                domUserZipcodeInput.addEventListener('keyup', (e) => updateUserAddressContent(i, 'zipcode', e.target.value));
                addressInputList[i].inputs.push(domUserZipcodeInput);
                
                const domUserZipcodeP = document.createElement('p');
                domUserZipcodeP.classList = 'px-4 py-2';
                domUserZipcodeP.textContent = `${element.zipcode}`;
                addressInputList[i].ps.push(domUserZipcodeP);

                divInputGroup.appendChild(domUserZipcodeLabel);
                divInputGroup.appendChild(domUserZipcodeInput);
                divInputGroup.appendChild(domUserZipcodeP);
            }
            form.appendChild(divInputGroup);
        }

        {
            const divInputGroup = document.createElement('div');
            divInputGroup.classList = 'grid grid-cols-2';
            {
                const domUserCityLabel = document.createElement('label');
                domUserCityLabel.classList = 'px-4 py-2 font-semibold';
                domUserCityLabel.htmlFor = 'user-city';
                domUserCityLabel.textContent = 'Ciudad';

                const domUserCityInput = document.createElement('input');
                domUserCityInput.classList = 'hidden px-4 py-2 border rounded-md border-slate-400';
                domUserCityInput.type = 'text';
                domUserCityInput.name = 'user-city';
                domUserCityInput.value = `${element.zipcode}`;
                domUserCityInput.addEventListener('keyup', (e) => updateUserAddressContent(i, 'city', e.target.value));
                addressInputList[i].inputs.push(domUserCityInput);
                
                const domUserCityP = document.createElement('p');
                domUserCityP.classList = 'px-4 py-2';
                domUserCityP.textContent = `${element.city}`;
                addressInputList[i].ps.push(domUserCityP);

                divInputGroup.appendChild(domUserCityLabel);
                divInputGroup.appendChild(domUserCityInput);
                divInputGroup.appendChild(domUserCityP);
            }
            form.appendChild(divInputGroup);
        }

        {
            const divInputGroup = document.createElement('div');
            divInputGroup.classList = 'grid grid-cols-2';
            {
                const domUserCountryLabel = document.createElement('label');
                domUserCountryLabel.classList = 'px-4 py-2 font-semibold';
                domUserCountryLabel.htmlFor = 'user-country';
                domUserCountryLabel.textContent = 'Pais';

                const domUserCountrySelect = document.createElement('select');
                domUserCountrySelect.classList = 'hidden px-4 py-2 bg-white border rounded-md border-slate-400';
                domUserCountrySelect.name='user-country'
                countries.map((country, i) => {
                    const option = document.createElement('option');
                    
                    option.textContent = country.name;
                    option.value = country.id;
                    option.selected = country.id === element.countries_id ? 'selected' : '';
                    
                    domUserCountrySelect.appendChild(option);
                });
                
                domUserCountrySelect.addEventListener('change', async (e) => {
                    updateUserAddressContent(i, 'countries_id', e.target.value);
                    statesPerCountry = await getStates(e.target.value, token);


                    document.getElementById('user-states').innerHTML = '';
                    statesPerCountry.map((state, i) => {
                        const option = document.createElement('option');
                        
                        option.textContent = state.name;
                        option.value = state.id;
                        
                        document.getElementById('user-states').appendChild(option);
                    });

                });

                addressInputList[i].inputs.push(domUserCountrySelect);
                
                const domUserSelectP = document.createElement('p');
                domUserSelectP.classList = 'px-4 py-2';
                domUserSelectP.textContent = `${element.countries_id}`;
                addressInputList[i].ps.push(domUserSelectP);

                divInputGroup.appendChild(domUserCountryLabel);
                divInputGroup.appendChild(domUserCountrySelect);
                divInputGroup.appendChild(domUserSelectP);
            }
            form.appendChild(divInputGroup);
        }

        {
            const divInputGroup = document.createElement('div');
            divInputGroup.classList = 'grid grid-cols-2';
            {
                const domUserStateLabel = document.createElement('label');
                domUserStateLabel.classList = 'px-4 py-2 font-semibold';
                domUserStateLabel.htmlFor = 'user-state';
                domUserStateLabel.textContent = 'Departamento';

                const domUserStateSelect = document.createElement('select');
                domUserStateSelect.classList = 'hidden px-4 py-2 bg-white border rounded-md border-slate-400';
                domUserStateSelect.name='user-state';
                domUserStateSelect.id = 'user-states';

                statesPerCountry.map((state, i) => {
                    const option = document.createElement('option');
                    
                    option.textContent = state.name;
                    option.value = state.id;
                    
                    domUserStateSelect.appendChild(option);
                });
                domUserStateSelect.addEventListener('change', (e)=> updateUserAddressContent(i, 'states_id', e.target.value));
                addressInputList[i].inputs.push(domUserStateSelect);
                
                const domUserSelectState = document.createElement('p');
                domUserSelectState.classList = 'px-4 py-2';
                domUserSelectState.textContent = `${element.countries_id}`;
                addressInputList[i].ps.push(domUserSelectState);

                divInputGroup.appendChild(domUserStateLabel);
                divInputGroup.appendChild(domUserStateSelect);
                divInputGroup.appendChild(domUserSelectState);
            }
            form.appendChild(divInputGroup);
        }

        {
            const divBtn = document.createElement('div');
            divBtn.classList = 'flex justify-end';
            {
                const submitBtn = document.createElement('button');
                submitBtn.classList = 'hidden px-2 py-1 text-white bg-indigo-500 rounded-md shadow-md w-fit hover:bg-indigo-600';
                submitBtn.type = 'submit';
                submitBtn.textContent = 'Enviar'
                addressInputList[i].sendBtn = submitBtn;

                divBtn.appendChild(submitBtn);
            }

            form.appendChild(divBtn);
        }
        
        div.appendChild(deleteBtn);
        div.appendChild(editBtn);
        div.appendChild(form);

        domUserAddresses.appendChild(div);
    });
};


const chargeUserData = async () => {
    const userData = await getUserData(token);

    domUserName.textContent = userData.name;
    domUserEmail.textContent = userData.email;
    domUserPhoto.src = userData.profile_photo_url;
};

const chargeDataInDOM = async () => {
    domUserAddresses.innerHTML = '';

    chargeUserData();

    const countries = await getCountries(token);

    chargeAddressData(countries);
};

(() => chargeDataInDOM() )();