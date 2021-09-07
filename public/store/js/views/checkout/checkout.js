/*<==============selectors===============>*/
let addressDiv = document.getElementById('address_div');
let checkoutDiv = document.getElementById('checkout_div');
let nextBtn = document.getElementById('next');
let previousBtn = document.getElementById('previous');
/*<==========end=selectors===============>*/


const showAddress = () => {
    checkoutDiv.classList.add('hide');
    addressDiv.classList.remove('hide');
};

const showCheckout = () => {
  checkoutDiv.classList.remove('hide');
  addressDiv.classList.add('hide');
};



/*<==============events===============>*/
nextBtn.addEventListener('click' , showCheckout);
previousBtn.addEventListener('click' , showAddress);
/*<==========end=events===============>*/


/*##########Abdelrahman##Mohammed#El-sayed###########
* ##############FullStack#Web#Developer#############
* ##########Phone#=>01121226689##Egypt##############
* ######Email#=>abdo.moh96@outlook.com##############
* ######github#=>github.com/AbdoMoh96/##############*/
