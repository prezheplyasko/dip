const siteRoot = '/asian';
function remove(section, id) {
    if (confirm('Вы дейтсвительно хотите удалить эту запись?')) {
        window.location.href = `${siteRoot}/${section}/delete/${id}`;
    }
}



function addToCart(id) {
    alert('Товар добавлен в Корзину');
    const cart = getCookie('cart') ? JSON.parse(getCookie('cart')) : {};
    if (cart.hasOwnProperty(id)) {
        cart[id]++;
    } else {
        cart[id] = 1;
    }
    setCookie('cart', JSON.stringify(cart), { path: '/' });
}

const steppers = document.querySelectorAll('.stepper');
steppers.forEach((stepper) => {
    stepper.addEventListener('change', () => {
        const element = stepper.parentElement.nextSibling.nextSibling;
        const price = stepper.attributes['data-price'].nodeValue;
        const count = stepper.value;
        element.innerHTML = `<td> ${count * price} </td>`;
    });
});



function removeFromCart(id) {
    const cart = getCookie('cart') ? JSON.parse(getCookie('cart')) : {};
    delete(cart[id]);
    setCookie('cart', JSON.stringify(cart), { path: '/' });
    window.location.reload();
}

