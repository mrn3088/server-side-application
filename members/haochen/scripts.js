document.addEventListener('DOMContentLoaded', function() {
    var headings = document.querySelectorAll('.section h3');

    headings.forEach(function(heading) {
        heading.addEventListener('click', function() {
            var content = this.nextElementSibling;
            content.style.display = content.style.display === 'block' ? 'none' : 'block';
        });
    });
});
