const remove = (id) => {
    let tr =  document.getElementById(id);
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this slide!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                axios.delete(route('admin.slider.slides.delete' , id))
                    .then((res) => {
                        tr.remove();
                        swal("Poof! Slide has been deleted!", {
                            icon: "success",
                        });
                    }).catch((err) => {
                    swal("Server Error", {
                        icon: "error",
                    });
                });
            } else {
                swal("your slide is safe", {
                    icon: "info",
                });
            }
        });
}
