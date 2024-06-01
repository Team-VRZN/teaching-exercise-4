// Define a function named fetch that returns a Promise
let fetch = () => {
    return new Promise((resolve, reject) => {
        // Initialize a variable named data with the value false
        let data = false;

        // Set a timeout to change data to true after 3 seconds
        setTimeout(() => {
            data = true;
            // Resolve the Promise with the value of data after the timeout
            resolve(data);
        }, 3000);
    });
}

// Define a function named display that logs the received data to the console
let display = (data) => {
    console.log("Display:", data);
}

// Call the fetch function and handle the resolved value using .then()
fetch().then((fromResolve) => {
    // Call the display function with the resolved value as argument
    display(fromResolve);
});
