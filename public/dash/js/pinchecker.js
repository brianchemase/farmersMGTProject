document.addEventListener('DOMContentLoaded', function() {
const url = "https://briananikayi.com/connect/pinchecker.php?TaxpayerID=";

function validateid(idNumber) {
    const formMsg = document.getElementById('formprocessing');
    const farmerNameField = document.getElementById('farmername');

    if (!idNumber || idNumber.length < 1) {
    formMsg.innerText = 'Please enter a valid ID.';
    clearFormFields();
    return;
    }

    formMsg.innerText = 'Fetching client details...';

    const fullUrl = url + encodeURIComponent(idNumber);

    axios.get(fullUrl)
    .then(response => {
        let data = response.data;

        // Try to parse if returned as string
        if (typeof data === "string") {
        try {
            data = JSON.parse(data);
        } catch (e) {
            formMsg.innerText = 'Invalid response format.';
            return;
        }
        }

        // Check valid data
        if (!data || !data.TaxpayerName) {
        formMsg.innerText = 'No record found for this Farmer ID. Type the farmer names Manually';
        clearFormFields();
        return;
        }

        // Fill farmer name
        farmerNameField.value = data.TaxpayerName;
        formMsg.innerText = 'Client details fetched successfully';
    })
    .catch(error => {
        console.error("Fetch error:", error);
        formMsg.innerText = "Error fetching data. Please try again.";
        clearFormFields();
    });
}

function clearFormFields() {
    document.getElementById('farmername').value = '';
}

// Trigger on ID field blur
document.getElementById('id_number').addEventListener('blur', e => {
    validateid(e.target.value.trim());
});
});