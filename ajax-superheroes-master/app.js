document.getElementById('search-btn').addEventListener('click', () => {
    // Get the search query
    const query = document.getElementById('search-input').value.trim();

    // Check if the input is empty
    if (!query) {
        document.getElementById('result').innerText = "Please enter a search term.";
        return;
    }

    // Clear previous results
    document.getElementById('result').innerText = "Searching...";

    // Perform an AJAX request
    fetch(`superheroes.php?query=${encodeURIComponent(query)}`)
        .then(response => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.text();
        })
        .then(data => {
            // Display the result in the #result div
            document.getElementById('result').innerHTML = data;
        })
        .catch(error => {
            console.error("Error:", error);
            document.getElementById('result').innerText = "An error occurred while fetching the data.";
        });
});
