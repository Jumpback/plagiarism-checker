<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plagiarism-Checker</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <nav class="navbar h-nav-resp">
        <ul class="nav-list v-class-resp">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="rightNav background v-class-resp">
            <!-- <input type="text" name="search" id="search"> -->
            <!-- <button class="btn btn-sm">Search</button> -->
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <section class="background firstsection" id="home">
        <div class="box-main">
            <div class="firsthalf">
                <p class="text-big">Check Plagiarism in a blink of eye!!!!</p>
                <p class="text-small">Welcome To Our Website Plagiarism!</p>
                <button class="btn">Login</button>
                <button class="btn" onclick="window.location.href='http://127.0.0.1:5000/'">Get Started</button>
            </div>
            <div class="secondhalf">
                <!-- <img src="css\img\bg1.jpg" alt="image"> -->
            </div>
        </div>
    </section>
    <section class="section" id="services">
        <div class="paras">
            <p class="sectionTag">Plagiarism</p>
            <p class="sectionSubTag ">Plagiarism is presenting someone else’s work or ideas as your own, with or without
                their consent, by incorporating it into your work without full acknowledgement. All published and
                unpublished material, whether in manuscript, printed or electronic form, is covered under this
                definition. Plagiarism may be intentional or reckless, or unintentional. Under the regulations for
                examinations, intentional or reckless plagiarism is a disciplinary offence.
                <br><br>
                Plagiarism is the act of copying another person's ideas, words or writing and pretending that they are
                one's own work. It can involve violating copyright laws. College students who are caught plagiarizing
                can be expelled from school. It can permanently damage a student's reputation.Writers who plagiarize
                commit serious legal and ethical violations.
            </p>
        </div>
        <div class="thumbnail">
            <img src="https://source.unsplash.com/1600x900/?coding,html javascrpt" alt="" class="imgFluid">
        </div>
    </section>

    <section class="section section-left">
        <div class="paras">
            <p class="sectionTag">Forms of plagiarism</p>
            <p class="sectionSubTag "> <b>Verbatim (word for word) quotation without clear acknowledgement</b>
                Quotations must always be identified as such by the use of either quotation marks or indentation, and
                with full referencing of the sources cited. It must always be apparent to the reader which parts are
                your own independent work and where you have drawn on someone else’s ideas and language.<br><br>
                <b> Cutting and pasting from the Internet without clear acknowledgement</b>
                Information derived from the Internet must be adequately referenced and included in the bibliography. It
                is important to evaluate carefully all material found on the Internet, as it is less likely to have been
                through the same process of scholarly peer review as published sources.
            </p>
            <br><br>
            <b>Collusion</b>This can involve unauthorised collaboration between students, failure to attribute
            assistance received, or failure to follow precisely regulations on group work projects. It is your
            responsibility to ensure that you are entirely clear about the extent of collaboration permitted, and which
            parts of the work must be your own.
        </div>
        <div class="thumbnail">
            <img src="https://source.unsplash.com/1600x900/?coding" alt="">
        </div>
    </section>



    <section class="section">
        <div class="paras">
            <p class="sectionTag">Unintentional plagiarism dicta.</p>
            <p class="sectionSubTag ">Not all cases of plagiarism arise from a deliberate intention to cheat. Sometimes
                students may omit to take down citation details when taking notes, or they may be genuinely ignorant of
                referencing conventions. However, these excuses offer no sure protection against a charge of plagiarism.
                Even in cases where the plagiarism is found to have been neither intentional nor reckless, there may
                still be an academic penalty for poor practice.

                It is your responsibility to find out the prevailing referencing conventions in your discipline, to take
                adequate notes, and to avoid close paraphrasing. If you are offered induction sessions on plagiarism and
                study skills, you should attend. Together with the advice contained in your subject handbook, these will
                help you learn how to avoid common errors. If you are undertaking a project or dissertation you should
                ensure that you have information on plagiarism and collusion. If ever in doubt about referencing,
                paraphrasing or plagiarism, you have only to ask your tutor. </p>
        </div>
        <div class="thumbnail">
            <img src="https://source.unsplash.com/1600x900/?coding css" alt="">
        </div>
    </section>
    <hr>
    <section class="contact" id="contact">
        <h2 class="text-center">Contact us</h2>
        <div class="form">
            <form action="index.php" method="post">

                <label for="name">Name</label>
                <input class="form-input" type="text" name="name" id="name">
                <label for="email">Email</label>
                <input class="form-input" type="email" name="email" id="email">
                <label for="subject">Subject</label>
                <input class="form-input" type="text" name="subject" id="subject">
                <label for="message">Message</label>
                <textarea class="form-input" name="message" id="message" cols="10" rows="7"></textarea>
                <button class="btn btn-sm btn-dark"
                    onclick="window.location.href='http://localhost:3000/'">Submit</button>
            </form>
        </div>

    </section>
    <footer class="background">
        <p class="text-footer">
            Designed and Developed by &nbsp; <a
                href="https://github.com/Jumpback?tab=overview&from=2021-12-01&to=2021-12-31">Omkar Nagare </a> &nbsp; &
            &nbsp; <a href="https://github.com/BooksEra">Rushika Yadav.</a>&nbsp;Copyright &copy; 2022-All rights
            reserved.
        </p>
    </footer>
    <script src="js/j.js"></script>

</body>

</html>


<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $DB = "omkar";
   
    $conn = new mysqli($server, $username, $password, $DB);
    if (!$conn) {
        die('Connection failed : ' . mysqli_connect_error());
    }

    $sql = "INSERT INTO `contactus`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";

    // echo $sql;

    if ($conn->query($sql) == true) {
        // echo "Successfully inserted";
    } else {
        echo "ERROR  $sql <br> $conn->error";
    }

    $conn->close();
}
?>