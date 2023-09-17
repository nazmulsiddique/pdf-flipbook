<script>
    // Get the current page URL
var currentLocation = window.location.href;

// Get all the links in the navbar
var navLinks = document.querySelectorAll('nav a');

// Loop through the links and add a 'active' class to the current page link
navLinks.forEach(function(link) {
    if (link.href === currentLocation) {
        link.classList.add('active');
    }
});

</script>
</body>
</html>
