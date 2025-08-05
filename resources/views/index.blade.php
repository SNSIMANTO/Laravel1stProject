<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>

.gloria-hallelujah-regular {
    font-family: "Gloria Hallelujah", cursive;
    font-weight: 400;
    font-style: normal;
}
.Half-Width{
    width: 40%;
    float: left;
    margin-left: 5%;
    padding-left:2%;
}

.Half-Width img{
    width: 100%;
}

section{
    height: 500px;
    margin: 1px;
}

.banner-one{
 background-image: url("images/header-bg.png");

}

.banner-two{
    background-image: url("images/biography-bg.png");

}

.banner-three{
    background-image: url("images/latest-work-bg.png");

}
#ocean-design{
    font-size: 50px;
    color: dodgerblue;
}



.star-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 180px;
    height: 180px;
    font-size: 18px;
    font-weight: bold;
    color: white;
    text-decoration: none;
    background: linear-gradient(45deg, #ff6b6b, #feca57, #1dd1a1, #54a0ff, #5f27cd);
    background-size: 400% 400%;
    clip-path: polygon(
            50% 0%,
            61% 35%,
            98% 35%,
            68% 57%,
            79% 91%,
            50% 70%,
            21% 91%,
            32% 57%,
            2% 35%,
            39% 35%
    );
    animation: gradientShift 5s ease infinite;
    transition: transform 0.3s;
    text-align: center;
    padding: 10px;
}

.star-button:hover {
    transform: scale(1.1);
}

@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}


.airplane-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 220px;
    height: 70px;
    font-size: 18px;
    font-weight: bold;
    color: white;
    background: linear-gradient(135deg, #ff6b6b, #feca57, #1dd1a1, #54a0ff, #5f27cd);
    background-size: 400% 400%;
    text-decoration: none;
    border: none;
    padding: 10px;
    clip-path: polygon(0 10%, 90% 0%, 100% 50%, 90% 100%, 0 90%, 15% 50%);
    animation: gradientShift 5s ease infinite;
    transition: transform 0.3s ease;
    text-align: center;
}

.airplane-button:hover {
    transform: translateX(8px) rotate(1.5deg);
}

@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}



.photo-box{
    width: 30%;
    float: left;
    margin-left: 3.33%;
    float: left;
    box-sizing: border-box;
    box-shadow: 10px 10px 20px gray;
    border-radius: 10px;
    height: 50%;
    background-color: white;
    padding: 10px;

}
.photo-box img{
    width: 100%;
    height: 100%;
}

.photo-box iframe{
    width: 100%;
    height: 100%;
}

p{
    text-align: justify;
}

#the{
    color: blue;
    font-size: 50px;
}

.footer-banner{
    background-image: url("images/footer-bg.png");
    }

#footer-complement{
    font-size: 30px;
    color: deeppink;
    text-align: center;
}

.mail-box{
    height: 150px;
    width: 400px;
    border-radius: 20px;
    background-color: cornflowerblue;
    align-content: center;
    text-align: center;
    font-size: 20px;
    color: white;


}

.last{
    text-align: center;
}

.boss{
    height: 300px;
    width: 100%;
    padding-left: 550px;

}

footer p{
    text-align: center;
}

footer audio{
    padding-left: 600px;
}

    </style>
  </head>
  <body>
  <div class="container-fluid bg-dark">
  <div class="container">
    <nav class="navbar navbar-expand-sm">
      <a class="navbar-brand" href="#" style="color: white">SN SIMANTO</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
        data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}" style="color: white">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/register')}}" style="color: white">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/customer/view')}}" style="color: white">Customer</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<section class="banner-one">
    <div class="Half-Width">
        <h1>Hello I'm</h1>
        <h3 id="ocean-design"> SHANUR MURSALIN SIMANTO </h3>
        <p>Adept at problem-solving, communication, and teamwork, with a commitment to continuous personal and professional development.</p>
        <a href="HireMe.html" class="star-button">HIRE ME</a>
    </div>
    <div class="Half-Width">
        <img src="images/image%2016.png" >
    </div>
</section>
<section class="banner-two">
    <div class="Half-Width">
        <img src="images/image%2015.png" >
    </div>
    <div class="Half-Width">
        <h2>BIOGRAPHY</h2>
        <p>I'm Shanur Mursalin Simanto, a passionate and adaptable individual with a strong foundation in computer science and engineering, currently pursuing my BSc at the State University of Bangladesh. My journey has been enriched by a blend of academic excellence and hands-on professional experiences in teaching, sales, and management. I thrive in dynamic environments where problem-solving, leadership, and communication are key.

            With a background that includes roles such as Junior Executive, Management Trainee, Assistant Teacher, and Sales Representative, I’ve developed a broad skill set spanning team leadership, customer relationship management, and technical proficiencies in Python, C, HTML, and CSS. I’m also well-versed in MS Office tools, making me both a technical and organizational asset.

            I’ve received scholarships since the beginning of my undergraduate program and earned certifications including IELTS and a Master Class Participant Diploma from the International Documentary Film Festival.

            As someone who is hardworking, ethical, and adaptive, I am always seeking opportunities to contribute, grow, and make a meaningful impact.
        </p>
        <a href="your-cv-link.pdf" class="airplane-button" download>Download CV</a>
    </div>
</section>
<section class="banner-three">
    <p id="the">Projects</p>
    <div class="photo-box">
        <img src="images/latest-work/work-1.png">

    </div>
    <div class="photo-box">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/VfFOLHFF538?si=--X1eQ_O8kr9u6BO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    </div>
    <div class="photo-box">
        <img src="images/latest-work/work-3.jpg">

    </div>
</section>
<section class="footer-banner">
    <p id="footer-complement">Client complement</p>
    <div>
        <p class="last">Jeff Zeldman</p>
        <p class="last">"Great design without functionality is like a sports car with no engine."</p>
        <div class="boss">
        <div class="mail-box">
            <span>Leave a massage...</span>
            </p>&#128233 snsimanto583@gmail.com</p>
        </div>
        <p></p>
    </div>
</section>
<footer>
    <audio controls src="music/Bhalolaage.mp3"></audio>
    <p> @ 2025, All rights reserved.</p>
</footer>
  </body>
</html>
