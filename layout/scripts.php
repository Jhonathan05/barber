<!----------------------------------------------------------------------------------------Script Boostrap----------------------------------------------------------------------->
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });

</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<!----------------------------------------------------------------------------------------Script Boostrap----------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------Script Modal (btn-popup)-------------------------------------------------------------->

<script>
        // If user clicks anywhere outside of the modal, Modal will close

        var modal = document.getElementById('modal-wrapper-infouser');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
</script>


<!----------------------------------------------------------------------------------------Script Modal (btn-popup)-------------------------------------------------------------->


<!----------------------------------------------------------------------------------------Tabla----------------------------------------------------------------------->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="assets/js/Simple-Slider.js"></script>
<!----------------------------------------------------------------------------------------Tabla----------------------------------------------------------------------->
