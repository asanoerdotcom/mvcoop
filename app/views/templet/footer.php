<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>js/bootstrap.js"></script>



<script>
    $(function() {
        $('.hapus-data').on('click', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');
            $('#konfirm-hapus').attr('href', link);
            $('#hapus-kofirm').modal({
                backdrop: 'static',
                show: true
            });
        });

        $('#tbTambahData').on('click', function() {
            $('#formTambah form').attr('action', $(this).attr('data-action'));
            $('#judulModal').html('Data Mahasiswa Baru');
            $('.modal-footer button[type=submit]').text('Simpan');
            // Kosongkan semua inputan
            $('#nama').val('');
            $('#nim').val('');
            $('#email').val('');
            $('#jurusan').val('');
        });

        $('.ubah-data').on('click', function(e) {
            e.preventDefault();
            $('#judulModal').html('Ubah Data Berikut');
            $('.modal-footer button[type=submit]').text('Ubah');
            $('#formTambah form').attr('action', $(this).attr('data-action'));
            var link = $(this).attr('href');

            $.ajax({
                url: link,
                dataType: 'json',
                success: function(data) {
                    $('#id').val(data.id);
                    $('#nama').val(data.nama);
                    $('#nim').val(data.nim);
                    $('#email').val(data.email);
                    $('#jurusan').val(data.jurusan);
                }

            })
        });
    });
</script>
</body>

</html>