$(document).ready(function() {
    $("#adminForm").submit(function(e) {
        e.preventDefault();
        let isValid = true;

        // 1. PRN Validation (Exactly 10 digits)
        let prn = $("#prn").val();
        if (prn.length !== 10 || isNaN(prn)) {
            $("#prnError").text("PRN must be exactly 10 numeric digits.");
            isValid = false;
        } else {
            $("#prnError").text("");
        }

        // 2. Name Validation
        let name = $("#studentName").val();
        if (name.trim() === "") {
            $("#nameError").text("Student name is required.");
            isValid = false;
        } else {
            $("#nameError").text("");
        }

        // 3. Dropdown Validation
        let dept = $("#dept").val();
        if (dept === "") {
            $("#deptError").text("Please select a department.");
            isValid = false;
        } else {
            $("#deptError").text("");
        }

        // DOM Manipulation (Source 245)
        if (isValid) {
            $("#adminForm").slideUp(); // jQuery Animation
            $("#summaryData").html(`
                <tr><th>PRN:</th><td>${prn}</td></tr>
                <tr><th>Name:</th><td>${name}</td></tr>
                <tr><th>Dept:</th><td>${dept}</td></tr>
            `);
            $("#recordSummary").fadeIn();
        }
    });
});