// Retrieve CSRF token from view
const csrfToken = document
.querySelector('meta[name="csrf-token"]')
.getAttribute("content");

// Include feather Icons Library
feather.replace();

/**
 * Reset Queues
 */
const resetAntrian = async (category, type) => {
    try {
        await fetch(`/ptsp/reset/${category}/${type}`, {
            method: "POST",
            // add CSRF Token
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken,
            },
        });
        location.reload();
    } catch (e) {
        console.log(e);
    }
};

const resetAllAntrian = async () => {
    try {
        await fetch('/ptsp/reset/all', {
            method: "POST",
            // add CSRF Token
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken,
            },
        });
        location.reload();
    } catch (e) {
        console.log
    }
}