import { getProducts  } from "./services.js";
import { API_URL } from "./utils/config.js";


const domProducts = document.getElementById('products');
const domPagination = document.getElementById('pagination');

const removePagination = () => {
    domPagination.innerHTML = '';
};

const addPagination = (links) => {
    const paginationBtn = document.createElement('div');
    paginationBtn.classList = 'flex';
    
    links.map((element, i) => {
        console.log(element);
        const button = document.createElement('button');
        button.classList = 'px-3 py-2 border border-slate-300 hover:bg-slate-300';

        if(element.url) button.addEventListener('click', (e) => showProductsInDOM(element.url));

        button.innerHTML = `${element.label}`;
        paginationBtn.appendChild(button);
    });
    
    domPagination.appendChild(paginationBtn);
};

const showProductsInDOM = async (url = "http://127.0.0.1:8000/api/products?page=1") => {
    const { data, links, meta } = await getProducts(url);

    removePagination();
    
    domProducts.innerHTML = '';

    data.map((element, i) => {
        const li = document.createElement('li');
        li.classList = 'h-full w-full'

        li.innerHTML = `
            <a class="h-full w-full" href=${`/product#${element.id}`}> 
                <img src=${`${API_URL}/${element.thumbnail}`}  class="product-img p-3 w-full h-2/3 object-contain" alt=${element.name} />
                <div class="w-full h-1/3 flex flex-col justify-around p-4">
                    <h4 class="text-xl">${element.name}</h4>
                    <p class="text-lg">COP$ ${element.price}</p>
                    <p>${element.stock > 0 
                        ? 
                            `
                            <div class="flex items-center text-md">
                                <span class="w-2 h-2 bg-green-500 inline-block rounded-full mr-2"></span><span class="text-green-500">Disponible</span>
                            </div>
                            ` 
                        : 
                            'No disponible' }
                    </p>
                </div>
            </a>
        `;

        domProducts.appendChild(li);
    });

    addPagination(meta.links);
};


(() => { showProductsInDOM() })();