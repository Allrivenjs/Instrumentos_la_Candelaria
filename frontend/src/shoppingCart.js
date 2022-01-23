import { getCartData, getProduct, deleteCartItem } from "./admin/services.js";
import { STORAGE_URL } from "./admin/config/config.js";

const token = window.sessionStorage.getItem('userToken');
if(!token) window.location.href = '/login';

const shoppingCartProducts = document.getElementById('shopping-cart-products');

const cartQuantityTags = document.getElementsByClassName('cart-quantity');
const totalPriceTags = document.getElementsByClassName('total-price');


const removeItemCart = (id) => {
    Swal.fire({
        title: '¿Realmente quiere eliminar este elemento?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Si',
        denyButtonText: `No`,
    }).then((result) => {
        if (result.isConfirmed) {
            deleteCartItem(id, token);
            Swal.fire('Item eliminado del carrito', '', 'success')
            showCartElements();
        } else if (result.isDenied) {
            return;
        }
    });
};

const showCartElements = async () => {
    const userCartData = await getCartData(token);

    shoppingCartProducts.innerHTML = '';

    let totalPrice = 0;
    let totalItems = 0;

    userCartData.map( async (element, i) => {

        const product = await getProduct(element.product_id);


        const div = document.createElement('div'); 
        div.classList = 'product__row';

        {
            const divDetails = document.createElement('div'); 
            divDetails.classList = 'product__details';

            {
                const img = document.createElement('img')
                img.classList = 'product__img mr-2';
                img.src = `${STORAGE_URL}/${product.thumbnail}`;
                img.alt = product.name;

                const divDetailsInfo = document.createElement('div');
                divDetailsInfo.classList = 'product__details-info';

                const divDetailsInfoName = document.createElement('div');

                divDetailsInfoName.innerHTML = `
                    <h3 class="mb-2">${product.name}</h3>
                    <p>${product.sku}</p>
                `;

                const removeBtn = document.createElement('button');
                removeBtn.classList = 'remove-btn inline-block';
                removeBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    removeItemCart(element.id);
                });
                removeBtn.textContent = 'Eliminar';

                divDetailsInfo.appendChild(divDetailsInfoName);
                divDetailsInfo.appendChild(removeBtn);


                divDetails.appendChild(img);
                divDetails.appendChild(divDetailsInfo);
            }

            const divProductInfo = document.createElement('div'); 
            divProductInfo.classList = 'product__info';

            totalPrice+=product.price;

            divProductInfo.innerHTML = `
                <div class="product__info-item">
                    ${element.quantity}
                </div>
                <div class="product__info-item">
                $COP ${product.price}
                </div>
                <div class="product__info-item">
                    $COP ${totalPrice}
                </div>
            `;
            

            div.appendChild(divDetails);
            div.appendChild(divProductInfo);
        }

        totalItems += parseInt(element.quantity);

        for(const element of cartQuantityTags) {
            element.textContent = `${totalItems} Items`;
        };

        for(const element of totalPriceTags) {
            element.textContent = `$COP ${totalPrice}`;
        };

        shoppingCartProducts.appendChild(div);
    });
};

const showElementsInDOM = () => {
    showCartElements();
};


(() => { showElementsInDOM() })();