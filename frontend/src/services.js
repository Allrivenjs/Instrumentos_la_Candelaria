const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

export const getProducts = async (url) => {
    const res = await fetch(url, { method: 'GET', headers, });
    const data = await res.json();
    return { data: data.data, links: data.links, meta: data.meta };
};