export const getProducts = async (array) => {
    try {
        const res = await fetch(`http://127.0.0.1:8000/api/products`);
        const data = await res.json();
        return data;
    } catch(e) {
        console.log(e);
    };
};