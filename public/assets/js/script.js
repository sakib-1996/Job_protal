const sidebarToggle = document.querySelector("#sidebar-toggle");
sidebarToggle.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("collapsed");
});

document.querySelector(".theme-toggle").addEventListener("click", () => {
    toggleLocalStorage();
    toggleRootClass();
});

function toggleRootClass() {
    const currentTheme = document.documentElement.getAttribute("data-bs-theme");
    const newTheme = currentTheme === "dark" ? "light" : "dark";
    document.documentElement.setAttribute("data-bs-theme", newTheme);
}

function toggleLocalStorage() {
    if (isLight()) {
        localStorage.removeItem("light");
        setTextColor("#fff"); // Change text color to white
    } else {
        localStorage.setItem("light", "set");
        setTextColor("black"); // Change text color to black
    }
}

function setTextColor(color) {
    document.body.style.color = color;
    document.querySelectorAll('.note-frame').forEach(function(noteFrame) {
        noteFrame.style.color = color; 
    });
}

function isLight() {
    return localStorage.getItem("light") === "set";
}

if (isLight()) {
    toggleRootClass();
}
