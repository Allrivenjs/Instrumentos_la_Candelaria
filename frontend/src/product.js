import { addToCart, getProduct } from "./admin/services.js";
import { API_URL, STORAGE_URL } from "./admin/config/config.js";

const hash = window.location.hash.slice(1);

const productData = await getProduct(hash);

const domProductThumbnail = document.getElementById('product-thumbnail');
const domProductName = document.getElementById('product-name');
const domProductSku = document.getElementById('product-sku');
const domProductPrice = document.getElementById('product-price');
const domProductDescription = document.getElementById('product-description');
const domProductWeight = document.getElementById('product-weight');
const domProductStock = document.getElementById('product-stock');
const domProductImages = document.getElementById('product-images');

const domAñadirAlCarrito = document.getElementById('add-to-cart-btn');

const product = {
    product_id: hash,
    quantity: 0,
}

const domProductCounter = document.getElementById('product-counter');
const domProductPlus = document.getElementById('product-plus');
const domProductMinus = document.getElementById('product-minus');

domProductPlus.addEventListener('click', (e) => {
    product.quantity++;
    if(product.quantity < 0) product.quantity = 0;
    domProductCounter.textContent = product.quantity;
});


domProductMinus.addEventListener('click', (e) => {
    product.quantity--;
    if(product.quantity < 0) product.quantity = 0;
    domProductCounter.textContent = product.quantity;
});


domAñadirAlCarrito.addEventListener('click', async (e) => {
    e.preventDefault();

    const token = window.sessionStorage.getItem('userToken');
    if(!token) {
        window.location.href = '/login';
    } else {
        await addToCart(token, product);
        Swal.fire({
            icon: 'success',
            title: 'Exito!',
            text: 'Producto agregado al carrito con exito!'
        });
    }
});

const showProductInDOM = () => {
    domProductThumbnail.src = `${STORAGE_URL}/${productData.thumbnail}`;
    domProductName.textContent = productData.name;
    domProductSku.textContent = productData.sku;
    domProductPrice.textContent = `$COP ${productData.price}`;
    domProductDescription.textContent = `${productData.description}`;
    domProductDescription.textContent = `${productData.description}`;
    domProductWeight.textContent = `Peso: ${productData.weight}`;
    domProductStock.textContent = `Stock: ${productData.stock}`;

    productData.image.map((element, i) => {
        const img = document.createElement('img');
        img.src = `${STORAGE_URL}/${element.url}`;
        img.style.width = '100%';
        img.classList = 'object-contain';

        domProductImages.appendChild(img);
    });
};

(() => showProductInDOM())();