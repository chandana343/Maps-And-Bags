<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>EXPLORE</title>
  <link rel="icon"  href="https://img.freepik.com/free-vector/map-india-with-tricolor_1017-1592.jpg" >
  <style>


img{
  transition:0.5s;
}
.box{
  width:200px;height: 200px;
  margin:50px auto;
  position:relative;
  overflow:hidden;
  cursor:pointer;
}
.container{
  position:absolute;
  top:0;
  width:100%;
  height:100%;
  overflow:hidden;
  z-index:1;
}
.container::before{
  content:'';
  width:100%;
  height:100%;
  position:absolute;
  top:0;
  transform:skew(-45deg);
  opacity:0;
  background:rgb(146, 146, 146);
  z-index:-1;
  left:-700px;
  transition:0.5s;
}
.content{
  text-align:center;
  color:#f4f4f4;
  transform:translateY(50%);
}
p{
  padding:10px;
  line-height:10px;
  transform:scale(2);
  opacity:0;
  transition:0.5s;color: black;font-size: medium;font-style: oblique;font-weight: bold;
}
.box:hover .container::before{
  left:0;
  opacity:0.7;
}
.box:hover img{
  transform:scale(1.5);
}
.box:hover p{
    transform:scale(1);
    opacity:1;
}
a{
  color: black;text-decoration: none;
}
#states{
        padding: 20px;margin: auto;
    }
    #union{
        padding: 20px;margin: auto;border-spacing: 40px;text-align: center;
    }
    img{
        height: 200px;width:200px;
    }
    td{
        text-align: center;
    }
    h1{
        text-decoration: underline;text-decoration-color: black;text-align: center;
    }
    
  </style>
</head>
<body>
  <H1><i>STATES OF INDIA</i></H1>
  <table id="states">
    <tr><td>
  <div class="box">
    <img src="https://www.burningcompass.com/countries/india/maps/andhra-pradesh-outline-map.jpg" alt="Andhra" > 
    <div class="container">
      <div class="content">
        <p>THE ESSENCE OF<br><br> INDIA<br><br><a href="ANDHRA PRADESH.html">Click here!</a></p>
      </div>
    </div>
  </div>ANDHRA PRADESH</td>
  <td>
  <div class="box">
    <img src="https://www.burningcompass.com/countries/india/maps/arunachal-pradesh-outline-map.jpg" alt="Arunachal" >
      <div class="container">
      <div class="content">
        <p>LAND OF RISING SUN<br><br><a href="ARUNACHAL PRADESH.html">Know more</a></p>
      </div>
    </div>
  </div>ARUNACHAL PRADESH</td>
  <td>
    <div class="box">
      <img src="https://www.burningcompass.com/countries/india/maps/assam-outline-map.jpg" alt="Assam" >
        <div class="container">
        <div class="content">
          <p>LAND OF TEA,<br><br>SILK & NATIONAL<br><br> PARKS<br><br><a href="ASSAM.html">Know more</a></p>
        </div>
      </div>
    </div>ASSAM</td>
    <td>
      <div class="box">
        <img src="https://www.burningcompass.com/countries/india/maps/bihar-outline-map.jpg" alt="" >
          <div class="container">
          <div class="content">
            <p>LAND OF MONASTRIES<br><br><a href="BIHAR.html">Know more</a></p>
          </div>
        </div>
      </div>BIHAR</td>
      <td>
        <div class="box">
          <img src="https://www.burningcompass.com/countries/india/maps/chhattisgarh-outline-map.jpg" alt="" >
            <div class="container">
            <div class="content">
              <p>THE RICE BOWL OF<br><br> INDIA<br><br><a href="CHATTISGARH.html">Know more</a></p>
            </div>
          </div>
        </div>CHATTISGARH</td>
        <td>
          <div class="box">
            <img src="https://www.burningcompass.com/countries/india/maps/goa-outline-map-hd.jpg" alt="" >
              <div class="container">
              <div class="content">
                <p>FUN CAPITAL OF <br><br>INDIA<br><br><a href="GOA.html">Know more</a></p>
              </div>
            </div>
          </div>GOA</td>
          <td>
            <div class="box">
              <img src="https://www.burningcompass.com/countries/india/maps/gujarat-outline-map.jpg" alt="" >
                <div class="container">
                <div class="content">
                  <p>MANCHESTER OF THE <br><br>EAST<br><br><a href="GUJARAT.html">Know more</a></p>
                </div>
              </div>
            </div>GUJARAT</td>
</tr>
<tr>
  <td>
    <div class="box">
      <img src="https://www.burningcompass.com/countries/india/maps/haryana-outline-map.jpg" alt="" >
        <div class="container">
        <div class="content">
          <p>A PIOINEER IN<br><br> HIGHWAY TOURISM<br><br><a href="HARYANA.html">Know more</a></p>
        </div>
      </div>
    </div>HARYANA</td>
    <td>
      <div class="box">
        <img src="https://www.burningcompass.com/countries/india/maps/himachal-pradesh-outline-map.jpg" alt="" >
          <div class="container">
          <div class="content">
            <p>MINI SWITZERLAND <br><br>OF <br><br> INDIA<br><br><a href="HIMACHAL PRADESH.html">Know more</a></p>
          </div>
        </div>
      </div>HIMACHAL PRADESH </td>
      <td>
        <div class="box">
          <img src="https://www.burningcompass.com/countries/india/maps/jharkhand-outline-map.jpg" alt="" >
            <div class="container">
            <div class="content">
              <p>LAND OF FORESTS<br><br><a href="JHARKHAND.html">Know more</a></p>
            </div>
          </div>
        </div>JHARKHAND</td>
        <td>
          <div class="box">
            <img src="https://www.burningcompass.com/countries/india/maps/karnataka-outline-map.jpg" alt="" >
              <div class="container">
              <div class="content">
                <p>SILICON VALLEY OF <br><br> INDIA<br><br><a href="KARNATAKA.html">Know more</a></p>
              </div>
            </div>
          </div>KARNATAKA</td>
          <td>
            <div class="box">
              <img src="https://www.burningcompass.com/countries/india/maps/kerala-outline-map.jpg" alt="" >
                <div class="container">
                <div class="content">
                  <p>GODS OWN COUNTRY<br><br><a href="KERALA.html" target="_blank">Know more</a></p>
                </div>
              </div>
            </div>KERALA</td>
            <td>
              <div class="box">
                <img src="https://www.burningcompass.com/countries/india/maps/madhya-pradesh-outline-map.jpg" alt="" >
                  <div class="container">
                  <div class="content">
                    <p>THE HEART OF INDIA<br><br><a href="MADHYA PRADESH.html">Know more</a></p>
                  </div>
                </div>
              </div>MADHYA PRADESH</td>
              <td>
                <div class="box">
                  <img src="https://www.burningcompass.com/countries/india/maps/maharashtra-outline-map.jpg" alt="" >
                    <div class="container">
                    <div class="content">
                      <p>CITY OF DREAMS<br><br><a href="MAHARSHTRA.html">Know more</a></p>
                    </div>
                  </div>
                </div>MAHARSHTRA</td>
</tr>
<tr>
  <td>
    <div class="box">
      <img src="https://www.burningcompass.com/countries/india/maps/manipur-outline-map.jpg" alt="" >
        <div class="container">
        <div class="content">
          <p>LAND OF GEMS<br><br><a href="MANIPUR.html">Know more</a></p>
        </div>
      </div>
    </div>MANIPUR</td>
    <td>
      <div class="box">
        <img src="https://www.burningcompass.com/countries/india/maps/meghalaya-outline-map.jpg" alt="" >
          <div class="container">
          <div class="content">
            <p>ABODE OF CLOUDS<br><br><a href="MEGHALAYA.html">Know more</a></p>
          </div>
        </div>
      </div>MEGHALAYA</td>
      <td>
        <div class="box">
          <img src="https://www.burningcompass.com/countries/india/maps/mizoram-outline-map.jpg" alt="" >
            <div class="container">
            <div class="content">
              <p>PENINSULA STATE<br><br><a href="MIZORAM.html">Know more</a></p>
            </div>
          </div>
        </div>MIZORAM</td>
        <td>
          <div class="box">
            <img src="https://www.burningcompass.com/countries/india/maps/nagaland-outline-map.jpg" alt="" >
              <div class="container">
              <div class="content">
                <p>FALCON CAPITAL OF<br><br> THE WORLD<br><br><a href="NAGALAND.html">Know more</a></p>
              </div>
            </div>
          </div>NAGALAND</td>
          <td>
            <div class="box">
              <img src="https://www.burningcompass.com/countries/india/maps/odisha-outline-map.jpg" alt="" >
                <div class="container">
                <div class="content">
                  <p>SOUL OF INDIA<br><br><a href="ODISHA.html">Know more</a></p>
                </div>
              </div>
            </div>ODISHA</td>
            <td>
              <div class="box">
                <img src="https://www.burningcompass.com/countries/india/maps/punjab-outline-map.jpg" alt="" >
                  <div class="container">
                  <div class="content">
                    <p>LAND OF RIVERS<br><br><a href="PUNJAB.html">Know more</a></p>
                  </div>
                </div>
              </div>PUNJAB</td>
              <td>
                <div class="box">
                  <img src="https://www.burningcompass.com/countries/india/maps/rajasthan-outline-map.jpg" alt="" >
                    <div class="container">
                    <div class="content">
                      <p>LANDS OF KINGS <br><br>&<br><br> KINGDOMS <br><br><a href="RAJASTHAN.html" target="_blank">Know more</a></p>
                    </div>
                  </div>
                </div>RAJASTHAN</td>
</tr>
<tr>
  <td>
    <div class="box">
      <img src="https://www.burningcompass.com/countries/india/maps/sikkim-outline-map.jpg" alt="" >
        <div class="container">
        <div class="content">
          <p> SMALL BUT<br><br> BEAUTIFUL<br><br><a href="SIKKIM.html">Know more</a></p>
        </div>
      </div>
    </div>SIKKIM</td>
    <td>
      <div class="box">
        <img src="https://www.burningcompass.com/countries/india/maps/tamil-nadu-outline-map.jpg" alt="" >
          <div class="container">
          <div class="content">
            <p>ENCHANTING <br><br> TAMIL NADU<br><br><a href="TAMIL NADU.html">Know more</a></p>
          </div>
        </div>
      </div>TAMIL NADU</td>
      <td>
        <div class="box">
          <img src="https://www.burningcompass.com/countries/india/maps/telangana-outline-map.jpg" alt="" >
            <div class="container">
            <div class="content">
              <p>REIGN OF NIZAMS<br><br><a href="TELANGANA.html">Know more</a></p>
            </div>
          </div>
        </div>TELANGANA</td>
        <td>
          <div class="box">
            <img src="https://www.burningcompass.com/countries/india/maps/tripura-outline-map.jpg" alt="" >
              <div class="container">
              <div class="content">
                <p>PRINCELY STATE<br><br><a href="TRIPURA.html">Know more</a></p>
              </div>
            </div>
          </div>TRIPURA</td>
          <td>
            <div class="box">
              <img src="https://www.burningcompass.com/countries/india/maps/uttar-pradesh-outline-map.jpg" alt="" >
                <div class="container">
                <div class="content">
                  <p>AMAZING HERITAGE &<br><br> GRAND EXPERIENCE<br><br><a href="UTTARPRADESH.html">Know more</a></p>
                </div>
              </div>
            </div>UTTARPRADESH</td>
            <td>
              <div class="box">
                <img src="https://www.burningcompass.com/countries/india/maps/uttarakhand-outline-map.jpg" alt="" >
                  <div class="container">
                  <div class="content">
                    <p>DEVBHOOMI<br><br><a href="UTTARAKHAND.html">Know more</a></p>
                  </div>
                </div>
              </div>UTTARAKHAND</td>
              <td>
                <div class="box">
                  <img src="https://www.burningcompass.com/countries/india/maps/west-bengal-outline-map.jpg" alt="" >
                    <div class="container">
                    <div class="content">
                      <p>BEAUTIFUL BENGAL<br><br><a href="WEST BENGAL.html">Know more</a></p>
                    </div>
                  </div>
                </div>WEST BENGAL</td>
</tr>
</table><br><br><br><br>
<H1>UNION TERRITORIES OF INDIA</H1>
   <table id="union">
    <tr>
      <td>
        <div class="box">
          <img src="https://www.burningcompass.com/countries/india/maps/andaman-and-nicobar-islands-outline-map.jpg" alt="" >
            <div class="container">
            <div class="content">
              <p>EMARLAD, BLUE &YOU<br><br><a href="ANDAMAN & NICOBAR ISLANDS.html">Know more</a></p>
            </div>
          </div>
        </div>ANDAMAN<br>&<br>NICOBAR ISLANDS</td>
        <td>
          <div class="box">
            <img src="https://www.burningcompass.com/countries/india/maps/chandigarh-outline-map.jpg" alt="" >
              <div class="container">
              <div class="content">
                <p>THE HUB OF<br><br> NORTH INDIA<br><br><a href="CHANDIGARH-INFO.html">Know more</a></p>
              </div>
            </div>
          </div>CHANDIGARH</td>
          <td>
            <div class="box">
              <img src="https://www.burningcompass.com/countries/india/maps/dadra-and-nagar-haveli-and-daman-and-diu-outline-map.jpg" alt="" >
                <div class="container">
                <div class="content">
                  <p>D LAND OF<br><br> NATURAL BEAUTY<br><br><a href="DADRA & NAGAR HAVELI.html">Know more</a></p>
                </div>
              </div>
            </div>DADRA<br>&<br>NAGAR HAVELI</td>
            <td>
              <div class="box">
                <img src="https://www.burningcompass.com/countries/india/maps/delhi-outline-map.jpg" alt="" >
                  <div class="container">
                  <div class="content">
                    <p>DILLI HAI HUM<br><br><a href="DELHI.html">Know more</a></p>
                  </div>
                </div>
              </div>DELHI</td>
    </tr>
    <tr>
      <td>
        <div class="box">
          <img src="https://www.burningcompass.com/countries/india/maps/jammu-and-kashmir-outline-map.jpg" alt="" >
            <div class="container">
            <div class="content">
              <p>CHALO KASHMIR<br><br><a href="JAMMU & KASHMIR.html">Know more</a></p>
            </div>
          </div>
        </div>JAMMU<br>&<br>KASHMIR</td>
        <td>
          <div class="box">
            <img src="https://www.burningcompass.com/countries/india/maps/ladakh-outline-map.jpg" alt="" >
              <div class="container">
              <div class="content">
                <p>LAND OF HIGH PASSES<br><br><a href="LADAKH.html">Know more</a></p>
              </div>
            </div>
          </div>LADAKH</td>
          <td>
            <div class="box">
              <img src="https://www.burningcompass.com/countries/india/maps/lakshadweep-outline-map.jpg" alt="" >
                <div class="container">
                <div class="content">
                  <p>LAKSHADWEEP <br><br> 99% FUN 1% LAND<br><br><a href="LAKSHADWEEP.html">Know more</a></p>
                </div>
              </div>
            </div>LAKSHADWEEP</td>
            <td>
              <div class="box">
                <img src="https://www.burningcompass.com/countries/india/maps/puducherry-outline-map.jpg" alt="" >
                  <div class="container">
                  <div class="content">
                    <p>GIMME A BREAK<br><br><a href="PUDUCHERRY.html">Know more</a></p>
                  </div>
                </div>
              </div>PUDUCHERRY</td>
    </tr>
   </table>

</body>
</html>
