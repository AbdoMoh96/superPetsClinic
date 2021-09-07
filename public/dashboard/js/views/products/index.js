const remove = (id) => {
    let tr =  document.getElementById(id);
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this product!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                axios.delete(route('admin.product.delete' , id))
                    .then((res) => {
                        tr.remove();
                        swal("Poof! Product has been deleted!", {
                            icon: "success",
                        });
                    }).catch((err) => {
                    swal("Server Error", {
                        icon: "error",
                    });
                });
            } else {
                swal("your product is safe", {
                    icon: "info",
                });
            }
        });
}
