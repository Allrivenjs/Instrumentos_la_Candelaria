import { API_URL } from "./config/config.js";

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

const headers2 = {
    "Accept": "application/json",
};


// AUTH
export const login = async (user) => {
    const res = await fetch(`${API_URL}/auth/login`, { method: 'POST', headers, body: JSON.stringify(user) });
    if(res.status === 200) {
        const data = await res.json();
        return data.access_token;
    } else {
        const data = await res.json();
        return false;
    };
};

export const register = async (user) => {
    const res = await fetch(`${API_URL}/auth/register`, { method: 'POST', headers, body: JSON.stringify(user) });
    if(res.status === 200) {
        const data = await res.json();
        console.log(data);
        return data.access_token;
    } else {
        const data = await res.json();
        return false;
    };
};

// PRODUCTS
export const getProducts = async (url = `${API_URL}/products`) => {
    const res = await fetch(url, { method: 'GET', headers, });
    const data = await res.json();
    return { data: data.data, links: data.meta.links, meta: data.meta };
};

export const getProduct = async (id) => {
    const res = await fetch(`${API_URL}/products/${id}`, { method: 'GET', headers, });
    const data = await res.json();
    return data.data;
};

export const updateProduct = async (id, product, token) => {
    const body = new FormData();

    console.log(product);

    body.append('name', product.name);
    body.append('price', product.price);
    body.append('weight', product.weight);
    body.append('stock', product.stock);
    body.append('description', product.description);
    body.append('thumbnail', product.thumbnail);

    const res = await fetch(`${API_URL}/products/${id}`, { method: 'POST',
        headers: { ...headers2, "Authorization": `Bearer ${token}` }, 
        body,
    });
    const data = await res.json();
    return data;
};

export const storeProduct = async (product, token) => {
    const body = new FormData();

    body.append('name', product.name);
    body.append('price', product.price);
    body.append('weight', product.weight);
    body.append('stock', product.stock);
    body.append('description', product.description);
    body.append('thumbnail', product.thumbnail);

    for(const image of product.images) {
        body.append('images[]', image);
    }

    const res = await fetch(`${API_URL}/products`, { method: 'POST',
        headers: { ...headers2, "Authorization": `Bearer ${token}` }, 
        body,
    });

    const data = await res.json();
    return data;
};

export const deteleProduct = async (id, token) => {

    const res = await fetch(`${API_URL}/products/${id}`, { method: 'DELETE',
        headers: { ...headers,  "Authorization": `Bearer ${token}` }
    });

    const data = await res.json();
    return data.data;
};


// CATEGORIES
export const getCategories = async (url = `${API_URL}/categories`) => {
    const res = await fetch(url, { method: 'GET', headers, });
    const data = await res.json();

    return { data: data.data, links: data.links };
};

export const getCategory = async (id) => {
    const res = await fetch(`${API_URL}/categories/${id}`, { method: 'GET', headers, });
    const data = await res.json();
    return data.data;
};

export const updateCategory = async (id, category, token) => {
    const body = new FormData();

    body.append('name', category.name);
    body.append('description', category.description);
    body.append('_method', 'PUT');

    const res = await fetch(`${API_URL}/categories/${id}`, { method: 'POST',
        headers: {
            "Accept": "application/json",
            "Authorization": `Bearer ${token}`,
        },
        body,
    });
    const data = await res.json();
    return data;
};

export const storeCategory = async (category, token) => {
    const body = new FormData();

    body.append('name', category.name);
    body.append('description', category.description);


    const res = await fetch(`${API_URL}/categories`, { method: 'POST',
        headers: { 
            "Accept": "application/json",
            "Authorization": `Bearer ${token}`
        }, 
        body,
    });

    const data = await res.json();
    return data;
};

export const deteleCategory = async (id, token) => {

    const res = await fetch(`${API_URL}/categories/${id}`, { method: 'DELETE',
        headers: { ...headers,  "Authorization": `Bearer ${token}` }
    });
    
    const data = await res.json();
    return data.data;
};

// USER DATA

export const getUserData = async (token) => {
    const res = await fetch(`${API_URL}/user`, { method: 'GET', 
        headers: {...headers, "Authorization": `Bearer ${token}` }
    });
    const data = await res.json();
    return data;
};

export const getUserAddresses = async (token) => {
    const res = await fetch(`${API_URL}/address`, { method: 'GET', 
        headers: {...headers, "Authorization": `Bearer ${token}` }
    });
    const data = await res.json();
    return data.data;
};

export const getCountries = async (token) => {
    const res = await fetch(`${API_URL}/countries`, { method: 'GET', 
        headers: {...headers, "Authorization": `Bearer ${token}` }
    });
    const data = await res.json();
    return data.data;
};

export const getStates = async (id, token) => {
    const res = await fetch(`${API_URL}/states/${id}`, { method: 'GET', 
        headers: {...headers, "Authorization": `Bearer ${token}` }
    });
    const data = await res.json();
    return data.data;
};

export const updateAddress = async (id, token, body) => {

    console.log(body);

    const res = await fetch(`${API_URL}/address/${id}`, { method: 'PUT', 
        headers: {...headers, "Authorization": `Bearer ${token}` },
        body: JSON.stringify(body)
    });
    if(res.status == 200) {
        const data = await res.json();
        return data.data;
    } else {
        const data = await res.json();
        console.log(data);
        return false;
    }
};

export const storeAddress = async (token, body) => {

    console.log(body);

    const res = await fetch(`${API_URL}/address`, { method: 'POST', 
        headers: {...headers, "Authorization": `Bearer ${token}` },
        body: JSON.stringify(body)
    });
    if(res.status == 200) {
        const data = await res.json();
        return data.data;
    } else {
        const data = await res.json();
        console.log(data);
        return false;
    }
};

export const deleteAddress = async (id, token) => {
    const res = await fetch(`${API_URL}/address/${id}`, { method: 'DELETE', 
        headers: {...headers, "Authorization": `Bearer ${token}` },
    });
    if(res.status == 200) {
        const data = await res.json();
        return data.data;
    } else {
        const data = await res.json();
        console.log(data);
        return false;
    }
};