
function theme_switcher(toggler) {
    // On toggler clicked
    var container = document.getElementsByTagName('body')[0];
    var switcher = document.getElementsByClassName('switcher')[0];
    console.log('Click performed!')
    console.log(toggler)
    if (container.getAttribute('data-theme') == 'default') {
        container.setAttribute('data-theme', 'dark');
        console.log('switching to dark theme')

    } else {
        container.setAttribute('data-theme', 'default');
        console.log('switching to default theme')
    }

}

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scroll_Function_Custom()
};

function scroll_Function_Custom() {

    //Get the button
    var mybutton = document.getElementById("backToTop");

    if (document.body.scrollTop > 20
        || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function top_scroll_frame_custom() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
window.onload = function () {
    getNoOfYearsOfExperience();
}

function getNoOfYearsOfExperience() {
    let today = new Date();
    let olday = new Date("23 July 2018");
    let yrs = today.getFullYear() - olday.getFullYear();
    let months = today.getMonth() - olday.getMonth();
    if (months < 0) {
        yrs--;
    }
    months = months < 0 ? 12 + months : months;
    console.log('yrs', yrs, 'months', months)
    document.getElementById("noOfYearsOfExperience").innerText = yrs + '.' + months;

}

