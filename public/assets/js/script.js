// Getting formated date from date string
let deadline = new Date("august 02 , 2024 00:00:00").getTime();

// Calling defined function at certain interval
let x = setInterval(function () {

    // Getting current date and time in required format
    let now = new Date().getTime();

    // Calculating difference
    let t = deadline - now;

    // Getting values of days, hours, minutes, seconds
    let days = Math.floor(t / (1000 * 60 * 60 * 24));
    let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((t % (1000 * 60)) / 1000);

    if (t >= 0) {
        // Show the output time
        document.getElementById("days").innerHTML = days < 10 ? `0${days}` : days;
        document.getElementById("hours").innerHTML = hours < 10 ? `0${hours}` : hours;
        document.getElementById("minutes").innerHTML = minutes < 10 ? `0${minutes}` : minutes;
        document.getElementById("seconds").innerHTML = seconds < 10 ? `0${seconds}` : seconds;
    } else {
        // Show overtime output
        clearInterval(x);
        document.getElementById("days").innerHTML = "00";
        document.getElementById("hours").innerHTML = "00";
        document.getElementById("minutes").innerHTML = "00";
        document.getElementById("seconds").innerHTML = "00";
    }
}, 1000);


// Getting formated date from date string
let timeset = new Date("august 02, 2024 00:00:00").getTime();

// Calling defined function at certain interval
let x2 = setInterval(function () {

    // Getting current date and time in required format
    let now = new Date().getTime();

    // Calculating difference
    let t = timeset - now;

    // Getting values of days, hours, minutes, seconds
    let days = Math.floor(t / (1000 * 60 * 60 * 24));
    let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((t % (1000 * 60)) / 1000);

    if (t >= 0) {
        // Show the output time
        document.getElementById("days2").innerHTML = days < 10 ? `0${days}` : days;
        document.getElementById("hours2").innerHTML = hours < 10 ? `0${hours}` : hours;
        document.getElementById("minutes2").innerHTML = minutes < 10 ? `0${minutes}` : minutes;
        document.getElementById("seconds2").innerHTML = seconds < 10 ? `0${seconds}` : seconds;
    } else {
        // Show overtime output
        clearInterval(x);
        document.getElementById("days2").innerHTML = "00";
        document.getElementById("hours2").innerHTML = "00";
        document.getElementById("minutes2").innerHTML = "00";
        document.getElementById("seconds2").innerHTML = "00";
    }
}, 1000);