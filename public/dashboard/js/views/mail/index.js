const remove = (id) => {
    let tr =  document.getElementById(id);
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this email!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                axios.delete(route('admin.mail.delete' , id))
                    .then((res) => {
                        tr.remove();
                        swal("Poof! Email has been deleted!", {
                            icon: "success",
                        });
                    }).catch((err) => {
                    swal("Server Error", {
                        icon: "error",
                    });
                });
            } else {
                swal("your email is safe", {
                    icon: "info",
                });
            }
        });
}
