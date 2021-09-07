const remove = (id) => {
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
                        swal("Poof! Email has been deleted!", {
                            icon: "success",
                        });
                        setTimeout(() => { window.location.href = route('admin.mail.index'); } , 1100);
                    })
                    .catch((err) => {
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
