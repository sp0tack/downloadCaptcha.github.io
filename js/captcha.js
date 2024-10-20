window.onloadTurnstileCallback = function () {
  turnstile.render("#captcha-container", {
    sitekey: "0x4AAAAAAAx62kvYDSgrmi6U",
    callback: function (token) {
      console.log(`Challenge Success ${token}`);
      setTimeout(()=>{
        window.location.replace("../download_page.php");
      },2000);
    },
  });
};