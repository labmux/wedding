<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body,h1,h2{font-family: "Raleway", sans-serif}
body, html {height: 100%}
p {line-height: 2}
.bgimg{
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
.bgimg {background-image: url("pics/img2.jpg")}
</style>

<!-- Header / Home-->
<header class="w3-display-container w3-wide bgimg w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo">Laura & Eliran</h1>
    <h2></h2>
    <h2><b>08.10.2018</b></h2>
  </div>
</header>

<head>
  <!-- Css -->
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="w3.css">
  <!-- Libraries -->
  <script src="lib/angular.js"></script>
  <script src="lib/angular-ui-router.js"></script>
  <!-- Scripts -->
  <script src="app.js"></script>
  <script src="services.js"></script>
  <script src="homecontroller.js"></script>
</head>

<body ng-app="routerApp">
<!-- Wedding information -->
<div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min w3-center" id="wedding">
  <div class="w3-content">
    <h1 class="w3-text-grey"><b>THE WEDDING</b></h1>
     <div class="w3-half">
        <h2>When</h2>
        <p>October 8th 2018</p>
        <p>Cocktail - 5:30pm</p>
        <p>Huppa - 7:00pm</p>
      </div>
      <div class="w3-half">
        <h2>Where</h2>
        <p>Spanish & Portuguese Synagogue</p>
        <p>4894 Avenue St Kevin</p>
        <p>Montréal, QC H3W 2V2</p>
        <p>Canada</p>
      </div>
    </div>
  </div>

<!-- RSVP section -->
<div class="w3-container w3-padding-64 w3-pale-red w3-center w3-wide" id="rsvp">
  <h1>HOPE YOU CAN MAKE IT!</h1>
  <p class="w3-large">Kindly Respond By January, 2017</p>
  <p class="w3-xlarge">
    <!-- RSVP button -->
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-round w3-red w3-opacity w3-hover-opacity-off" style="padding:8px 60px">
      RSVP
    </button>
  </p>
</div>

<!-- RSVP modal -->
<div id="id01" class="w3-modal" ng-controller="homectrl">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="padding:32px;max-width:600px">
    <div class="w3-container w3-white w3-center">
      <h1 class="w3-wide">CAN YOU COME?</h1>
      <p>We really hope you can make it.</p>

      <p>What is the total amount of people coming?</p>
      <input type="number"
             placeholder="Select number"
             ng-model="number">

        <div ng-repeat="x in num() track by $index">
            <input class="w3-input w3-border"
               type="text"
               placeholder="Name(s)"
               ng-model="namelist[$index].name">
            <input type="checkbox"
                 ng-model="namelist[$index].ischild">

          <!-- x -->
          <span class="w3-padding-16"
                class="w3-right w3-margin-right"
                style="cursor: pointer;"
                ng-click="remove($index)">&emsp; &#10060
            </span>
          <p></p>
        </div>

        <!-- Add namelist & Reset buttons -->
        <button ng-click="reset()"
                class="w3-btn w3-padding w3-red">
          Reset</button>
       <!-- Error message -->
       <p style="color: red">{{errormsg}}</p>
       
      <p><i>Sincerely, Laura & Eliran</i></p>
      <div class="w3-row">
        <div class="w3-half">
          <button onclick="document.getElementById('id01').style.display='none'; confirmation()"
                  ng-click="coming()"
                  type="button"
                  class="w3-button w3-block w3-green" >Going </button>
        </div>

        <div class="w3-half">
          <button onclick="document.getElementById('id01').style.display='none'; confirmation()"
                  ng-click="notcoming()"
                  type="button"
                  class="w3-button w3-block w3-red">Can't come</button>
        </div>
  
  
        <script>
        function confirmation () {
          alert("Thank you, your input has been saved!");
        }
        </script>
      </div>
    </div>
  </div>
</div>
</body>



</html>