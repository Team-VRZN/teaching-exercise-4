const fetch = () => {   
    // Initialize a variable 'data' and set it to false
    let data = false

    // Set a timeout to change 'data' to true after 3 seconds (3000 milliseconds)
    setTimeout(() => {
        data = true
    }, 3000)
    
    // Return the value of 'data' immediately (before the timeout completes)
    return data
}

const display = (data) => {
    // Log the data to the console with a "Display:" prefix
    console.log("Display:", data)
}

// Call the fetch function and store the returned value in 'fetchedData'
const fetchedData = fetch()

// Call the display function and pass 'fetchedData' to it
display(fetchedData)
