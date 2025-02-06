<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>js/bootstrap.js"></script>



<script>
    $(document).ready(function() {
        $('.hapus-data').on('click', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');
            $('#konfirm-hapus').attr('href', link);
            $('#hapus-kofirm').modal({
                backdrop: 'static',
                show: true
            });
        });
    });
</script>
</body>

</html>