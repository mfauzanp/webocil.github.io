const flashdata = $('.flash-data').data('flashdata');

if (flashdata) {
    Swal({
        title: 'Data Anggota' + flashdata,
        Text: 'Berhasil' + flashdata,
        Type: 'success'
    });
}

//tombol hapus
$('.tombol-hapus').on('click', function(e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda yakin',
        text: "data anggota ini di hapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});