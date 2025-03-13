document.getElementById("commentForm").addEventListener("submit", function(event) {
    let name = document.getElementById("name").value.trim();
    let comment = document.getElementById("comment").value.trim();

    if (name === "" || comment === "") {
        alert("Please enter both a name and a comment.");
        event.preventDefault(); // Stop form submission
    }
});
