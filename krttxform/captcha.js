        // Global variable for CAPTCHA
        var captchaString = '';

        function generateCaptcha() {
            var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var string_length = 4;
            captchaString = '';
            for (var i = 0; i < string_length; i++) {
                var rnum = Math.floor(Math.random() * chars.length);
                captchaString += chars.charAt(rnum);
            }
            document.getElementById("captcha").innerText = captchaString;
            setRandomBackgroundImage();
        }

        function setRandomBackgroundImage() {
            var imgCount = 7; // Corrected image count
            var dir = 'krttxform/';
            var randomCount = Math.floor(Math.random() * imgCount) + 1;
            var images = [
                "captcha1.jpg",
                "captcha2.jpg",
                "captcha3.jpg",
                "captcha4.jpg",
                "captcha5.jpg",
                "captcha6.jpg",
                "captcha7.jpg"
            ];
            document.getElementById("captcha").style.backgroundImage = "url(" + dir + images[randomCount - 1] + ")";
        }

        function validateCaptcha() {
            var inputCaptcha = document.getElementById("captchaInput").value;
            if (inputCaptcha === captchaString) {
                // Proceed with form submission or other actions
                alert('Captcha validated successfully!');
                // Optionally submit the form
                document.getElementById("myForm").submit();
            } else {
                alert('Enter Verify Code');
            }
        }

        window.onload = function() {
            generateCaptcha();
        };