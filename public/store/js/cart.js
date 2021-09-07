/*selectors*/
let cart = document.querySelector('.shopping-cart-items'); // total product count dev in the top cart ul
let cartShow = document.getElementById('cart_count_show'); // total product count dev in cart details page
let notifyBell = document.getElementById('notification-bell');
/*end selectors*/

/* states */
let url = ''; // gets current website url

// updates the total count for the top nav cart and the cart details page
const updateCount = () => {
    let count = 0.00;
    axios.post(route('store.cart.total'))
        .then(res => {
            count = parseFloat(res.data.total); // total count from api
            // top nav cart total price update
            // document.getElementById('cart_count').innerHTML = `subtotal : <span>EGP ${count}</span>`;
            document.getElementById('cart_count').innerHTML = `EGP ${count}`;
            // total price update for the cart detail page (if dom element exists)
            if(cartShow) {
                cartShow.innerHTML = `EGP ${count}`;
            }
        }).catch(res => {
        console.log(res);
         window.location.href = route('store.login');
        });
}
/*end states*/

const cartAdd =  ( code , quantity = 1 ) => {
    axios.post(route('store.cart.add') , { // add to cart endpoint (only attach)
        'code' : code, // product code
        'quantity' : quantity // product quantity
    }).then(res => {
        if (res.data.add) {
            getProducts(); // well update top nav cart with the new products added
        }
    }).then(res => {
        updateCount(); // well update the total count for (top nav cart , product details cart)
    }).catch(res => {
        window.location.href = route('store.login'); // alert if there is an error
    });
};

const getProducts = () => {
    axios.post(route('store.cart.all')) // get all products in cart endpoint
        .then(res => {
            renderItems(res.data.products); // renders the html content in the main dev within the ul
            updateNotificationCount(res.data.products.length);
         })
        .catch(res => {
            console.log(res);
            window.location.href = route('store.login');
         })
}

const updateNotificationCount = (count) => {
    notifyBell.innerText = count;
}

const renderItems = (products) => {
    cart.innerHTML = ''; // clears the html content in the main top nav dev inside the ul
    products.map(product => {
       cart.innerHTML +=
            `
                <li id="${product.code}">
                        <div class="media">
                            <a href="${route('store.product.show' , product.slug)}">
                             <img class="mr-3" src="${url}${product.thumbnail}" alt="Generic placeholder image">
                            </a>
                            <div class="media-body">
                                <a href="${route('store.product.show' , product.slug)}">
                                    <h4>${product.product_en.title}</h4>
                                </a>
                                <h4><span> ${product.pivot.quantity} x EGP ${product.price}</span></h4>
                            </div>
                        </div>
                        <div class="close-circle">
                            <a href="#" onclick="cartRemove('${product.code}')">
                            <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
       `;
    });
}

const cartRemove = (code) => {
    let element = document.querySelector('.\\'+code); // gets the dev inside cart details page to be removed.
    axios.post(route('store.cart.remove') , {
        'code' : code,
    }).then(res => {
        if (element){
            element.remove();
        }
        getProducts();
    }).then(res => {
        updateCount();
    }).catch(res => {
        window.location.href = route('store.login');
    });
};

// item increment for the cart details page
const itemIncrement = (event , code , price) => {
    let element = document.getElementById('total'+code);
    axios.post(route('store.cart.increment') , { // add to cart endpoint (detach then attach = syncing) with the new quantity
        'code' : code,
        'quantity' : event.value
    }).then(res => {
        getProducts();
        updateCount();
        element.innerHTML = `EGP ${parseFloat(price) * parseFloat(event.value)}`;
    }).catch(res => {
        window.location.href = route('store.login');
    })
};

// item increment for the product details page
const itemIncrementProduct = (code) => {
    let quantity = document.querySelector('.quantity').value;
    axios.post(route('store.cart.increment') , { // add to cart endpoint (detach then attach = syncing) with the new quantity
        'code' : code,
        'quantity' : quantity
    }).then(res => {
        getProducts();
        updateCount();
    }).catch(res => {
        window.location.href = route('store.login');
    })
};

const itemBuyNow = async (code) => {
    await itemIncrementProduct(code);
    window.location.href = route('store.checkout');
}

/*page*load*events*/
(() => {
    let count = cart.childElementCount;
    updateNotificationCount(count);
})(cart);
/*page*load*events*end*/


/*##########Abdelrahman##Mohammed#El-sayed###########
* ##############FullStack#Web#Developer#############
* ##########Phone#=>01121226689##Egypt##############
* ######Email#=>abdo.moh96@outlook.com##############
* ######github#=>github.com/AbdoMoh96/##############*/

