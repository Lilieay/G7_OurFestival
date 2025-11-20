const Dropdown = document.getElementById("bar");
Dropdown.addEventListener("click", DropdownFunction);
const List = document.getElementById("mobile-nav")
let check = 0;

function DropdownFunction() {
    if (check == 0) {
        List.classList.remove('hidden');
        List.classList.add('show');
        check = 1;
    }
    else {
        List.classList.remove('show');
        List.classList.add('hidden');
        check = 0;
    }
}