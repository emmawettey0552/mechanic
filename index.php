<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Oboye Autoshop | Professional Auto Repair & Diagnostics</title><meta name="description" content="Oboye Autoshop - Professional car repair, diagnostics, engine tuning, and automotive services in Ghana. Trusted mechanics you can rely on."><meta name="keywords" content="mechanic, car repair, auto shop, diagnostics, engine repair, Ghana mechanic, Oboye Autoshop"><meta name="author" content="Oboye Autoshop"><style>
  

  
/* ================= GLOBAL RESET ================= */
  
*{
  
margin:0;
  
padding:0;
  
box-sizing:border-box;
  
font-family: 'Segoe UI', Arial, sans-serif;
  
}
  

  
html{
  
scroll-behavior:smooth;
  
}
  

  
body{
  
background:#0b0f1a;
  
color:#fff;
  
overflow-x:hidden;
  
}
  

  
/* ================= PRELOADER ================= */
  
#preloader{
  
position:fixed;
  
inset:0;
  
background:#05070d;
  
display:flex;
  
justify-content:center;
  
align-items:center;
  
z-index:99999;
  
flex-direction:column;
  
}
  

  
#preloader .loader-box{
  
text-align:center;
  
}
  

  
.car{
  
width:120px;
  
height:60px;
  
background:linear-gradient(90deg,#00ffcc,#00aaff);
  
border-radius:15px;
  
position:relative;
  
animation:float 1.5s infinite ease-in-out;
  
box-shadow:0 0 20px #00ffcc;
  
}
  

  
.wheel{
  
width:25px;
  
height:25px;
  
background:#111;
  
border:3px solid #555;
  
border-radius:50%;
  
position:absolute;
  
bottom:-10px;
  
animation:spin 0.8s linear infinite;
  
}
  

  
.wheel.left{left:15px;}
  
.wheel.right{right:15px;}
  

  
.loading-text{
  
margin-top:15px;
  
color:#aaa;
  
font-size:14px;
  
}
  

  
/* ================= HEADER ================= */
  
header{
  
position:sticky;
  
top:0;
  
z-index:1000;
  
display:flex;
  
justify-content:space-between;
  
align-items:center;
  
padding:15px 20px;
  
background:rgba(10,15,30,0.85);
  
backdrop-filter:blur(10px);
  
border-bottom:1px solid rgba(255,255,255,0.08);
  
}
  

  
.logo{
  
font-size:24px;
  
font-weight:bold;
  
color:#00ffcc;
  
}
  

  
/* NAV */
  
nav{
  
display:flex;
  
gap:12px;
  
align-items:center;
  
flex-wrap:wrap;
  
}
  

  
nav a{
  
text-decoration:none;
  
color:#fff;
  
padding:8px 14px;
  
border-radius:20px;
  
background:rgba(255,255,255,0.08);
  
transition:0.3s;
  
font-size:14px;
  
}
  

  
nav a:hover{
  
background:#00ffcc;
  
color:#000;
  
}
  

  
/* WhatsApp button */
  
.whatsapp{
  
background:#25d366 !important;
  
font-weight:bold;
  
}
  

  
/* ================= HERO ================= */
  
.hero{
  
height:90vh;
  
display:flex;
  
flex-direction:column;
  
justify-content:center;
  
align-items:center;
  
text-align:center;
  
padding:20px;
  
position:relative;
  
}
  

  
.hero::before{
  
content:"";
  
position:absolute;
  
inset:0;
  
background:url('images/hero.jpg') center/cover no-repeat;
  
filter:brightness(0.4);
  
z-index:-1;
  
}
  

  
.hero h1{
  
font-size:48px;
  
color:#fff;
  
}
  

  
.hero p{
  
margin-top:10px;
  
color:#ddd;
  
font-size:18px;
  
}
  

  
.hero button{
  
margin-top:20px;
  
padding:12px 20px;
  
border:none;
  
border-radius:25px;
  
cursor:pointer;
  
background:#00ffcc;
  
color:#000;
  
font-weight:bold;
  
transition:0.3s;
  
}
  

  
.hero button:hover{
  
transform:scale(1.05);
  
}
  

  
/* ================= ANIMATIONS ================= */
  
@keyframes spin{
  
to{transform:rotate(360deg);}
  
}
  

  
@keyframes float{
  
50%{transform:translateY(-5px);}
  
}
  

  
/* ================= MOBILE ================= */
  
@media(max-width:768px){
  
.hero h1{font-size:32px;}
  
nav{justify-content:center;}
  
header{flex-direction:column;gap:10px;}
  
}
  

  
</style></head><body><!-- ================= PRELOADER ================= --><div id="preloader"><div class="loader-box"><div class="car"><div class="wheel left"></div><div class="wheel right"></div></div><p class="loading-text">Loading Oboye Autoshop...</p></div></div><!-- ================= HEADER ================= --><header><div class="logo">Oboye Autoshop</div><nav><a href="#home">Home</a>

<a href="#about">About</a>

<a href="#services">Services</a>

<a href="#contact">Contact</a>

<a class="whatsapp" href="https://wa.me/233546330886" target="_blank">WhatsApp</a>

</nav></header><!-- ================= HERO ================= --><section class="hero" id="home"><h1>Professional Auto Repair & Diagnostics</h1><p>Your trusted mechanic workshop in Ghana</p><button onclick="document.getElementById('services').scrollIntoView()">Explore Services</button>

</section><script>
  
// PRELOADER REMOVE
  
window.addEventListener("load",()=>{
  
setTimeout(()=>{
  
document.getElementById("preloader").style.display="none";
  
},2000);
  
});
  
</script><!-- ================= ABOUT ================= --><section id="about" class="section"><div class="container"><h2>About Oboye Autoshop</h2><p class="section-text">Oboye Autoshop is a professional automobile repair and diagnostics center dedicated to providing high-quality mechanical services.

We specialize in engine repair, ECU diagnostics, vehicle maintenance, and performance tuning using modern tools and expert technicians.

</p><div class="about-grid"><div class="about-box"><h3>Our Mission</h3><p>To deliver reliable, affordable, and professional automotive solutions to every customer.</p></div><div class="about-box"><h3>Our Vision</h3><p>To become one of the most trusted auto repair centers in Ghana and beyond.</p></div><div class="about-box"><h3>Experience</h3><p>Over 5+ years of hands-on mechanical and diagnostic expertise.</p></div></div></div></section><!-- ================= SERVICES ================= --><section id="services" class="section dark"><div class="container"><h2>Our Services</h2><div class="grid"><div class="card"><h3>Engine Repair</h3><p>Full engine diagnostics, repair, and replacement services.</p></div><div class="card"><h3>ECU Diagnostics</h3><p>Advanced computer diagnostics for modern vehicles.</p></div><div class="card"><h3>Oil & Maintenance</h3><p>Regular servicing to keep your vehicle in top condition.</p></div><div class="card"><h3>Brake System</h3><p>Brake inspection, repair, and replacement services.</p></div></div></div></section><!-- ================= WHY CHOOSE US ================= --><section class="section"><div class="container"><h2>Why Choose Us</h2><div class="grid"><div class="card highlight"><h3>✔ Certified Mechanics</h3><p>Highly trained professionals with real experience.</p></div><div class="card highlight"><h3>✔ Modern Tools</h3><p>We use advanced diagnostic and repair equipment.</p></div><div class="card highlight"><h3>✔ Affordable Pricing</h3><p>Quality service at reasonable and transparent prices.</p></div><div class="card highlight"><h3>✔ Fast Service</h3><p>Quick turnaround time without compromising quality.</p></div></div></div></section><!-- ================= STATS ================= --><section class="stats"><div class="container stats-grid"><div><h3>500+</h3><p>Vehicles Repaired</p></div><div><h3>5+</h3><p>Years Experience</p></div><div><h3>300+</h3><p>Happy Clients</p></div><div><h3>100%</h3><p>Customer Satisfaction</p></div></div></section><!-- ================= BRANDS ================= --><section class="section dark"><div class="container"><h2>Brands We Service</h2><div class="brands"><div class="brand">Toyota</div><div class="brand">Honda</div><div class="brand">BMW</div><div class="brand">Mercedes</div><div class="brand">Ford</div></div></div></section><!-- ================= EXTRA CSS (PART 2 STYLES) ================= --><style>
  

  
/* SECTION LAYOUT */
  
.section{
  
padding:70px 20px;
  
text-align:center;
  
}
  

  
.section.dark{
  
background:#0f1628;
  
}
  

  
.container{
  
max-width:1100px;
  
margin:auto;
  
}
  

  
/* TEXT */
  
.section h2{
  
font-size:32px;
  
margin-bottom:20px;
  
color:#00ffcc;
  
}
  

  
.section-text{
  
max-width:700px;
  
margin:auto;
  
color:#ccc;
  
line-height:1.6;
  
}
  

  
/* ABOUT */
  
.about-grid{
  
display:grid;
  
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  
gap:20px;
  
margin-top:30px;
  
}
  

  
.about-box{
  
background:#111a2e;
  
padding:20px;
  
border-radius:12px;
  
}
  

  
/* SERVICES + WHY */
  
.grid{
  
display:grid;
  
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  
gap:20px;
  
margin-top:30px;
  
}
  

  
.card{
  
background:#111a2e;
  
padding:20px;
  
border-radius:12px;
  
transition:0.3s;
  
}
  

  
.card:hover{
  
transform:translateY(-8px);
  
box-shadow:0 0 15px #00ffcc;
  
}
  

  
.highlight{
  
border-left:4px solid #00ffcc;
  
}
  

  
/* STATS */
  
.stats{
  
background:#0b0f1a;
  
padding:60px 20px;
  
text-align:center;
  
}
  

  
.stats-grid{
  
display:grid;
  
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
  
gap:20px;
  
}
  

  
.stats h3{
  
font-size:30px;
  
color:#00ffcc;
  
}
  

  
/* BRANDS */
  
.brands{
  
display:flex;
  
flex-wrap:wrap;
  
justify-content:center;
  
gap:15px;
  
margin-top:20px;
  
}
  

  
.brand{
  
padding:10px 18px;
  
background:#111a2e;
  
border-radius:20px;
  
color:#fff;
  
}
  

  
  </style>  <!-- ================= TEAM ================= --><section class="section"><div class="container"><h2>Meet Our Experts</h2><div class="grid"><div class="card"><h3>Senior Mechanic</h3><p>Engine specialist with advanced diagnostic skills.</p></div><div class="card"><h3>Electrical Technician</h3><p>Expert in ECU and vehicle electrical systems.</p></div><div class="card"><h3>Service Advisor</h3><p>Helps customers understand repairs and costs clearly.</p></div></div></div></section><!-- ================= GALLERY ================= --><section class="section dark"><div class="container"><h2>Our Projects</h2><div class="gallery"><img src="images/project1.jpg" alt="Project 1"><img src="images/project2.jpg" alt="Project 2"><img src="images/project3.jpg" alt="Project 3"></div></div></section><!-- ================= TESTIMONIALS ================= --><section class="section"><div class="container"><h2>What Clients Say</h2><div class="grid"><div class="card"><p>"Excellent service! My car runs like new again."</p><h4>- Kwame A.</h4></div><div class="card"><p>"Very professional and affordable workshop."</p><h4>- Ama B.</h4></div><div class="card"><p>"Fast diagnostics and honest pricing. Highly recommend."</p><h4>- Joseph K.</h4></div></div></div></section><!-- ================= FAQ ================= --><section class="section dark"><div class="container"><h2>Frequently Asked Questions</h2><div class="faq"><div class="faq-item"><h3 onclick="toggleFAQ(this)">How long does repair take?</h3><p class="faq-answer">It depends on the issue, but most repairs are completed within 1–3 days.</p></div><div class="faq-item"><h3 onclick="toggleFAQ(this)">Do you offer diagnostics?</h3><p class="faq-answer">Yes, we provide full computerized vehicle diagnostics.</p></div><div class="faq-item"><h3 onclick="toggleFAQ(this)">Do I need an appointment?</h3><p class="faq-answer">Walk-ins are welcome, but booking is recommended.</p></div></div></div></section><!-- ================= BOOKING FORM ================= --><section class="section"><div class="container"><h2>Book an Appointment</h2><form class="form"><input type="text" placeholder="Your Name" required><input type="tel" placeholder="Phone Number" required><input type="text" placeholder="Car Model" required><select><option>Select Service</option><option>Engine Repair</option><option>Diagnostics</option><option>Oil Change</option><option>Brake Service</option></select><textarea placeholder="Describe your issue"></textarea><button type="submit">Submit Booking</button>

</form></div></section><!-- ================= EXTRA CSS (PART 3) ================= --><style>
  

  
/* GALLERY */
  
.gallery{
  
display:grid;
  
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  
gap:15px;
  
margin-top:20px;
  
}
  

  
.gallery img{
  
width:100%;
  
border-radius:10px;
  
transition:0.3s;
  
}
  

  
.gallery img:hover{
  
transform:scale(1.05);
  
}
  

  
/* TESTIMONIALS */
  
h4{
  
margin-top:10px;
  
color:#00ffcc;
  
}
  

  
/* FAQ */
  
.faq-item{
  
background:#111a2e;
  
margin-bottom:10px;
  
padding:15px;
  
border-radius:10px;
  
cursor:pointer;
  
}
  

  
.faq-answer{
  
display:none;
  
margin-top:10px;
  
color:#ccc;
  
}
  

  
/* FORM */
  
.form{
  
display:grid;
  
gap:12px;
  
max-width:500px;
  
margin:auto;
  
}
  

  
.form input,
  
.form select,
  
.form textarea{
  
padding:12px;
  
border:none;
  
border-radius:8px;
  
background:#111a2e;
  
color:#fff;
  
}
  

  
.form button{
  
padding:12px;
  
background:#00ffcc;
  
border:none;
  
border-radius:8px;
  
cursor:pointer;
  
font-weight:bold;
  
}
  

  
.form button:hover{
  
background:#00ddb3;
  
}
  

  
</style><!-- ================= JS (PART 3) ================= --><script>
  

  
/* FAQ TOGGLE */
  
function toggleFAQ(el){
  
let answer = el.nextElementSibling;
  
answer.style.display = (answer.style.display === "block") ? "none" : "block";
  
}
  

  
                                              </script>  <!-- ================= CONTACT ================= --><section class="section dark" id="contact"><div class="container"><h2>Contact Us</h2><div class="contact-grid"><div class="contact-info"><p><strong>Phone:</strong> +233 546 330 886</p><p><strong>Email:</strong> oboyeautoshop@gmail.com</p><p><strong>Location:</strong> Ghana</p><p><strong>Hours:</strong> Mon - Sat | 8AM - 6PM</p></div><div class="map"><iframesrc="https://www.google.com/maps/embed?pb=!1m18..."

width="100%"

height="250"

style="border:0;"

allowfullscreen=""

loading="lazy">

</iframe></div></div></div></section><!-- ================= FOOTER ================= --><footer><div class="container"><p>© 2026 Oboye Autoshop. All Rights Reserved.</p></div></footer><!-- ================= FLOATING BUTTONS ================= --><a class="whatsapp-float" href="https://wa.me/233546330886" target="_blank">💬

</a><button onclick="scrollToTop()" id="topBtn">⬆</button>

<!-- ================= FINAL CSS ================= --><style>
  

  
/* CONTACT */
  
.contact-grid{
  
display:grid;
  
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  
gap:20px;
  
margin-top:20px;
  
}
  

  
.contact-info{
  
background:#111a2e;
  
padding:20px;
  
border-radius:10px;
  
text-align:left;
  
}
  

  
/* FOOTER */
  
footer{
  
background:#05070d;
  
padding:20px;
  
text-align:center;
  
color:#aaa;
  
}
  

  
/* WHATSAPP FLOAT */
  
.whatsapp-float{
  
position:fixed;
  
bottom:20px;
  
right:20px;
  
background:#25d366;
  
color:#fff;
  
font-size:24px;
  
padding:12px 15px;
  
border-radius:50%;
  
text-decoration:none;
  
box-shadow:0 0 10px rgba(0,0,0,0.3);
  
}
  

  
/* TOP BUTTON */
  
#topBtn{
  
position:fixed;
  
bottom:80px;
  
right:20px;
  
display:none;
  
padding:10px 12px;
  
border:none;
  
border-radius:50%;
  
background:#00ffcc;
  
cursor:pointer;
  
}
  

  
/* SMOOTH UI */
  
html{
  
scroll-behavior:smooth;
  
}
  

  
</style><!-- ================= FINAL JAVASCRIPT ================= --><script>
  

  
/* PRELOADER FINAL FIX */
  
window.addEventListener("load",()=>{
  
setTimeout(()=>{
  
document.getElementById("preloader").style.display="none";
  
},2000);
  
});
  

  
/* SCROLL TO TOP */
  
function scrollToTop(){
  
window.scrollTo({top:0,behavior:"smooth"});
  
}
  

  
/* SHOW TOP BUTTON */
  
window.addEventListener("scroll",()=>{
  
let btn=document.getElementById("topBtn");
  
if(window.scrollY > 300){
  
btn.style.display="block";
  
}else{
  
btn.style.display="none";
  
}
  
});
  

  
/* SIMPLE AUTO HIGHLIGHT NAV */
  
let links=document.querySelectorAll("nav a");
  

  
links.forEach(link=>{
  
link.addEventListener("click",()=>{
  
links.forEach(l=>l.style.background="rgba(255,255,255,0.08)");
  
link.style.background="#00ffcc";
  
link.style.color="#000";
  
});
  
});
  

  
</script></body>  </html></body>  </html>
