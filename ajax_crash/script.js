function getData() {
    // Get the value from the input field with id "sid" (student ID)
    const studentId = document.querySelector("#sid").value;

    // Create a new XMLHttpRequest object to send an HTTP request
    const httpRequest = new XMLHttpRequest();
    
    // Set up the request to use the GET method and specify the URL, including the student ID as a query parameter
    httpRequest.open('GET', `./grades.php?student_id=${studentId}`);

    // Define what should happen when the request is completed successfully
    httpRequest.onload = () => {
        // Insert the response text (which contains the grades) into the HTML element with class "result"
        document.querySelector(".result").innerHTML = httpRequest.responseText;
    };

    // Send the request
    httpRequest.send('');
}




