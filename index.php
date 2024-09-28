<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reed Gunn - Software Engineer</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images/headshot.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&amp;display=swap" rel="stylesheet">
</head>
<body>

    <?php
        $name = $email = $message = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];
            $entry = "Name: $name, Email: $email, Message: $message\n";
            $file = 'messages.txt';
            file_put_contents($file, $entry, FILE_APPEND | LOCK_EX);
            echo "<script type='text/javascript'>alert('Message sent!');</script>";
        }
    ?>

    <header>
        <nav>
            <a href="#about" class="local">About</a>
            <a href="#projects" class="local">Portfolio</a>
            <a href="#skills" class="local">Skills</a>
            <a href="#contact" class="local">Contact</a>
            <a href="https://linkedin.com/in/reedgunn" target="_blank" class="external">LinkedIn</a>
            <a href="https://github.com/reedgunn" target="_blank" class="external">GitHub</a>
            <a href="images/REED_GUNN_RESUME.pdf" target="_blank" class="external">Resume</a>
        </nav>
    </header>

    <section id="hero">
        <div class="hero-content">
            <h1>Reed Gunn</h1>
            <p>Aspiring Software Engineer</p>
        </div>
    </section>

    <section id="about">
        <h2>About Me</h2>
        <img src="images/headshot.png" alt="headshot" class="headshot">
        <p>Hi, my name is Reed Gunn. I'm currently pursuing a Bachelor of Science degree in Computer Science at Northwestern University with a graduation date of June 2027. I am passionate about using AI to solve problems and uncover truths.</p>
    </section>

    <section id="projects">
        <h2>Portfolio</h2>
        <div class="project-list">
            <div class="project">
                <iframe class="app" src="Unity_WebGL_Apps/Sleep Schedule Generator App" title="Sleep Schedule Generator App" scrolling="no"></iframe>
                <h3>Sleep Schedule Generator App</h3>
                <p>Unity, C#</p>
                <a href="https://github.com/reedgunn/Sleep-Schedule-Generator-App" target="_blank" class="btn">View on GitHub</a>
            </div>
            <div class="project">
                <video style="pointer-events: none;" autoplay loop muted playsinline>
                    <source src="images/chess-engine-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <h3>Chess Engine</h3>
                <p>Python</p>
                <a href="https://github.com/reedgunn/Chess-Simulator" target="_blank" class="btn">View on GitHub</a>
            </div>
            <div class="project">
                <iframe class="app" src="Unity_WebGL_Apps/Worble Game App" title="Worble Game App" scrolling="no"></iframe>
                <h3>Worble Game App</h3>
                <p>Unity, C#</p>
                <a href="https://github.com/reedgunn/Worble-Game-App" target="_blank" class="btn">View on GitHub</a>
            </div>
            <div class="project">
                <iframe class="app" src="Unity_WebGL_Apps/Ping Game App" title="Ping Game App" scrolling="no"></iframe>
                <h3>Ping Game App</h3>
                <p>Unity, C#</p>
                <a href="https://github.com/reedgunn/Ping-Game-App" target="_blank" class="btn">View on GitHub</a>
            </div>
        </div>
    </section>

    <section id="skills">
        <h2>Skills</h2>
        <h3>Languages</h3>
        <div class="skills-list">
            <div class="skill">
                <img src="images/skill-icons/python-original.svg" alt="Python">
                <p>Python</p>
            </div>
            <div class="skill">
                <img src="images/skill-icons/java-original.svg" alt="Java">
                <p>Java</p>
            </div>
            <div class="skill">
                <img src="images/skill-icons/azuresqldatabase-original.svg" alt="SQL">
                <p>SQL</p>
            </div>
            <div class="skill">
                <img src="images/skill-icons/javascript-original.svg" alt="JavaScript">
                <p>JavaScript</p>
            </div>
            <div class="skill">
                <img src="images/skill-icons/html5-original.svg" alt="HTML">
                <p>HTML</p>
            </div>
            <div class="skill">
                <img src="images/skill-icons/c-original.svg" alt="C">
                <p>C</p>
            </div>
            <div class="skill">
                <img src="images/skill-icons/cplusplus-original.svg" alt="C++">
                <p>C++</p>
            </div>
            <div class="skill">
                <img src="images/skill-icons/css3-original.svg" alt="CSS">
                <p>CSS</p>
            </div>
            <div class="skill">
                <img src="images/skill-icons/csharp-original.svg" alt="C#">
                <p>C#</p>
            </div>
            <div class="skill">
                <img src="images/skill-icons/matlab-original.svg" alt="MATLAB">
                <p>MATLAB</p>
            </div>
            <div class="skill">
                <img src="images/skill-icons/php-original.svg" alt="PHP">
                <p>PHP</p>
            </div>
        </div>
        <h3>Tools & Frameworks</h3>
        <div class="skills-list">
            <div class="skill">
                <img src="images/skill-icons/github-original.svg" alt="GitHub">
                <p>GitHub</p>
            </div>
            <div class="skill">
                <img src="images/skill-icons/git-original.svg" alt="Git">
                <p>Git</p>
            </div>
            <div class="skill">
                <img src="images/skill-icons/unity-original.svg" alt="Unity">
                <p>Unity</p>
            </div>
            <div class="skill">
                <img src="images/skill-icons/mysql-original.svg" alt="MySQL">
                <p>MySQL</p>
            </div>
            <div class="skill">
                <img src="images/skill-icons/nodejs-original.svg" alt="Node.js">
                <p>Node.js</p>
            </div>
            <div class="skill">
                <img src="images/skill-icons/selenium-original.svg" alt="Selenium">
                <p>Selenium</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form id="contact-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit" class="btn" name="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Reed Gunn. All rights reserved.</p>
    </footer>

</body>
</html>