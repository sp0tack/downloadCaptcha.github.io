<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Downloader</title>
    <link rel="stylesheet" href="style/style.css">

</head>
<body>

<div class="container">
<!-- Download Section -->
<div class="download-section">
    <table>
        <tr>
            <td>
                <img src="img/exe_icon.png" alt="File Icon">
            </td>
            <td>
                <button class="share-btn">Share</button>
            </td>
            <td>
                <div class="download-section">
                    <p class="countdown">Downloading in <span id="countdown-timer">5</span> seconds.</p>
                </div>
            </td>
            <td  class="last">
            <form method="POST" action="download.php">
                <button type="submit" class="download-btn" name="btn1">Download (109.5 KB)</button>
            </form>
            </td>
        </tr>
    </table>
</div>

    <!-- File Information -->
    <div class="file-info">
        <img src="img/exe_icon.png" alt="File Icon">
        <div class="file-details">
            <strong>spotifex_v1.8.1.exe</strong><br>
            <span>File Size: 109.5 KB</span><br>
            <span>Uploaded: 2024-10-11 06:15:44</span>
        </div>
    </div>

<!-- Main Content Section (Flexbox to hold both sections) -->
<div class="content-section">
    <!-- About Executable Formats -->
    <div class="about-exe">
        <h3>About Executable Formats</h3>
        <p>
            An executable file is a file in a format that a computer can directly execute. Although most executable files are safe, these formats are the most commonly used to transmit viruses and infect computers with malware. Executable files should be scanned with up-to-date antivirus software and should not be opened unless you trust the source or were expecting this file.
        </p>
    </div>

    <!-- Ad Section (Now contains system compatibility) -->
    <div class="ad-section">
        <h3>System Compatibility</h3>
        <p id="system-status"></p>
        <p id="compatibility-message"></p>
        <br>
        <div class="ad-space" id="img_placeholder">

        </div>
    </div>
</div>

<!-- VirusTotal Detection Section -->
<div class="virustotal-section">
    <table>
        <tr>
            <td>
                <img src="img/virustotal.svg" alt="">
            </td>
            <td class="last_vt">
                <p><strong>VirusTotal Scan:</strong> <font style="color: green;">5/73</font> engines detected this file.</p>
            </td>
        </tr>
    </table>
</div>


</div>

</body>
<script src="src/src.js"></script>
</html>
