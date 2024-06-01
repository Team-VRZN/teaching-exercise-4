function getData(carId) {
    fetch(`./specifications.php?car_id=${carId}`)
        .then(response => response.json())
        .then(data => {
            document.querySelector(".result").innerHTML = `
                Model: ${data.model} <br>
                Color: ${data.color} <br>
                Number of Wheels: ${data.no_of_wheels}
            `;
        })
        .catch(error => console.error('Error fetching data:', error));
}
