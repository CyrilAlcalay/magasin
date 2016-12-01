<?php

?>
<html>
<head>
<meta charset="UTF-8">
<meta description>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--debut slider-->
    
    <link rel="shortcut icon" href="../favicon.ico"> 
	<link rel="stylesheet" type="text/css" href="Elastislide/css/elastislide.css" />
	<link rel="stylesheet" type="text/css" href="Elastislide/css/custom.css" />
	<script src="Elastislide/js/modernizr.custom.17475.js"></script>
    
    <!--fin slider-->
    
     <!-- Débus gallerie bonus -->
    <link rel="stylesheet" type="text/css" href="GammaGallery-master/css/style.css"/>
    <script src="GammaGallery-master/js/modernizr.custom.70736.js"></script>
    <noscript><link rel="stylesheet" type="text/css" href="GammaGallery-master/css/noJS.css"/></noscript>
    <!-- fin gallerie bonus-->

    <link href="font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="jquery.mosaic.css"/>
    
    <link rel="stylesheet" type="text/css" href="ImageGridEffects/css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="ImageGridEffects/css/demo.css"/>
	<link rel="stylesheet" type="text/css" href="ImageGridEffects/css/style1.css"/>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
     <link rel="stylesheet" href="style.css">
	<script src="js/modernizr-custom.js"></script>
    
    
    
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="js/javascript.js"></script>
    <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    
    <style>#codrops-ad-wrapper{z-index:9999 !important;}</style>
    
</head>
    
<body>
   
<div id="objets">
    <div id="xVal">X: <span>0</span></div>
    <div id="yVal">Y: <span>0</span></div>
    <div id="zVal">Z: <span>0</span></div>
    <div id="latVal">Lat: <span>0</span></div>
    <div id="longVal">Long: <span>0</span></div>
    <div id="error"></div>
</div>
    
    <div id="info">
        <a href="#positionWindow" class="biblio" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" data-rel="popup" data-position-to="window"><i class="fa fa-info-circle"></i></a>
    </div>

 
    
    
<nav>
    <ul class="menuprincipal">
        
        <li><a href="#positionWindow1" class="biblio" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" data-rel="popup" data-position-to="window"><i class="fa fa-clone" fa-3x></i><br>Bibliothèque</a></li>
        
        <li><a href="#positionWindow2" class="bonus" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" data-rel="popup" data-position-to="window"><i class="fa fa-folder-open" fa-3x></i><br>Bonus</a></li>
        
        <li><a href="#positionWindow3" class="tuto" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" data-rel="popup" data-position-to="window"><i class="fa fa-cubes" fa-3x></i><br>Tutoriel</a></li>
        
        <li><a href="http://www.magasin-cnac.org/" class="mag" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" data-rel="popup" data-position-to="window"><i class="fa fa-laptop" fa-3x></i><br>Le Magasin</a></li>
        
        <li><a href="#positionWindow5" class="partage" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" data-rel="popup" data-position-to="window"><i class="fa fa-share-alt"></i><br> Partager</a></li>
    </ul>
</nav>  

    <!--div data-role="popup" id="positionWindow" class="ui-content" data-theme="biblio">
      <p>
        <ul>
          <li>
            <a class="facebook customer share" href="http://www.facebook.com/sharer https://www.facebook.com/sarah.chouchougnette" title="Facebook" target="_blank">Facebook</a>
          </li>
          <li>
            <a class="twitter customer share" href="http://twitter.com/share?url=http://codepen.io/patrickkahl&amp;text=Share popup on &amp;hashtags=codepen" title="Twitter share" target="_blank">Twitter</a>
          </li>
          <li>
            <a class="google_plus customer share" href="https://plus.google.com/share?url=http://codepen.io/patrickkahl" title="Google Plus Share" target="_blank">Google Plus</a>
          </li>
          <li>
            <a class="xing customer share" href="https://www.xing.com/social_plugins/share?url=http://codepen.io/patrickkahl" title="Xing Share" target="_blank">Xing</a>
          </li>
          <li>
            <a class="linkedin customer share" href="http://www.linkedin.com/shareArticle?mini=true&url=http://codepen.io/patrickkahl" title="linkedin Share" target="_blank">LinkedIn</a>
          </li>
        </ul>
        </p>
    </div-->
    
    <div data-role="popup" id="positionWindow" data-rel="back" class="ui-content" data-theme="bonus">
        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
        <p>
            <div><?php echo item2; ?></div>
        </p>
    </div>
    
     <div data-role="popup" id="positionWindow1" data-rel="back" class="ui-content" data-theme="bonus">
        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
        <p>
            <?php include 'slider.php'; ?>
            <!--<div>
                <h1>condition générales d'utilisation</h1>
            </div>-->
            
        </p>
    </div>
    
    <div data-role="popup" id="positionWindow2" data-rel="back" class="ui-content" data-theme="bonus">
        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
        <p>
            <?php include 'bonus2.php'; ?>
            <!--<div>
                <h1>condition générales d'utilisation</h1>
            </div>-->
            
        </p>
    </div>
    
    
        <!--div class="content">
			<div class="grid">
				<div class="grid__item" data-size="1280x853">
					<a href="img/original/1.jpg" class="img-wrap"><img src="images/DSC07598.JPG" alt="img01" />
						<div class="description description--grid">Assemblage</div>
					</a>
				</div>
				<div class="grid__item" data-size="958x1280">
					<a href="img/original/2.jpg" class="img-wrap"><img src="images/DSC07599.JPG" alt="img02" />
						<div class="description description--grid">Demesne</div>
					</a>
				</div>
				<div class="grid__item" data-size="837x1280">
					<a href="img/original/3.jpg" class="img-wrap"><img src="images/DSC07600.JPG" alt="img03" />
						<div class="description description--grid">Felicity</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x961">
					<a href="img/original/4.jpg" class="img-wrap"><img src="images/DSC07601.JPG" alt="img04" />
						<div class="description description--grid">Propinquity</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1131">
					<a href="img/original/5.jpg" class="img-wrap"><img src="images/DSC07602.JPG" alt="img05" />
						<div class="description description--grid">Ephemeral</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x857">
					<a href="img/original/6.jpg" class="img-wrap"><img src="images/DSC07603.JPG" alt="img06" />
						<div class="description description--grid">Surreptitious</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1280">
					<a href="img/original/7.jpg" class="img-wrap"><img src="images/DSC07604.JPG" alt="img07" />
						<div class="description description--grid">Scintilla</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x853">
					<a href="img/original/8.jpg" class="img-wrap"><img src="img/thumbs/8.jpg" alt="img08" />
						<div class="description description--grid">Vestigial</div>
					</a>
				</div>
				<div class="grid__item" data-size="865x1280">
					<a href="img/original/9.jpg" class="img-wrap"><img src="img/thumbs/9.jpg" alt="img09" />
						<div class="description description--grid">Zephyr</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1280">
					<a href="img/original/10.jpg" class="img-wrap"><img src="img/thumbs/10.jpg" alt="img10" />
						<div class="description description--grid">Desideratum</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x850">
					<a href="img/original/11.jpg" class="img-wrap"><img src="img/thumbs/11.jpg" alt="img11" />
						<div class="description description--grid">Quixotic</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x853">
					<a href="img/original/1.jpg" class="img-wrap"><img src="img/thumbs/1.jpg" alt="img01" />
						<div class="description description--grid">Assemblage</div>
					</a>
				</div>
				<div class="grid__item" data-size="958x1280">
					<a href="img/original/2.jpg" class="img-wrap"><img src="img/thumbs/2.jpg" alt="img02" />
						<div class="description description--grid">Demesne</div>
					</a>
				</div>
				<div class="grid__item" data-size="837x1280">
					<a href="img/original/3.jpg" class="img-wrap"><img src="img/thumbs/3.jpg" alt="img03" />
						<div class="description description--grid">Felicity</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x961">
					<a href="img/original/4.jpg" class="img-wrap"><img src="img/thumbs/4.jpg" alt="img04" />
						<div class="description description--grid">Propinquity</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1131">
					<a href="img/original/5.jpg" class="img-wrap"><img src="img/thumbs/5.jpg" alt="img05" />
						<div class="description description--grid">Ephemeral</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x857">
					<a href="img/original/6.jpg" class="img-wrap"><img src="img/thumbs/6.jpg" alt="img06" />
						<div class="description description--grid">Surreptitious</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1280">
					<a href="img/original/7.jpg" class="img-wrap"><img src="img/thumbs/7.jpg" alt="img07" />
						<div class="description description--grid">Scintilla</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x853">
					<a href="img/original/8.jpg" class="img-wrap"><img src="img/thumbs/8.jpg" alt="img08" />
						<div class="description description--grid">Vestigial</div>
					</a>
				</div>
				<div class="grid__item" data-size="865x1280">
					<a href="img/original/9.jpg" class="img-wrap"><img src="img/thumbs/9.jpg" alt="img09" />
						<div class="description description--grid">Zephyr</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1280">
					<a href="img/original/10.jpg" class="img-wrap"><img src="img/thumbs/10.jpg" alt="img10" />
						<div class="description description--grid">Desideratum</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x850">
					<a href="img/original/11.jpg" class="img-wrap"><img src="/img/thumbs/11.jpg" alt="img11" />
						<div class="description description--grid">Quixotic</div>
					</a>
				</div>
			</div-->
			<!-- /grid -->
			<div class="preview">
				<button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
				<div class="description description--preview"></div>
			</div>
			<!-- /preview -->
		</div>
    </p></div>

    <div data-role="popup" id="positionWindow2" class="ui-content" data-theme="bonus">
        <p>And again and again and again positioned to the window.</p>
    </div>
 
    <button id="startbutton"><i class="fa fa-camera" aria-hidden="true"></i>
</button>
    <video id="video" width="100%" height="100%" autoplay ></video>
 
    <div class="output">
    <img id="photo" alt="The screen capture will appear in this box."> 
    </div>	
    <canvas id="canvas">

  
    
</canvas>
</div>
 
    
</body>


<!--<script> $(function() {
	$(window).load(function() {
		$('#gallery-container').snapGallery();
	});
})
</script>-->
<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	<script>
		(function() {
			// create SVG circle overlay and append it to the preview element
			function createCircleOverlay(previewEl) {
				var dummy = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
				dummy.setAttributeNS(null, 'version', '1.1');
				dummy.setAttributeNS(null, 'width', '100%');
				dummy.setAttributeNS(null, 'height', '100%');
				dummy.setAttributeNS(null, 'class', 'overlay');
				var g = document.createElementNS('http://www.w3.org/2000/svg', 'g');
				var circle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
				circle.setAttributeNS(null, 'cx', 0);
				circle.setAttributeNS(null, 'cy', 0);
				circle.setAttributeNS(null, 'r', Math.sqrt(Math.pow(previewEl.offsetWidth,2) + Math.pow(previewEl.offsetHeight,2)));
				dummy.appendChild(g);
				g.appendChild(circle);
				previewEl.appendChild(dummy);
			}
			
			new GridFx(document.querySelector('.grid'), {
				onInit : function(instance) {
					createCircleOverlay(instance.previewEl);
				},
				onResize : function(instance) {
					instance.previewEl.querySelector('svg circle').setAttributeNS(null, 'r', Math.sqrt(Math.pow(instance.previewEl.offsetWidth,2) + Math.pow(instance.previewEl.offsetHeight,2)));
				},
				onOpenItem : function(instance, item) {
					// item's image
					var gridImg = item.querySelector('img'),
						gridImgOffset = gridImg.getBoundingClientRect(),
						win = {width: document.documentElement.clientWidth, height: window.innerHeight},
						SVGCircleGroupEl = instance.previewEl.querySelector('svg > g'),
						SVGCircleEl = SVGCircleGroupEl.querySelector('circle');
						
					SVGCircleEl.setAttributeNS(null, 'r', Math.sqrt(Math.pow(instance.previewEl.offsetWidth,2) + Math.pow(instance.previewEl.offsetHeight,2)));
					// set the transform for the SVG g node. This will animate the circle overlay. The origin of the circle depends on the position of the clicked item.
					if( gridImgOffset.left + gridImg.offsetWidth/2 < win.width/2 ) {
						SVGCircleGroupEl.setAttributeNS(null, 'transform', 'translate(' + win.width + ', ' + (gridImgOffset.top + gridImg.offsetHeight/2 < win.height/2 ? win.height : 0) + ')');
					}
					else {
						SVGCircleGroupEl.setAttributeNS(null, 'transform', 'translate(0, ' + (gridImgOffset.top + gridImg.offsetHeight/2 < win.height/2 ? win.height : 0) + ')');
					}
				}
			});
		})();
	</script>
<!-- Take Picture -->
<script>(function() {
  // The width and height of the captured photo. We will set the
  // width to the value defined here, but the height will be
  // calculated based on the aspect ratio of the input stream.

  var width = 320;    // We will scale the photo width to this
  var height = 0;     // This will be computed based on the input stream

  // |streaming| indicates whether or not we're currently streaming
  // video from the camera. Obviously, we start at false.

  var streaming = false;

  // The various HTML elements we need to configure or control. These
  // will be set by the startup() function.

  var video = null;
  var canvas = null;
  var photo = null;
  var startbutton = null;

  function startup() {
    video = document.getElementById('video');
    canvas = document.getElementById('canvas');
    photo = document.getElementById('photo');
    startbutton = document.getElementById('startbutton');

    navigator.getMedia = ( navigator.getUserMedia ||
                           navigator.webkitGetUserMedia ||
                           navigator.mozGetUserMedia ||
                           navigator.msGetUserMedia);

    navigator.getMedia(
      {
        video: true,
        audio: false
      },
      function(stream) {
        if (navigator.mozGetUserMedia) {
          video.mozSrcObject = stream;
        } else {
          var vendorURL = window.URL || window.webkitURL;
          video.src = vendorURL.createObjectURL(stream);
        }
        video.play();
      },
      function(err) {
        console.log("An error occured! " + err);
      }
    );

    video.addEventListener('canplay', function(ev){
      if (!streaming) {
        height = video.videoHeight / (video.videoWidth/width);
      
        // Firefox currently has a bug where the height can't be read from
        // the video, so we will make assumptions if this happens.
      
        if (isNaN(height)) {
          height = width / (4/3);
        }
      
        video.setAttribute('width', width);
        video.setAttribute('height', height);
        canvas.setAttribute('width', width);
        canvas.setAttribute('height', height);
        streaming = true;
      }
    }, false);

    startbutton.addEventListener('click', function(ev){
      takepicture();
      ev.preventDefault();
    }, false);
    
    clearphoto();
  }

  // Fill the photo with an indication that none has been
  // captured.

  function clearphoto() {
    var context = canvas.getContext('2d');
    context.fillStyle = "#AAA";
    context.fillRect(0, 0, canvas.width, canvas.height);

    var data = canvas.toDataURL('image/png');
    photo.setAttribute('src', data);
  }
  
  // Capture a photo by fetching the current contents of the video
  // and drawing it into a canvas, then converting that to a PNG
  // format data URL. By drawing it on an offscreen canvas and then
  // drawing that to the screen, we can change its size and/or apply
  // other changes before drawing it.

  function takepicture() {
    var context = canvas.getContext('2d');
    if (width && height) {
      canvas.width = width;
      canvas.height = height;
      context.drawImage(video, 0, 0, width, height);
    
      var data = canvas.toDataURL('image/png');
      photo.setAttribute('src', data);
    } else {
      clearphoto();
    }
  }

  // Set up our event listener to run the startup process
  // once loading is complete.
  window.addEventListener('load', startup, false);
})();</script>

</html>

    
<!--a href="informations"><i class="fa fa-info-circle" aria-hidden="true"></i></a>  
    
<nav>
    <ul>
     <li><i class="fa fa-th-list" aria-hidden="true"></i></li>
     <li><i class="fa fa-folder-open" aria-hidden="true"></i></li>
     <li><i class="fa fa-clone" aria-hidden="true"></i></li>
     <li><i class="fa fa-cubes" aria-hidden="true"></i></li>
     <li><i class="<i class="fa fa-question-circle" aria-hidden="true"></i>
"></i></li>
    </ul>
</nav-->
    <!--lightbox <li><i class="fa fa-facebook-official"></li>
                    <li>Twitter</li>
                    <li>E-mail</li> -->

<!--
<ul id="gallery-container">
            <li><img src="images/DSC07610.jpg"/></li>
            <li><img src="images/DSC07609.jpg"/></li>
            <li><img src="images/DSC07642.jpg"/></li>
            <li><img src="images/DSC07638.jpg"/></li>
            <li><img src="./path/to/img22.jpg"/></li>
        </ul>-->