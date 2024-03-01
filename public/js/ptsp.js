const allButtons = document.querySelectorAll(".square-button");

document.addEventListener("DOMContentLoaded", function () {
    // Wait for the DOM to be fully loaded
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    allButtons.forEach((button) => {
        button.addEventListener("click", function () {
            // Make the API call when the button is clicked
            const ticket = button.querySelector(".ticket");
            const loading = button.querySelector(".loading");
            loading.classList.remove("d-none");
            ticket.classList.add("d-none");
            const kategoriAntrian = button.dataset.category;
            const jenisAntrian = button.dataset.type;
            fetch("/pengadilan/public/ptsp/update-antrian", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrfToken,
                },
                body: JSON.stringify({
                    kategori_antrian: kategoriAntrian,
                    jenis_antrian: jenisAntrian,
                }),
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        window.location.href =
                            "http://localhost/pengadilan/public";
                    } else {
                        alert("An error occurred: " + data.message);
                    }
                })
                .catch((error) => {
                    console.log("Error:", error);
                    alert("An error occurred while calling the API");
                });
        });
    });
});
