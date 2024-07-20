<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Contact Us Form</title>
    <link rel="stylesheet" href="css/contact.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


    <?php include 'navbar.php'; ?>

    <div class="main">
        <div class="container">
            <div class="content">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Address</div>
                        <div class="text-one">Surkhet, NP12</div>
                        <div class="text-two">Birendranagar 06 <br>pin-code:575028</div>
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">+0098 9893 5647</div>
                        <div class="text-two">+0096 3434 5678</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">govmntt@gmail.com</div>
                        <div class="text-two">govmntt@gmail123.com</div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="topic-text">Send us a message</div>
                    <p>If you have any types of queries related to this website, you can send a message from here. It's
                        our
                        pleasure to help you.</p>
                    <form action="api/contact.php" method="post">
                        <div class="input-box">
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="input-box">
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box message-box">
                            <textarea name="message" placeholder="Enter your message"></textarea>
                        </div>
                        <div class="button">
                            <input type="submit" value="Send Now"
                                style="background-color:orange;width:150px;height:40px;border-radius:10px;color:aliceblue;font-weight: bold;border:none">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>