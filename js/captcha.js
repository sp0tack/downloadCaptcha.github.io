function showCaptcha() {
  document.getElementById('captcha-overlay').style.display = 'flex';
}

function hideCaptcha() {
  document.getElementById('captcha-overlay').style.display = 'none';
}

// Example usage: Show CAPTCHA on page load
window.onload = function() {
  showCaptcha();
};
