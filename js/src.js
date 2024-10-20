function detectOS() {
  let userAgent = window.navigator.userAgent;
  let platform = window.navigator.platform;
  let osMessage = '';
  let compatibilityMessage = '';
  let imageMessage = '';

  // Checking for Windows OS
  if (platform.indexOf('Win') !== -1 || userAgent.indexOf('Windows') !== -1) {
      osMessage = 'Windows (your OS)';
      compatibilityMessage = 'File is compatible with the selected operating system.';
      imageMessage = '<img src="img/yes.png">';
  } else {
      // Any OS other than Windows
      osMessage = platform + ' (your OS)';
      compatibilityMessage = 'X Your system does not meet the requirements to run this program.';
      imageMessage = '<img src="img/no.png">';
  }

  // Injecting the detected OS and compatibility message into the HTML
  document.getElementById('system-status').textContent = osMessage;
  document.getElementById('compatibility-message').textContent = compatibilityMessage;
  document.getElementById('img_placeholder').innerHTML = imageMessage;

}

// Run the function on page load
detectOS();



let countdown = 5;
const timerElement = document.getElementById('countdown-timer');
const downloadLink = document.getElementsByClassName('download-btn')[0]; // Access the first download button

// Function to start countdown and initiate download after 5 seconds
const startCountdown = setInterval(() => {
    countdown--;
    timerElement.textContent = countdown;

    // When countdown reaches 0, trigger the download
    if (countdown === 0) {
        clearInterval(startCountdown);
        downloadLink.click();  // Auto-click the hidden download link
    }
}, 1000);  // Runs every second (1000 ms)
