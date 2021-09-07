// filepond file upload
FilePond.parse(document.body);
FilePond.setOptions({
    server: {
        url: route("admin.upload.image"),
        method: 'POST',
        revert: (uniqueFileId, load, error) => {
            axios.delete(route("admin.delete.image") ,{
                data : {
                    "path" : uniqueFileId
                }
            });
            load();
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content'),
            'dir' : 'storage/images/category'
        },
    },
    allowFileTypeValidation : true,
    acceptedFileTypes : ['image/jpeg' , 'image/png'],
    labelFileTypeNotAllowed : "only images",
    maxFileSize : '5MB',
    labelMaxFileSizeExceeded : "it's to large!!"
});
// end filepond

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
