function toggleDropdown(id) {
    document.querySelectorAll('[id$="Dropdown"], #profileMenu').forEach(dropdown => {
        if (dropdown.id !== id) {
            dropdown.classList.add('hidden');
            dropdown.classList.remove('dropdown-show');
        }
    });

    const target = document.getElementById(id);
    if (target.classList.contains('hidden')) {
        target.classList.remove('hidden');
        setTimeout(() => target.classList.add('dropdown-show'), 10); // delay to trigger transition
    } else {
        target.classList.remove('dropdown-show');
        setTimeout(() => target.classList.add('hidden'), 300);
    }
}

window.addEventListener('click', function (e) {
    if (
        !e.target.closest('button') &&
        !e.target.closest('.relative')
    ) {
        document.querySelectorAll('[id$="Dropdown"], #profileMenu').forEach(dropdown => {
            dropdown.classList.remove('dropdown-show');
            setTimeout(() => dropdown.classList.add('hidden'), 300);
        });
    }
});

function toggleForm() {
    document.getElementById("tireForm").classList.toggle("hidden");
}

const searchInput = document.getElementById("searchInput");
        const tableBody = document.getElementById("tableBody");

        searchInput.addEventListener("input", function () {
            const filter = searchInput.value.toLowerCase();
            const rows = tableBody.getElementsByTagName("tr");

            for (let row of rows) {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(filter) ? "" : "none";
            }
        });

// Toggle Tire Form
    
