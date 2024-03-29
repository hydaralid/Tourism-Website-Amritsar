<!DOCTYPE html>
<html lang="en">
  <!-- divinectorweb.com -->
<head>
<style>
  .div10 {
color: white;
 position: fixed;
 top:0px;
width: 190px;
left:0px;
padding-left: 20px;
height: 160vh;
background-image:  linear-gradient(30deg, blue, red);
border-top-right-radius: 9px;
border-top-left-radius: 9px;
border-bottom-right-radius: 9px;
border-bottom-left-radius: 9px;
}
/* Div header */
div h3 {
	font-size: 45px;
padding: 40px 0 0 0;
cursor: pointer;
font-family: bebas neue;

}
/* Div links */
div a {
font-size: 20px;
color: #fff;
display: block;
padding: 20px;
padding-left: 30px;
text-decoration: none;
outline: none;
}
/* Div link on hover */
div a:hover {
color:black;
background: orange;
position: relative;
background-color: rgb(14, 140, 186);
border-top-left-radius: 9px;
border-bottom-left-radius: 9px;
}

div.c {
  position: absolute;
  right: 10px;
  width: 1300px;
  height: 120px;
  top:10px;
 
} 

*, *::before, *::after {
	box-sizing: border-box;
}
body {
	margin: 0;
	font-family: "Roboto", sans-serif;
	font-size: 1.3rem;
	position: absolute;
	left:190px;
}
.wrapper {
	background: transparent;
	background-color: rgb(37, 36, 36);
	width: 100%;
	max-width: 100%;
	position: relative;
	height: 120px;

}
header 
  {background-color: rgba(255,255,255,0.5);;
	background: transparent;
	padding:  0;
	text-align: center;
	position: relative;
	width: 100%;
}
.nav {
	width: 1000px;
	height:30px;
	margin: auto;
	}


.nav-toggle {
	cursor: pointer;
	border: 0;
	width: 3rem;
	height: 3rem;
	padding: 0em;
	background: transparent;
	color: rgb(236, 230, 230);
	transition: opacity 250ms ease;
	position: absolute;
	right: 0;
}
.nav-toggle:focus, .nav-toggle:hover {
	opacity: 0.75;
}
.icon-area {
	width: 50%;
	position: relative;
}
.icon-area, .icon-area::before, .icon-area::after {
	display: block;
	margin: 0 auto;
	height: 3px;
	background: white;
}
.icon-area::before, .icon-area::after {
	content: "";
	width: 100%;
}
.icon-area::before {
	transform: translateY(-6px);
}
.icon-area::after {
	transform: translateY(3px);
}
.nav {
	visibility: hidden;
	height: 0;
	position: relative;
}
.nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
}
.nav ul li a {
	color: #fff;
	text-decoration: none;
}
.openMenu {
	visibility: visible;
	height: auto;
	position: relative;
}
.logo {
	text-decoration: none;
	color: #fff;
	font-family: bebas neue;
	text-transform: uppercase;
	font-size: 40px;
	float:left;
	margin-left: 100px;
}
@media (min-width: 800px) {
	.nav-toggle {
		display: none;
	}
	.nav {
		visibility: visible;
		display: flex;
		align-items: center;
		justify-content: flex-end;
		height: auto;
		position: relative;
	
	}
	.nav ul {
		margin: 0;
		display: flex;
		justify-content: space-between;
		float:left;
	}
	.nav ul li {
		margin: 0 0 0 1.5rem;
	}
	.row {
		display: flex;
		justify-content: space-between;
		width: 100%;
		align:center;
	}
}

.banner {
	background: linear-gradient(135deg, rgb(151, 131, 131), transparent);
	height: 70vh;
	background-size: cover;
	background-position: center center;
	display: grid;
	place-items: center;
	text-align: center;
	border-bottom:2px #000;
}
.content {
	margin-top: 0;
    
}
.content h2 {
	margin: 0;
	font-family: 'Alfa Slab One', cursive;
	font-size: 65px;
	color: #fff;
}
.banner p {
	margin: 0;
	color: #fff;
}
.banner a {
	text-decoration: none;
	background: #fff;
	color: #000;
	padding: 10px 25px;
	border-radius: 50px;
	display: inline-block;
	margin-top: 15px;
}
@media (max-width:991px) {
	.nav.openMenu {
		padding: 30px 0;
		background: rgba(0, 0, 0, 0.8);
		margin-top: 20px;
	}
	.nav.openMenu a {
		line-height: 2.5;
	}
}
@media (max-width: 600px) {
	.openMenu {
		padding: 5px 0;
		background: rgba(0, 0, 0, 0.8);
	}
	.openMenu a {
		color: #fff;
		font-size: 16px;
	}
	.content h2 {
		font-size: 20px;
	}
	.banner {
		background-position: 80%;
	}
	.logo {
		font-size: 40px;
	}
	.nav ul li {
		margin: 5px 0;
	}
	.content h2 {
		font-size: 20px;
	}
}

.brief1{
	
	align:center;
	margin:5%;
	padding-left:20px;
	box-shadow: 0px 5px 10px  rgb(37, 36, 36);
	word-wrap: break-word;


}
.brief2
{	
	align:center;
	margin:5%;
	padding-left:20px;
	box-shadow: 0px 5px 10px  rgb(37, 36, 36);
	word-wrap: break-word;
	
}

.inside{
	padding:10px;
	text-align: justify;
	
}

.heading
{	margin-block:-400px;
	margin-top:30px;
	margin-bottom: 5px;
	width:500px;
}

.image{
	text-align: justify;
	position:relative;
	box-shadow:1px 5px 5px black;
	float: right;
	width: auto;
	height: auto;
	display: inline-block;
	margin-right: 15px;
	margin-bottom: 15px;
	margin-left: 15px;
	
}

hr {
  
    border: none;
    height: 2px;
    background: black;
    
}
.neon {
    color: #fff;
    text-shadow:
      0 0 5px #fff,
      0 0 10px #fff,
      0 0 20px #fff,
      0 0 40px #0ff,
      0 0 80px #0ff,
      0 0 90px #0ff,
      0 0 100px #0ff,
      0 0 150px #0ff;
  }


</style>




  </head>
<body>
  <div class="div10">
    <!-- Div Header-->
    <h3>Golden temple</h3>
    <!-- Links in Div -->
    <a href="#History">History</a>
    <a href="#Architecture">Architecture</a>
    <a href="#Philosophy">Philosophy</a>
    <a href="#spirituality">spirituality</a>
    <a href="#cost">cost</a>
    <a href="#maps">Maps</a>


    
  </div>


    <header>

        <div class="wrapper row">
          <button class="nav-toggle">
            <span class="icon-area"></span>
          </button>
          <nav class="nav">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="places.php">Back</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
            </nav>
            </ul>            
          </nav>
        </div>
      </header>

<div class="banner">
    <div class="content">
        <h1 style="color: black;" id="Golden temple" class="heading">Golden temple</h1>
    </div>
</div>
<div class="brief1" id="brief">
    <h2 class="heading" id="History">HISTORY</h2><hr>
    <div class="image">
        <img src= "golden.jpg" style="width:330px;height:330px;" />
      </div>
    <p class="inside" style="text-align: justify;">
      <p>
	  The Golden Temple, also known as Harmandir Sahib or Darbar Sahib, is a highly revered Sikh shrine located in Amritsar, Punjab, India. It holds great historical and spiritual significance for the Sikh community and serves as their central place of worship. Here's a brief history of the Golden Temple.
	  The Golden Temple is the most revered and holiest site in Sikhism. It serves as the central place of worship for Sikhs around the world.<mark> Sikhs consider it the abode of God and a place where they can connect with the divine.</mark>
	  The Golden Temple has a rich historical background. It was founded by Guru Ram Das and completed under Guru Arjan Dev. The temple witnessed significant events, including the compilation of the Adi Granth, the Sikh scriptures, and acts of resistance against persecution. Its history and the sacrifices made by Sikh Gurus and followers make it a symbol of Sikh resilience and religious freedom.
	  <mark>The Golden Temple has gained international recognition as a symbol of peace, spirituality, and communal harmony. Its architectural beauty, religious significance, and the message of equality and inclusivity it promotes have made it a popular tourist attraction and a place of interest for people from all over the world.</mark>
        </p>
     </p><br>
</div>

<div class="brief1" id="brief">
    <h2 class="heading" id="Architecture">ARCHITECTURE</h2><hr>
    <div class="image">
        <img src= "architecture.jpg" style="width:300px;height:380px;" />
      </div>
    <p class="inside" style="text-align: justify;">
      <p>The Golden Temple stands in the midst of a beautiful water body called Amritsar or Amrit Sarovar, from where the city derives its name. The shrine displays influences of different architectural styles, including the Indo-Islamic Mughal architecture and the Hindu Rajput architecture. It is a two-storied structure. While the lower level of the shrine is built out of marble, the upper level is covered in gold panels. <mark>A 750 kg gold gilded dome sits at the top of this structure. Even the doors of the shrine are covered in gold foil.

</mark> The interiors of the shrine are adorned with splendid floral motifs and frescos.Verses from the scripture of the Sikhs are etched in gold lettering on the arches of the shrine. There are four entrances to the Golden Temple complex, but only one to enter the gurudwara.   

		The gurudwara is comprised of many buildings which are located around the main sanctum and the water body. Of these, the most important is Akal Takht or one of the five seats of power in Sikhism. You can also see a clock tower, a museum, offices, and a community kitchen which is locally called a langar.
		<mark>Maharaja Ranjit Singh is responsible for the building of the upper half of the building with a gold leaf that is approximately 400 kg.</mark>
      
          </p>
     </p><br>
</div>

<div class="brief1" id="brief">
  <h2 class="heading" id="Philosophy">PHILOSOPHY</h2><hr>
  <div class="image">
      <img src= "philosophy.jpg" style="width:300px;height:380px;" />
    </div>
  <p class="inside" style="text-align: justify;">
    <p>The Golden Temple or "Darbar Sahib" at Amritsar is the most sacred place for the Sikhs. The Golden temple symbolizes the magnificence of the Sikhs all over the world. The Golden Temple also known as Harmandir Sahib is an example of the spirit of tolerance and acceptance that the Sikh philosophy propounds. In the architecture of the Golden temple are included symbols associated with places of worship of other religions. The Sikhs and people of other religions pay visit to Amritsar and to pay obeisance at Sri Harmandir Sahib. 

      Guru Arjan Singh got the foundation of the Golden temple laid by a Sufi saint Mian Mir of Lahore in December, 1588. The construction work was directly supervised by Guru Arjan Sahib himself. Sri Harmandir Sahib is built on a 67ft. square platform in the centre of a Sarovar (tank). The Golden temple has entrance from all the four sides and is accessible to every person without any distinction of Caste, creed, sex and religion. There is a 13 ft circumambulatory path around the main shrine. It was mainly in the nineteenth century, during the reign of Maharaja Ranjit Singh, that the people lavished their wealth on the Golden temple. 
      
      <mark>The Guru Granth Sahib, the holy book of the Sikhs, was installed in the Harmandir Sahib in 1604.</mark> The location of the Granth Sahib here, adds to the sanctity and veneration of the Harmandir Sahib. Here lies the spirit and soul of Sikhism. This symbol of abiding faith and tolerance is held in high esteem by every Sikh. The Golden temple is the place which every Sikh dreams of visiting. Golden Temple tour is a must for the Sikhs coming to India.

          </p>
   </p><br>
</div>

<div class="brief1" id="brief">
  <h2 class="heading" id="spirituality">SPIRITUALITY</h2><hr>
  <div class="image">
      <img src= "spiritual.jpg" style="width:300px;height:380px;" />
    </div>
  <p class="inside" style="text-align: justify;">
    <p>
      Sri Harmandir Sahib, also known as the “Golden Temple”, is a beautiful holy shrine located in Amritsar, Punjab, India. Furthermore, it is the holiest shrine in Sikhism and as such many Sikhs visit it on a daily basis.  It is a major destination for Sikhs besides being a popular tourist attraction. It’s open to all religions. Visitors, male or female, must cover their heads before entering the temple premises. Moreover, the Guru Granth Sahib is in the Temple during the day, while at night, it is in the Akal Takht or Eternal Throne.

      The most famous and attractive aspect of the Golden temple is its glittering golden dome and appearance. Furthermore, the temple is built on marble that is 67-ft square. Moreover, the temple is a two-storey structure.  
      Moreover, there are a number of famous temples surrounding the Golden Temple. Also, the construction of the pool, whose name is Amritsar or Amrit Sarovar, here was by the fourth Guru of Sikhs, Guru Ram Das.  The brilliant architecture of the temple gives it a unique look. Furthermore, the surrounding Amrit Sarovar pool enhances the beauty of the shrine.
      
      During the night time, the golden reflection of the temple in the pool is really a sight to behold.  To the south of the temple is a beautiful garden where one can easily attain peace of mind.<mark> The Central Sikh Museum, which is atop the Clock Tower, adds to the charm of the temple’s surroundings.</mark> 
      
      Golden Temple is one of the holiest religious sites of the Sikh community. Furthermore, this beautiful shrine, besides being a symbol of the Sikh religion, is also the pride of India.
          </p>
   </p><br>
</div>

<div class="brief1" id="brief">
  <h2 class="heading" id="cost">COST</h2><hr>
  <div class="image">
    </div>
  <p class="inside" style="text-align: justify;">
    <p>
      The Golden Temple that you see today interestingly wasn’t covered with an inch of gold when it was first constructed.  In the year 1762, this religious heritage site was complete, destroyed by Islamic rulers. It was then that Maharaja Ranjit Singh, a brave Sikh ruler rebuilt the entire temple and added a sparkling outer covering of gold to the marble structure.<mark> 500 kg of pure 24-karat of gold worth ₹130 crores,</mark> covered the temple in all its glory. And that’s when the Sri Harmandir Sahib got famously referred to as the Golden Temple of Amritsar. 
          </p>
   </p><br>
</div>


<div class="brief1" id="brief">
	<h2 class="heading" id="maps">Maps</h2><hr>

	<p class="inside" style="text-align: justify;">
	  <p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36019.64539829517!2d74.83615587300147!3d31.62091922385453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39197dbf25d15bf7%3A0xc7c4ed739c79232a!2sGOLDEN%20TEMPLE%20AMRITSAR!5e0!3m2!1sen!2sin!4v1687884918190!5m2!1sen!2sin" width="1150" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</p>
	 </p><br>
  </div>      





<div class="container my-5">

  <footer class="text-white text-center text-lg-start" style="background-color:  rgb(75, 72, 72);">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h2 class="text-uppercase mb-4">&nbsp;&nbsp;About </h2>

          <p>
          &nbsp;&nbsp;This Website gives us information about the Golden temple.
          </p>

  
      


        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4 pb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Info:</h5>

          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Sri Harmandir Sahib, Golden Temple Rd,
                Atta Mandi,<br> Katra Ahluwalia, Amritsar,
                Punjab 143006</span>
            </li>

            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">01832553954</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">01832553957</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
   
  </footer>
  
</div>
      <script>
        const cusMenu = document.querySelector(".nav-toggle");
            const nav = document.querySelector(".nav");

            cusMenu.addEventListener("click", () => {
            nav.classList.toggle("openMenu");
        });
      </script>
</body>
</html>