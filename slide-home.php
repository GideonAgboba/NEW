
<aside class="profile-card">
  <div class="container">
    <div id="auto" class="text-center text-white home-story">
    <div>
      <i class="fa fa-quote-left fa-4x"></i>
      <h2 class="text-white">We provide quality products and services with affordable prices</h3>
    </div>
    <div>
      <i class="fa fa-quote-left fa-4x"></i>
      <h2 class="text-white">With quality delivery service we promise successfully documented transactions</h3>
    </div>
    <div>
      <i class="fa fa-quote-left fa-4x"></i>
      <h2 class="text-white">We have been tested and we are trusted</h2>
    </div>
    <div>
      <i class="fa fa-quote-left fa-4x"></i>
      <h2 class="text-white">With absolute assurance on products quality we stand-out</h2>
    </div>
</div>
  </div>
</aside>


<style type="text/css">
.home-story{

}
.home-story h2{
  font-family: sans-serif;
  word-spacing: 5px;  
}
/*!
 * Bare Bones Slider
 * http://www.bbslider.com/
 */

.bbslider-wrapper {
  display:block;
  overflow:hidden;
  position:relative;
}
.bbslider-wrapper {
  -o-transition-property: height;
  -moz-transition-property: height;
  -webkit-transition-property: height;
  transition-property:height;
}
.bbslider-wrapper > .panel {
  display:block;
  position:absolute;
  width:100%;
}
.bbslider-wrapper > .panel.init,
.bbslider-wrapper > .panel.init > .panel-inner {
  -o-transition: none !important;
  -moz-transition: none !important;
  -webkit-transition: none !important;
  transition:none !important;
}
.bbslider-wrapper > .panel > .panel-inner {
  -o-transition-duration: inherit;
  -moz-transition-duration: inherit;
  -webkit-transition-duration: inherit;
  transition-duration:inherit;
  -o-transition-timing-function: inherit;
  -moz-transition-timing-function: inherit;
  -webkit-transition-timing-function: inherit;
  transition-timing-function:inherit;
}
.bbslider-wrapper.loop-false.first-panel .prev-control-wrapper {
  display:none !important;
}
.bbslider-wrapper.loop-false.last-panel .next-control-wrapper {
  display:none;
}
.bbslider-wrapper.carousel > .panel {
  overflow:hidden;
}
.bbslider-wrapper > .panel.fade {
  display:none;
}
.bbslider-wrapper > .panel.fade {
  -o-transition-property: opacity;
  -moz-transition-property: opacity;
  -webkit-transition-property: opacity;
  transition-property:opacity;
  opacity:0;
}
.bbslider-wrapper.carousel > .panel.fade {
  opacity:0;
  display:block;
}
.bbslider-wrapper > .panel.slide {
  -o-transition-property: transform;
  -moz-transition-property: transform;
  -webkit-transition-property: transform;
  transition-property:transform;
  display:block;
}
.bbslider-wrapper > .panel.slideVert {
  -o-transition-property: transform;
  -moz-transition-property: transform;
  -webkit-transition-property: transform;
  transition-property:transform;
  display:block;
}
.bbslider-wrapper > .panel.blind {
  overflow:hidden;
  position:absolute;
  height:100%;
  width:0;
}
.bbslider-wrapper > .panel.blind > .panel-inner {
  position:absolute;
}
.bbslider-wrapper > .panel.blind,
.bbslider-wrapper > .panel.blind .panel-inner {
  -o-transition-property: left, right, margin, width;
  -moz-transition-property: left, right, margin, width;
  -webkit-transition-property: left, right, margin, width;
  transition-property:left, right, margin, width;
}
.bbslider-wrapper.carousel > .panel.slide {
  -o-transition-property: left;
  -moz-transition-property: left;
  -webkit-transition-property: left;
  transition-property:left;
}
.bbslider-wrapper > .panel.none {
  display:none;
}
.bbslider-wrapper > .panel.none.active {
  display:block;
}
.bbslider-wrapper.carousel > .panel.none {
  position:absolute;
  display:block;
}



/* Custom easing transitions */

.bbslider-wrapper.ease > .panel {
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
}
.bbslider-wrapper.ease-in > .panel {
  -webkit-transition-timing-function: ease-in;
  -moz-transition-timing-function: ease-in;
  -o-transition-timing-function: ease-in;
  transition-timing-function: ease-in;
}
.bbslider-wrapper.ease-out > .panel {
  -webkit-transition-timing-function: ease-out;
  -moz-transition-timing-function: ease-out;
  -o-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.bbslider-wrapper.ease-in-out > .panel {
  -webkit-transition-timing-function: ease-in-out;
  -moz-transition-timing-function: ease-in-out;
  -o-transition-timing-function: ease-in-out;
  transition-timing-function: ease-in-out;
}
.bbslider-wrapper.linear > .panel {
  -webkit-transition-timing-function: linear;
  -moz-transition-timing-function: linear;
  -o-transition-timing-function: linear;
  transition-timing-function: linear;
}
.bbslider-wrapper.easeInQuad > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.550, 0.085, 0.680, 0.530);
  -moz-transition-timing-function: cubic-bezier(0.550, 0.085, 0.680, 0.530);
  -o-transition-timing-function: cubic-bezier(0.550, 0.085, 0.680, 0.530);
  transition-timing-function: cubic-bezier(0.550, 0.085, 0.680, 0.530);
}
.bbslider-wrapper.easeInCubic > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  -moz-transition-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  -o-transition-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  transition-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
}
.bbslider-wrapper.easeInQuart > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.895, 0.030, 0.685, 0.220);
  -moz-transition-timing-function: cubic-bezier(0.895, 0.030, 0.685, 0.220);
  -o-transition-timing-function: cubic-bezier(0.895, 0.030, 0.685, 0.220);
  transition-timing-function: cubic-bezier(0.895, 0.030, 0.685, 0.220);
}
.bbslider-wrapper.easeInQuint > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  -moz-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  -o-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
}
.bbslider-wrapper.easeInSine > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.470, 0.000, 0.745, 0.715);
  -moz-transition-timing-function: cubic-bezier(0.470, 0.000, 0.745, 0.715);
  -o-transition-timing-function: cubic-bezier(0.470, 0.000, 0.745, 0.715);
  transition-timing-function: cubic-bezier(0.470, 0.000, 0.745, 0.715);
}
.bbslider-wrapper.easeInExpo > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.950, 0.050, 0.795, 0.035);
  -moz-transition-timing-function: cubic-bezier(0.950, 0.050, 0.795, 0.035);
  -o-transition-timing-function: cubic-bezier(0.950, 0.050, 0.795, 0.035);
  transition-timing-function: cubic-bezier(0.950, 0.050, 0.795, 0.035);
}
.bbslider-wrapper.easeInCirc > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.600, 0.040, 0.980, 0.335);
  -moz-transition-timing-function: cubic-bezier(0.600, 0.040, 0.980, 0.335);
  -o-transition-timing-function: cubic-bezier(0.600, 0.040, 0.980, 0.335);
  transition-timing-function: cubic-bezier(0.600, 0.040, 0.980, 0.335);
}
.bbslider-wrapper.easeInBack > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.600, -0.280, 0.735, 0.045);
  -moz-transition-timing-function: cubic-bezier(0.600, -0.280, 0.735, 0.045);
  -o-transition-timing-function: cubic-bezier(0.600, -0.280, 0.735, 0.045);
  transition-timing-function: cubic-bezier(0.600, -0.280, 0.735, 0.045);
}
.bbslider-wrapper.easeOutQuad > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
  -moz-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
  -o-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
  transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
}
.bbslider-wrapper.easeOutCubic > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  -moz-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  -o-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
}
.bbslider-wrapper.easeOutQuart > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.165, 0.840, 0.440, 1.000);
  -moz-transition-timing-function: cubic-bezier(0.165, 0.840, 0.440, 1.000);
  -o-transition-timing-function: cubic-bezier(0.165, 0.840, 0.440, 1.000);
  transition-timing-function: cubic-bezier(0.165, 0.840, 0.440, 1.000);
}
.bbslider-wrapper.easeOutQuint > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.230, 1.000, 0.320, 1.000);
  -moz-transition-timing-function: cubic-bezier(0.230, 1.000, 0.320, 1.000);
  -o-transition-timing-function: cubic-bezier(0.230, 1.000, 0.320, 1.000);
  transition-timing-function: cubic-bezier(0.230, 1.000, 0.320, 1.000);
}
.bbslider-wrapper.easeOutSine > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.390, 0.575, 0.565, 1.000);
  -moz-transition-timing-function: cubic-bezier(0.390, 0.575, 0.565, 1.000);
  -o-transition-timing-function: cubic-bezier(0.390, 0.575, 0.565, 1.000);
  transition-timing-function: cubic-bezier(0.390, 0.575, 0.565, 1.000);
}
.bbslider-wrapper.easeOutExpo > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -moz-transition-timing-function: cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -o-transition-timing-function: cubic-bezier(0.190, 1.000, 0.220, 1.000);
  transition-timing-function: cubic-bezier(0.190, 1.000, 0.220, 1.000);
}
.bbslider-wrapper.easeOutCirc > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.075, 0.820, 0.165, 1.000);
  -moz-transition-timing-function: cubic-bezier(0.075, 0.820, 0.165, 1.000);
  -o-transition-timing-function: cubic-bezier(0.075, 0.820, 0.165, 1.000);
  transition-timing-function: cubic-bezier(0.075, 0.820, 0.165, 1.000);
}
.bbslider-wrapper.easeOutBack > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.275);
  -moz-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.275);
  -o-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.275);
  transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.275);
}
.bbslider-wrapper.easeInOutQuad > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
  -moz-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
  -o-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
  transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
}
.bbslider-wrapper.easeInOutCubic > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
  -moz-transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
  -o-transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
  transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
}
.bbslider-wrapper.easeInOutQuart > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
  -moz-transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
  -o-transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
  transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1.000);
}
.bbslider-wrapper.easeInOutQuint > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.860, 0.000, 0.070, 1.000);
  -moz-transition-timing-function: cubic-bezier(0.860, 0.000, 0.070, 1.000);
  -o-transition-timing-function: cubic-bezier(0.860, 0.000, 0.070, 1.000);
  transition-timing-function: cubic-bezier(0.860, 0.000, 0.070, 1.000);
}
.bbslider-wrapper.easeInOutSine > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.445, 0.050, 0.550, 0.950);
  -moz-transition-timing-function: cubic-bezier(0.445, 0.050, 0.550, 0.950);
  -o-transition-timing-function: cubic-bezier(0.445, 0.050, 0.550, 0.950);
  transition-timing-function: cubic-bezier(0.445, 0.050, 0.550, 0.950);
}
.bbslider-wrapper.easeInOutExpo > .panel {
  -webkit-transition-timing-function: cubic-bezier(1.000, 0.000, 0.000, 1.000);
  -moz-transition-timing-function: cubic-bezier(1.000, 0.000, 0.000, 1.000);
  -o-transition-timing-function: cubic-bezier(1.000, 0.000, 0.000, 1.000);
  transition-timing-function: cubic-bezier(1.000, 0.000, 0.000, 1.000);
}
.bbslider-wrapper.easeInOutCirc > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
  -moz-transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
  -o-transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
  transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
}
.bbslider-wrapper.easeInOutBack > .panel {
  -webkit-transition-timing-function: cubic-bezier(0.680, -0.550, 0.265, 1.550);
  -moz-transition-timing-function: cubic-bezier(0.680, -0.550, 0.265, 1.550);
  -o-transition-timing-function: cubic-bezier(0.680, -0.550, 0.265, 1.550);
  transition-timing-function: cubic-bezier(0.680, -0.550, 0.265, 1.550);
}



.full{
  width: 100%;
  height: 100%;
}


/*body:before {
  content: "";
  height: 0px;
  padding: 0px;
  border: 10em solid #313440;
  position: absolute;
  left: 50%;
  top: 100%;
  z-index: 2;
  display: block;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-animation: puff 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;
  animation: puff 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;
}*/

h1,
h2 {
  font-weight: 500;
  margin: 0px 0px 5px 0px;
}

h1 {
  font-size: 25px;
}

h2 {
  font-size: 25px;
}

p {
  margin: 0px;
}

.profile-card {
  background: #25A187;
  width: 100% !important;
  height: 100% !important;
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 2;
  overflow: hidden;
  opacity: 0;
  margin-top: 70px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-border-radius: 50%;
  border-radius: 50%;
  /*-webkit-box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23);
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23);*/
  -webkit-animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;
  animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;
}

.profile-card header {
  width: 100%;
  height: 280px;
  padding: 40px 20px 30px 20px;
  display: inline-block;
  float: left;
  border-right: 2px dashed transparent;
  background: transparent;
  color: transparent;
  margin-top: 50px;
  opacity: 0;
  text-align: center;
  -webkit-animation: moveIn 1s 3.1s ease forwards;
  animation: moveIn 1s 3.1s ease forwards;
}

.profile-card header h1 {
  color: #FF5722;
}

.profile-card header a {
  display: inline-block;
  text-align: center;
  position: relative;
  margin: 25px 30px;
}

.profile-card header a:after {
  position: absolute;
  content: "";
  bottom: 3px;
  right: 3px;
  width: 20px;
  height: 20px;
  border: 4px solid transparent;
  -webkit-transform: scale(0);
  transform: scale(0);
  background: -webkit-linear-gradient(top, transparent 0%, transparent 50%, transparent 50%, transparent 100%);
  background: linear-gradient(transparent 0%, transparent 50%, transparent 50%, transparent 100%);
  -webkit-border-radius: 50%;
  border-radius: 50%;
  -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
  -webkit-animation: scaleIn 0.3s 3.5s ease forwards;
  animation: scaleIn 0.3s 3.5s ease forwards;
}

.profile-card header a > img {
  width: 120px;
  max-width: 100%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  -webkit-transition: -webkit-box-shadow 0.3s ease;
  transition: box-shadow 0.3s ease;
  -webkit-box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);
  box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);
}

.profile-card header a:hover > img {
  -webkit-box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1);
}

.profile-card .profile-bio {
  width: 175px;
  height: 180px;
  display: inline-block;
  float: right;
  padding: 50px 20px 30px 20px;
  background: transparent;
  color: #333333;
  margin-top: 50px;
  text-align: center;
  opacity: 0;
  -webkit-animation: moveIn 1s 3.1s ease forwards;
  animation: moveIn 1s 3.1s ease forwards;
}

.profile-social-links {
  width: 218px;
  display: inline-block;
  float: right;
  margin: 0px;
  padding: 15px 20px;
  background: transparent;
  margin-top: 50px;
  text-align: center;
  opacity: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-animation: moveIn 1s 3.1s ease forwards;
  animation: moveIn 1s 3.1s ease forwards;
}

.profile-social-links li {
  list-style: none;
  margin: -5px 0px 0px 0px;
  padding: 0px;
  float: left;
  width: 25%;
  text-align: center;
}

.profile-social-links li a {
  display: inline-block;
  color: red;
  width: 24px;
  height: 24px;
  padding: 6px;
  position: relative;
  overflow: hidden!important;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}

.profile-social-links li a i {
  position: relative;
  z-index: 1;
}

.profile-social-links li a img,
.profile-social-links li a svg {
  width: 24px;
}

@-webkit-keyframes init {
  0% {
    width: 0px;
    height: 0px;
  }
  100% {
    width: 56px;
    height: 56px;
    margin-top: 0px;
    opacity: 1;
  }
}

@keyframes init {
  0% {
    width: 0px;
    height: 0px;
  }
  100% {
    width: 56px;
    height: 56px;
    margin-top: 0px;
    opacity: 1;
  }
}

@-webkit-keyframes puff {
  0% {
    top: 100%;
    height: 0px;
    padding: 0px;
  }
  100% {
    top: 50%;
    height: 100%;
    padding: 0px 100%;
  }
}

@keyframes puff {
  0% {
    top: 100%;
    height: 0px;
    padding: 0px;
  }
  100% {
    top: 50%;
    height: 100%;
    padding: 0px 100%;
  }
}

@-webkit-keyframes borderRadius {
  0% {
    -webkit-border-radius: 50%;
  }
  100% {
    -webkit-border-radius: 0px;
  }
}

@keyframes borderRadius {
  0% {
    -webkit-border-radius: 50%;
  }
  100% {
    border-radius: 0px;
  }
}

@-webkit-keyframes moveDown {
  0% {
    top: 50%;
  }
  50% {
    top: 40%;
  }
  100% {
    top: 100%;
  }
}

@keyframes moveDown {
  0% {
    top: 50%;
  }
  50% {
    top: 40%;
  }
  100% {
    top: 100%;
  }
}

@-webkit-keyframes moveUp {
  0% {
    background: transparent;
    top: 100%;
  }
  50% {
    top: 40%;
  }
  100% {
    top: 50%;
    background: transparent;
  }
}

@keyframes moveUp {
  0% {
    background: transparent;
    top: 100%;
  }
  50% {
    top: 40%;
  }
  100% {
    top: 50%;
    background: transparent;
  }
}

@-webkit-keyframes materia {
  0% {
    background: transparent;
  }
  50% {
    -webkit-border-radius: 4px;
  }
  100% {
    width: 440px;
    height: 280px;
    background: transparent;
    -webkit-border-radius: 4px;
  }
}

@keyframes materia {
  0% {
    background: transparent;
  }
  50% {
    border-radius: 4px;
  }
  100% {
    width: 440px;
    height: 280px;
    background: transparent;
    border-radius: 4px;
  }
}

@-webkit-keyframes moveIn {
  0% {
    margin-top: 50px;
    opacity: 0;
  }
  100% {
    opacity: 1;
    margin-top: -20px;
  }
}

@keyframes moveIn {
  0% {
    margin-top: 50px;
    opacity: 0;
  }
  100% {
    opacity: 1;
    margin-top: -20px;
  }
}

@-webkit-keyframes scaleIn {
  0% {
    -webkit-transform: scale(0);
  }
  100% {
    -webkit-transform: scale(1);
  }
}

@keyframes scaleIn {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}

@-webkit-keyframes ripple {
  0% {
    transform: scale3d(0, 0, 0);
  }
  50%,
  100% {
    -webkit-transform: scale3d(1, 1, 1);
  }
  100% {
    opacity: 0;
  }
}

@keyframes ripple {
  0% {
    transform: scale3d(0, 0, 0);
  }
  50%,
  100% {
    transform: scale3d(1, 1, 1);
  }
  100% {
    opacity: 0;
  }
}

@media screen and (min-aspect-ratio: 4/3) {
  body {
    background-size: cover;
  }
  body:before {
    width: 0px;
  }
  @ -webkit-keyframes puff {
    0% {
      top: 100%;
      width: 0px;
      padding-bottom: 0px;
    }
    100% {
      top: 50%;
      width: 100%;
      padding-bottom: 100%;
    }
  }
  @keyframes puff {
    0% {
      top: 100%;
      width: 0px;
      padding-bottom: 0px;
    }
    100% {
      top: 50%;
      width: 100%;
      padding-bottom: 100%;
    }
  }
}

@media screen and (min-height: 480px) {
  .profile-card header {
    width: auto;
    height: auto;
    padding: 30px 20px;
    display: block;
    float: none;
    border-right: none;
  }
  .profile-card .profile-bio {
    width: auto;
    height: auto;
    padding: 15px 20px 30px 20px;
    display: block;
    float: none;
  }
  .profile-social-links {
    width: 100%;
    display: block;
    float: none;
  }
  @ -webkit-keyframes materia {
    0% {
      background: transparent;
    }
    50% {
      -webkit-border-radius: 4px;
    }
    100% {
      width: 280px;
      height: 440px;
      background: transparent;
      -webkit-border-radius: 4px;
    }
  }
  @keyframes materia {
    0% {
      background: transparent;
    }
    50% {
      border-radius: 4px;
    }
    100% {
      width: 100%;
      height: 80%;
      margin-left: 1em;
      margin-top: 1em;
      background: transparent;
      border-radius: 4px;
    }
  }
}
</style>


<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.bbslider.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {

  $('#default').bbslider();

  $('#auto').bbslider({
    auto: true,
    timer:3000,
    controls: true,
    loop:true,
    pauseOnHit:false
  });

  $('#pager').bbslider({
    pager:      true,
    pagerWrap:  '#pagination-wrapper',
    pageInfo:   true,
    infoWrap:   '#info-wrapper'
  });

  $('#controls').bbslider({
    controls: false,
    loop:     false
  });

  $('#none').bbslider({
    controls:   true,
    transition: 'none'
  });

  $('#fade').bbslider({
    controls:   true,
    transition: 'fade',
    duration:   1000
  });

  $('#slide').bbslider({
    controls:   true,
    transition: 'slide',
    duration:   1000
  });

  $('#slideVert').bbslider({
    controls:   true,
    transition: 'slideVert',
    duration:   1000
  });

  $('#blind').bbslider({
    controls:   true,
    transition: 'blind',
    duration:   1000
  });

  $('#carousel-none').bbslider({
    controls:     true,
    transition:   'none',
    carousel:     3,
    carouselMove: 2
  });

  $('#carousel-fade').bbslider({
    controls:     true,
    transition:   'fade',
    duration:     1000,
    carousel:     3,
    carouselMove: 2
  });

  $('#carousel-slide').bbslider({
    controls:     true,
    transition:   'slide',
    duration:     1000,
    carousel:     3,
    carouselMove: 2
  });

  var callBefore = function() {
    var pCount = $('#callback').data('pCount');
    var pIndex = $('#callback').data('pIndex');
    var panel  = pIndex + 1;
    $('#call-log').append('<p>Panel ' + panel + ' of ' + pCount + ' total panels has ended.</p>');
  };
  var callAfter = function() {
    var pCount = $('#callback').data('pCount');
    var pIndex = $('#callback').data('pIndex');
    var panel  = pIndex + 1;
    $('#call-log').append('<p>Panel ' + panel + ' of ' + pCount + ' total panels has started.</p>');
  };

  $('#callback').bbslider({
    controls: true,
    callbackBefore: callBefore,
    callbackAfter: callAfter
  });

  $('#update').bbslider({
    pager:     true,
    pagerWrap: '#update-pager',
    pageInfo:  true,
    infoWrap:  '#update-info',
    controls:  true
  });
  $('#add-slides').click(function(e) {
    var wrapper = $('#update');
    for (var i = 0; i < 10; i++) {
      wrapper.append('<div><img src="http://lorempixel.com/507/338/" alt="placeholder" width="507" height="338" /></div>');
    }
    e.preventDefault();
  });
  $('#update-slider').click(function(e) {
    $('#update').bbslider('update');
    e.preventDefault();
  });

  $('#touch').bbslider({
    controls:    false,
    touch:       true,
    transition:  'slide',
    touchoffset: 50
  });


  var rsz = function() {
    $('.bbslider-wrapper').bbslider('update');
  }; // end resize
  $(window).resize(rsz);
  $(window).on('load',rsz);
});
</script>