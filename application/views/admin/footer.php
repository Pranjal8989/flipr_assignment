<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

<script>
    document.getElementById("sidebarToggleBtn").addEventListener("click", function () {
        var sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("active");

        var formWrapper = document.querySelector(".form-wrapper");
        if (sidebar.classList.contains("active")) {
            formWrapper.style.marginLeft = "260px"; // Adjust the form width when sidebar is open
        } else {
            formWrapper.style.marginLeft = "0px"; // Restore the original margin when sidebar is closed
        }
    });
</script>
</body>
</body>

</html>