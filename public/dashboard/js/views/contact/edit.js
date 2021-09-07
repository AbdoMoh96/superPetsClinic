// language form switch custom code

document.getElementById('lang_en').addEventListener('click' , () => {
    document.getElementById('en').classList.remove('hide');
    document.getElementById('ar').classList.add('hide');
});
document.getElementById('lang_ar').addEventListener('click' , () => {
    document.getElementById('en').classList.add('hide');
    document.getElementById('ar').classList.remove('hide');
});
// language form switch custom code
