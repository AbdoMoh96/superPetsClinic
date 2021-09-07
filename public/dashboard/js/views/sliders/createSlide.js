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
                'dir' : 'storage/images/slides'
            },
        },
        allowFileTypeValidation : true,
        acceptedFileTypes : ['image/jpeg' , 'image/png'],
        labelFileTypeNotAllowed : "only images",
        maxFileSize : '5MB',
        labelMaxFileSizeExceeded : "it's to large!!"
    });
// end filepond

// ckeditors
CKEDITOR.replace("description" , {
    width: '100%',
    language: 'en',
});

CKEDITOR.replace("description_ar" , {
    width: '100%',
    language: 'ar',
});
// ckeditors end

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



