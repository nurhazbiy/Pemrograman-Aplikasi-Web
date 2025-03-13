document.addEventListener("DOMContentLoaded", function() {
    function fetchComments() {
        fetch("get_comments.php")
            .then(response => response.json())
            .then(data => {
                let commentsSection = document.getElementById("comments-section");
                commentsSection.innerHTML = ""; // Clear old comments

                data.forEach(comment => {
                    let commentDiv = document.createElement("div");
                    commentDiv.classList.add("comment-box");
                    commentDiv.innerHTML = comment; // HTML decoding is done by PHP
                    commentsSection.appendChild(commentDiv);
                });
            })
            .catch(error => console.error("Error fetching comments:", error));
    }

    // Fetch comments immediately and every 3 seconds
    fetchComments();
    setInterval(fetchComments, 3000);
});
