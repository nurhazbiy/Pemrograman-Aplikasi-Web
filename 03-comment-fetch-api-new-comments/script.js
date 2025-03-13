document.addEventListener("DOMContentLoaded", function () {
    let lastTimestamp = localStorage.getItem("lastTimestamp") || 0;

    function fetchComments() {
        fetch(`get_comments.php?timestamp=${lastTimestamp}`)
            .then(response => response.json())
            .then(data => {
                let commentsSection = document.getElementById("comments-section");

                data.comments.forEach(comment => {
                    let commentDiv = document.createElement("div");
                    commentDiv.classList.add("comment-box");
                    commentDiv.innerHTML = comment; // HTML decoding is done by PHP
                    commentsSection.appendChild(commentDiv);
                });

                // Update the last timestamp
                if (data.timestamp) {
                    lastTimestamp = data.timestamp;
                    localStorage.setItem("lastTimestamp", lastTimestamp);
                }
            })
            .catch(error => console.error("Error fetching comments:", error));
    }

    // Fetch comments immediately and every 3 seconds
    fetchComments();
    setInterval(fetchComments, 3000);
});
