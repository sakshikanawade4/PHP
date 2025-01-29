// Display an alert message
alert("Exams are near, have you started preparing?");

// Ask the user for their preparation status using a prompt
let response = prompt("Have you started preparing? (yes/no)", "yes");

if (response) {
    response = response.toLowerCase(); // Convert response to lowercase for consistency
    if (response === "yes") {
        alert("Great! Keep up the good work.");
    } else if (response === "no") {
        let startNow = confirm("Would you like to start preparing now?");
        if (startNow) {
            alert("That's the spirit! Start planning your studies.");
        } else {
            alert("Time is running out! Consider starting soon.");
        }
    } else {
        alert("Invalid response. Please enter yes or no.");
    }
} else {
    alert("You didn't enter anything!");
}
