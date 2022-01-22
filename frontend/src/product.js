import { getProduct } from "./services.js";
import { API_URL } from "./utils/config.js";

const hash = window.location.hash.slice(1);

const productData = await getProduct(hash);

const domProductImg = document.getElementById('product-img');
const domProductName = document.getElementById('product-name');
const domProductBrand = document.getElementById('product-brand');
const domProductSku = document.getElementById('product-sku');
const domProductPrice = document.getElementById('product-price');
const domProductDescription = document.getElementById('product-description');
const domProductWeight = document.getElementById('product-weight');
const domProductStock = document.getElementById('product-stock');

const showProductInDOM = () => {
    domProductImg.src = `${API_URL}/${productData.thumbnail}`;
    domProductName.textContent = productData.name;
    domProductBrand.textContent = 'not found';
    domProductSku.textContent = productData.sku;
    domProductPrice.textContent = `$COP ${productData.price}`;
    domProductDescription.textContent = `${productData.description}`;
    domProductDescription.textContent = `${productData.description}`;
    domProductWeight.textContent = `Peso: ${productData.weight}`;
    domProductStock.textContent = `Stock: ${productData.stock}`;
};

(() => showProductInDOM())();