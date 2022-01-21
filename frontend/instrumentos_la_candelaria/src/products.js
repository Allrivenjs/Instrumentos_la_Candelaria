import { getProducts  } from "./services.js";


const domProducts = document.getElementById('products');

const showProductsInDOM = async () => {
    const data = await getProducts();

    console.log(data);
};


(() => { showProductsInDOM() })();