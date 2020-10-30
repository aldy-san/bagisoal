<!-- </div> -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $('.custom-file-input').on('change', function() {
        //get the file name
        var fileName = $(this).val().split('\\').pop();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    })
</script>
<script>
    $(document).ready(function() {
        $('.btn-yes').click(function() {
            alert(true);
        });
        $('#btn-delete').click(function() {
            $('#hapus').modal('show');
        })
    });
</script>
</body>

</html>