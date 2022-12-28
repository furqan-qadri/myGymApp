
<!DOCTYPE html>
<html>
<?php 
session_start (); 
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    .container{
        display: grid;
        height: 100vh;
        grid-template-columns:0.5fr 1fr 1fr 1fr 1fr;
        grid-template-rows:0.1fr 0.5fr 0.2fr 4fr 1fr;
        grid-template-areas: 
        "im title title title empty"
        "im wel wel wel empty"
        "a b c d e"
        "sidebar main main main main"
        "sidebar main main main main";

        font-weight: 800;
        font-size: 14px;
        color: #000000;
        text-align: center;
    }
    a {
        color:black;
   text-decoration: none; 
   background-color: none;
   }

.a{
  background: #E97451;
  grid-area: a;
  color:rgb(255, 255, 255);
  border-radius: var(--main-radius);
  padding-top: var(--main-padding);
  text-decoration:none;
}
.b{
  background: #E97451;
  grid-area: b;
  color:rgb(255, 255, 255);
  border-radius: var(--main-radius);
  padding-top: var(--main-padding);
  text-decoration:none;
}

.c{
  background: #E97451;
  grid-area: c;
  color:rgb(255, 255, 255);
  border-radius: var(--main-radius);
  padding-top: var(--main-padding);
  text-decoration:none;
}

.d{
  background: #E97451;
  grid-area: d;
  color:rgb(255, 255, 255);
  border-radius: var(--main-radius);
  padding-top: var(--main-padding);
  text-decoration:none;
}

.e{
  background: #E97451;
  grid-area: e;
  color:rgb(255, 255, 255);
  border-radius: var(--main-radius);
  padding-top: var(--main-padding);
  
}


.wel {
  text-align: right;
   background-color: #e86c11;
    margin: 0;
    font-size: 20px;
    grid-area: wel;}
.title {
  padding-left: 0px;
  text-align: center;
  background-color: #e86c11;
  margin: 0;
  font-size:45px;
  grid-area: title;
}
body{
margin: 0;
}
.logoutLblPos{

   position:fixed;
   right:10px;
   top:15px;
}

 .im{
grid-area: im;
background: #e86c11;
margin: 0;
}

.empty{
grid-area: empty;
background-color: #e86c11;
margin: 0;
}

ul {
    list-style-type: none;
}

.sidebar {
  background: #DB1F48;
  grid-area: sidebar;
  border-radius: var(--main-radius);
  padding-top: var(--main-padding);

}
.main {
  grid-area: main;
  border-radius: var(--main-radius);
  padding-top: var(--main-padding);
}
@media only screen and (max-width: 550px) {
  .container {
    grid-template-columns: 1fr;
    grid-template-rows: 2fr 0.4fr 1.2fr 1.2fr 2.2fr 1.2fr 1fr;
    grid-template-areas:
      "im"
      "title"
      "wel"
      "nav"
      "sidebar"
      "main"
  
  }
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
table.pepega{
   right:450px;
   top:400px;
   }

table.peepo{
   right:515px;
   top:200px;
   }
p.chat {
	background-color: white;
  text-align: left;
   }

</style>
</head>
<body>

  <div class="container">]
    <div class="im">
      <img src="gym.PNG" alt="HTML5 Icon" style="width:110px;height:110px;">
    </div>
    <div class="title">
      Gym Trainee Apps
    </div>
<div class="wel">
<p>Welcome <?php echo $_SESSION["ownerName"]; ?>.</p>
</div>
<div class="a">
  <a href="/home">Dashboard</a>
</div>
<div class="b">
  <a href="/home"   style="text-decoration:none;">Members</a>
</div>
<div class="c">
  <a href="/blog">Trainers</a>
</div>
<div class="d">
  <a href="/blog">Schedule</a>
</div>
<div class="e">
  <a href="/blog">Plans</a>
</div>
<div class="empty"></div>
<div class="sidebar">
 <ul><li><a class="active" href="#home">Annoucement</a></li></ul>
  <ul><li><a href="#news">Repair report<BR>22/4/2022</a></li></ul>
  <ul><li><a href="#contact">New Equipment<BR>16/4/2022</a></li></ul>
  <ul><li><a href="#about">Payment notice<BR>14/4/2022</a></li></ul>
  <ul><li><a href="#about">Monthly Briefing<BR>05/4/2022</a></li></ul>
  <ul><li><a href="#about">Gym Anniversary<BR>05/4/2022</a></li></ul>
  <ul><li><a href="#about">Gym notice<BR>05/4/2022</a></li></ul>
  <ul><li><a href="#about">Annual Discount<BR>05/4/2022</a></li></ul>
</div>
<div class="main">
  <p class="chat">Gym Summary</p>
  <p class="chat">Some content..</p>
  <table class="peepo">
   <tr>
    <th>Members</th>
    <th>Currently Active</th>
    <th>Total registered</th>
	<th>Added in last 2 weeks</th>
	<th>Active percentage</th>
  </tr>
  <tr>
    <th>100</th>
    <th>40</th>
    <th>T64</th>
	<th>15</th>
	<th>40%</th>
  </tr>
  </table>
<table class="pepega">
  <tr>
    <th>Plans</th>
    <th>Currently Active</th>
    <th>Total registered</th>
	<th>Trainers</th>
	<th>Revenue this Month</th>
  </tr>
  <tr>
    <td>gold</td>
    <td>10</td>
    <td>20</td>
	 <td>2</td>
	  <td>rm 3000</td>
  </tr>
  <tr>
    <td>silver</td>
    <td>15</td>
    <td>19</td>
	 <td>3</td>
	  <td>rm 3000</td>
  </tr>
  <tr>
    <td>bronze</td>
    <td>25</td>
    <td>30</td>
	 <td>4</td>
	  <td>rm 2500</td>
  </tr>

</table>
</div>
</div>
</body>
</html>
