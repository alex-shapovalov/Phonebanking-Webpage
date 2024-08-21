<?php

include_once ("includes.php");

if (authorized(1000)) {
    echo <<<BODY
        <html>
            <head>
                <meta charset="UTF-8">
                <link rel="stylesheet" href="phoneBankingStyle.css">
                <title>Phone Banking Portal</title>
                <script src="fetchPhoneNumber.js"></script>
            </head>
            <body>
                <div class="container">
                    <h2>Call now</h2>
                    <a id="callButton" href="#" target="_blank"><button type="button">Call Now</button></a>
                    <h2>Who you're calling: </h2>
                    <p><strong>First Name: </strong><span id="firstName"></span></p>
                    <p><strong>Last Name: </strong><span id="lastName"></span></p>
                    <p><strong>Address: </strong><span id="address"></span></p>
                    <p><strong>County: </strong><span id="county"></span></p>
                </div>
                <div class="form-container">
                    <h2>Describe the call</h2>
                    <form>
                        <input type="hidden" id="id" name="id" value="">
                        <label for="options">Select option: </label>
                        <select id="options" name="options">
                            <option value="default">Select option</option>
                            <option value="1">No Answer</option>
                            <option value="2">Hangup</option>
                            <option value="3">Wrong Number</option>
                            <option value="4">Correct Number</option>
                        </select>
                        <button type="submit">Submit</button>
                    </form>
                </div>
                <div>
                    <a href="phonebanking.pdf" target="_blank"><p>How it works?</p></a>
                </div>
                <script src="returnStatus.js"></script>
            </body>
            <footer>
                <p>Designed by Alex Shapovalov</p>
            </footer>
        </html>
    BODY;
}

?>


