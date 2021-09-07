const remove = (id) => {
    let tr =  document.getElementById(id);
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this appointment!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                axios.delete(route('admin.appointment.delete' , id))
                    .then((res) => {
                        tr.remove();
                        swal("Poof! appointment has been deleted!", {
                            icon: "success",
                        });
                    }).catch((err) => {
                    swal("Server Error", {
                        icon: "error",
                    });
                });
            } else {
                swal("appointment is safe", {
                    icon: "info",
                });
            }
        });
}
