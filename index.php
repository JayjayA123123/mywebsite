<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modern Website</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<style>
    * {margin:0; padding:0; box-sizing:border-box; font-family: 'Roboto', sans-serif;}
    body {line-height:1.6; background:#f4f4f9; color:#333;}
    a {text-decoration:none; color:inherit;}
    header {background: linear-gradient(90deg,#6a11cb,#2575fc); color:white; padding:20px 0;}
    .container {width:90%; max-width:1200px; margin:auto;}
    nav {display:flex; justify-content:space-between; align-items:center;}
    nav .logo {font-size:1.8rem; font-weight:bold;}
    nav ul {list-style:none; display:flex; gap:20px;}
    nav ul li {transition:0.3s;}
    nav ul li:hover {transform:scale(1.1);}
    .hero {display:flex; flex-direction:column; align-items:center; text-align:center; padding:100px 20px;}
    .hero h1 {font-size:3rem; margin-bottom:20px;}
    .hero p {font-size:1.2rem; margin-bottom:30px; color:#555;}
    .hero button {padding:12px 30px; font-size:1rem; border:none; background:#2575fc; color:white; border-radius:5px; cursor:pointer; transition:0.3s;}
    .hero button:hover {background:#6a11cb;}
    .about {display:flex; flex-wrap:wrap; align-items:center; gap:40px; padding:80px 20px;}
    .about img {flex:1; max-width:500px; border-radius:15px;}
    .about .content {flex:1;}
    .about .content h2 {font-size:2rem; margin-bottom:20px;}
    .about .content p {color:#555; margin-bottom:20px;}
    .contact {padding:80px 20px; background:#f0f0f0;}
    .contact h2 {text-align:center; margin-bottom:40px;}
    .contact form {max-width:600px; margin:auto; display:flex; flex-direction:column; gap:15px;}
    .contact input, .contact textarea {padding:10px; border-radius:5px; border:1px solid #ccc;}
    .contact button {padding:12px; background:#2575fc; color:white; border:none; border-radius:5px; cursor:pointer;}
    .contact button:hover {background:#6a11cb;}
    footer {background:#222; color:white; text-align:center; padding:30px 0; margin-top:50px;}
    @media(max-width:768px){.about {flex-direction:column; text-align:center;} nav ul {flex-direction:column; gap:10px;}}
</style>
</head>
<body>

<header>
    <div class="container">
        <nav>
            <div class="logo">MyWebsite</div>
            <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="hero" id="hero">
    <h1>Welcome to My Website</h1>
    <p>A modern, responsive website design ready for your content.</p>
    <button>Get Started</button>
</section>

<section class="about" id="about">
    <img src="https://source.unsplash.com/500x400/?technology" alt="About Image">
    <div class="content">
        <h2>About This Website</h2>
        <p>This website is clean, responsive, and visually appealing. Customize it for portfolio, business, or project showcase.</p>
        <p>It uses simple HTML, CSS, and modern design practices with a gradient header and responsive layout.</p>
    </div>
</section>

<section class="contact" id="contact">
    <h2>Contact Me</h2>
    <form>
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <textarea placeholder="Your Message" rows="5" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</section>

<footer>
    <p>&copy; 2025 MyWebsite. All rights reserved.</p>
</footer>

</body>
</html>
