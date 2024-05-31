 // Getting formated date from date string
let deadline = new Date("may 28, 2024 00:00:00").getTime();

// Calling defined function at certain interval
let x = setInterval(function () {

    // Getting current date and time in required format
    let now = new Date().getTime();

    // Calculating difference
    let t = deadline - now;

    // Getting values of days,hours,minutes, seconds
    let days = Math.floor(
        t / (1000 * 60 * 60 * 24)
    );
    let hours = Math.floor(
        (t % (1000 * 60 * 60 * 24)) /
            (1000 * 60 * 60)
    );
    let minutes = Math.floor(
        (t % (1000 * 60 * 60)) / (1000 * 60)
    );
    let seconds = Math.floor(
        (t % (1000 * 60)) / 1000
    );

    // Show the output time
    document.getElementById("days").innerHTML = days < 10 ? `0${days}` : days;
    document.getElementById("hours").innerHTML = hours < 10 ? `0${hours}` : hours;
    document.getElementById("minutes").innerHTML = minutes < 10 ? `0${minutes}` : minutes;
    document.getElementById("seconds").innerHTML = seconds < 10 ? `0${seconds}` : seconds;

    // Show overtime output
    if (t < 0) {
        clearInterval(x);
        document.getElementById(
            "day"
        ).innerHTML = "00";
        document.getElementById(
            "hour"
        ).innerHTML = "00";
        document.getElementById(
            "minute"
        ).innerHTML = "00";
        document.getElementById(
            "second"
        ).innerHTML = "00";
    }
}, 1000);