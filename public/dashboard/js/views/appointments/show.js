const remove = (id) => {
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
                        swal("Poof! Appointment has been deleted!", {
                            icon: "success",
                        });
                        setTimeout(() => { window.location.href = route('admin.appointment.index'); } , 1100);
                    })
                    .catch((err) => {
                        swal("Server Error", {
                            icon: "error",
                        });
                    });
            } else {
                swal("Appointment is safe", {
                    icon: "info",
                });
            }

        });
}
