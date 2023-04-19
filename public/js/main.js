const searchInput = document.getElementById('search');
const rows = document.querySelectorAll('tbody tr');
// console.log(rows);
searchInput.addEventListener('keyup', function (event) {
    // console.log(event);
    const q = event.target.value.toLowerCase();
    rows.forEach((row) => {
            row.querySelector('td').textContent.toLowerCase().startsWith(q) ? row.style.display='' : row.style.display = 'none';
        }
    )
})