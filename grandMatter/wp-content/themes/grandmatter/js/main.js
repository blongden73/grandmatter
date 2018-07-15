var hamburger = document.getElementsByClassName('grand-matter__hamburger');
var menu = document.getElementsByClassName('grand-matter__menu');
var splash = document.getElementsByClassName('grand-matter__image');
var splashContainer = document.getElementsByClassName('grand-matter__splash');
var homeCheck = document.querySelector('.grand-matter__image');
var header = document.querySelector('.grand-matter__header');
var artistTitle = document.querySelector('.grand-matter__artist-title');

//artist page
var artistPageCheck = document.querySelector('.grand-matter__artist-featured');
var artistImage = document.getElementsByClassName('grand-matter__portfolio-image');
var lightbox = document.querySelector('.grand-matter__lightbox');
var lightboxClose = document.querySelector('.grand-matter__lightbox-close');
var artistContent = document.querySelector('.grand-matter__artist-content');
var lightboxCheck = document.getElementsByClassName('grand-matter__lightbox-image');
var shareButton = document.querySelector('.sd-content');

var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;

var isiPad = navigator.userAgent.match(/iPad/i) != null;
var ipadWidth = screen.width;

var google = '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><g fill="#DB5442"><path d="M12.75 8.767c-1.27-.037-2.123 1.24-1.902 2.908.22 1.67 1.427 2.836 2.698 2.875 1.27.037 2-1.037 1.782-2.707-.22-1.668-1.307-3.037-2.577-3.076zM13.285 17.966c-1.895-.02-3.5 1.195-3.5 2.607 0 1.44 1.37 2.64 3.263 2.64 2.663 0 3.59-1.126 3.59-2.567 0-.174-.02-.344-.06-.508-.21-.814-1.037-1.262-2.066-1.977-.373-.12-.785-.19-1.227-.194z"/><path d="M16 0C7.164 0 0 7.164 0 16c0 8.838 7.164 16 16 16s16-7.162 16-16c0-8.836-7.164-16-16-16zm1.223 11.773c0 1.043-.578 1.883-1.393 2.52-.797.623-.947.883-.947 1.412 0 .45.95 1.123 1.39 1.45 1.52 1.144 1.83 1.862 1.83 3.29 0 1.783-1.92 3.555-5.043 3.555-2.74 0-5.053-1.113-5.053-2.896 0-1.81 1.918-3.695 4.658-3.695.3 0 .572-.01.855-.01-.375-.362-.678-.677-.678-1.228 0-.328.104-.64.25-.92-.148.01-.3.02-.457.02-2.25 0-3.562-1.582-3.562-3.564C9.073 9.765 11.068 8 13.46 8h4.716l-1.053 1.107h-1.24c.876.5 1.34 1.53 1.34 2.666zm6.772-.29H21.82v2.173h-1.09v-2.174h-2.175v-1.088h2.176V8.218h1.09v2.176h2.175v1.088z"/></g></svg>';
var twitter = '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="#2AA9E0" d="M16 0C7.164 0 0 7.164 0 16c0 8.838 7.164 16 16 16s16-7.162 16-16c0-8.836-7.164-16-16-16zm6.362 12.738c.008.14.01.28.01.424 0 4.338-3.3 9.34-9.34 9.34-1.853 0-3.578-.543-5.03-1.475.257.03.518.045.782.045 1.54 0 2.953-.523 4.076-1.404-1.436-.027-2.648-.977-3.065-2.28.2.038.405.06.617.06.3 0 .59-.04.864-.115-1.5-.303-2.633-1.63-2.633-3.22v-.04c.443.246.95.393 1.487.41-.88-.588-1.46-1.594-1.46-2.732 0-.6.162-1.165.444-1.65 1.618 1.987 4.038 3.294 6.766 3.43-.056-.24-.085-.49-.085-.747 0-1.812 1.47-3.28 3.284-3.28.942 0 1.796.397 2.394 1.034.748-.146 1.45-.42 2.086-.797-.246.768-.766 1.41-1.443 1.816.664-.078 1.297-.256 1.885-.516-.44.657-.998 1.235-1.64 1.698z"/></svg>';
var facebook = '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="#36609F" d="M16 0C7.164 0 0 7.164 0 16c0 8.837 7.164 16 16 16s16-7.162 16-16c0-8.836-7.164-16-16-16zm3.428 16.006h-2.242V24h-3.323v-7.994h-1.58v-2.824h1.58v-1.828c0-1.31.62-3.354 3.352-3.354l2.46.01v2.742h-1.784c-.29 0-.704.145-.704.77v1.66h2.533l-.292 2.824z"/></svg>';

hamburger[0].addEventListener('click', function(){
  this.classList.toggle('clicked');
  menu[0].classList.toggle('clicked');
});

document.addEventListener('scroll', function(){
  var artists = document.getElementsByClassName('grand-matter__artists');
  if(artists.length >= 1){
    var artistTop = artists[0].getBoundingClientRect().top;
  }
  var artistContent = document.querySelector('.grand-matter__artist-content');
  if(artistContent){
    var artistContentTop = artistContent.getBoundingClientRect().top;
  }
  if(artists.length >= 1 && artistTop <= 100 || artistContent && artistContentTop <= 100){
    header.classList.add('blue');
  }else {
    header.classList.remove('blue');
  }
  if(artists.length >= 1 && artistTop <= -120 && !isMobile) {
    artistTitle.classList.add('fixed');
  }else if(artists.length >= 1 && artistTop >= -120 && !isMobile) {
    artistTitle.classList.remove('fixed');
  }
});

function backgroundImage(){
  var rand = Math.floor(Math.random() * (splash.length - 0)) + 0;
  var image = splash[rand].dataset.image;
  splash[rand].style.backgroundImage = "url('" + image + "')";
  splash[rand].style.display = "block";
};

function animation(){
  var animationSlide = document.getElementsByClassName('grand-matter__slide');
  var animationContainer = document.getElementsByClassName('grand-matter__animation');
  var anim = setInterval(function(){ slides() }, 500);
  var int = 0;
  function slides(){
    animationSlide[int].classList.add('visible');
    int ++;
    if(int >= animationSlide.length) {
      animationContainer[0].classList.add('fadeOut');
      splashContainer[0].classList.add('fadeIn');
      clearInterval(anim);
    }
  }
}

function carousel(el){
  var img;
  var rightArrow = document.querySelector('.grand-matter__lightbox-right');
  var leftArrow = document.querySelector('.grand-matter__lightbox-left');
  img = el;
  rightArrow.addEventListener('click', function(){
    if(img < (lightboxCheck.length - 1)){
      img ++;
      document.querySelector('.grand-matter__lightbox-image.visible').classList.remove('visible');
      document.getElementsByClassName('grand-matter__lightbox-image')[img].classList.add('visible');
    }else {
      rightArrow.classList.add('hide');
    }
  });
  leftArrow.addEventListener('click', function(){
    if(img <= lightboxCheck.length && img > 0){
      img --;
      document.querySelector('.grand-matter__lightbox-image.visible').classList.remove('visible');
      document.getElementsByClassName('grand-matter__lightbox-image')[img].classList.add('visible');
    } else {
      leftArrow.classList.add('hide');
    }
  });
}

function artistLightBox() {
  var images = [];
  var imageNum;
  for(i=0; i < artistImage.length; i++){
    images.push(artistImage[i].dataset.url);
    artistImage[i].setAttribute('data-index', i);
    artistImage[i].addEventListener('click', function(){
      imageNum = this.dataset.index;
      lightbox.classList.add('clicked');
      var l = "";
      for(k=0; k < images.length; k++) {
        var li = '<li class="grand-matter__lightbox-image"><img src="' + images[k] + '"></li>';
        l += li;
      }
      if(lightboxCheck.length < 1){
        var imageContainer = document.createElement('div');
        imageContainer.setAttribute('class', 'grand-matter__lightbox-container gm-container pad');
        imageContainer.innerHTML = l;
        lightbox.append(imageContainer);
      }
      document.getElementsByClassName('grand-matter__lightbox-image')[imageNum].setAttribute('class', 'grand-matter__lightbox-image visible');
      carousel(imageNum);
    });
  }
  lightboxClose.addEventListener('click', function(){
    lightbox.classList.remove('clicked');
  })
}

function socialEnhance() {
  document.querySelector('.share-twitter.sd-button').innerHTML = twitter;
  document.querySelector('.share-facebook.sd-button').innerHTML = facebook;
  document.querySelector('.share-google-plus-1.sd-button').innerHTML = google;
  document.querySelector('.sd-title').innerHTML = 'Share';
}

function init() {
  if(homeCheck){
    backgroundImage();
    if(!isMobile){
      animation();
    }
    if(isiPad && ipadWidth >= 1024){
        animation();
    }
  }
  if(artistPageCheck && !isMobile){
    artistLightBox();
  }
  if(shareButton) {
    socialEnhance();
  }
}

init();
