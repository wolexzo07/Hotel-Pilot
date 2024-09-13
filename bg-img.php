	  <img src="img/bg1.jpg" data-src="img/bg1.jpg" class="lazyload d-none"/>
      <img src="img/bg2.jpg" data-src="img/bg2.jpg" class="lazyload d-none"/>
      <img src="img/2.jpg" data-src="img/2.jpg" class="lazyload d-none"/>
      <img src="img/3.jpg" data-src="img/3.jpg" class="lazyload d-none"/>
      <img src="img/4.jpg" data-src="img/4.jpg" class="lazyload d-none"/>
      <img src="img/5.jpg" data-src="img/5.jpg" class="lazyload d-none"/>
      <img src="img/6.jpg" data-src="img/6.jpg" class="lazyload d-none"/>

      <script>
        // Array of image URLs
            const images = [
                'img/bg1.jpg',
                'img/bg2.jpg',
                'img/2.jpg',
                'img/3.jpg',
                'img/4.jpg',
                'img/5.jpg',
                'img/6.jpg',
                // Add more image URLs as needed
            ];

            // Counter to keep track of the current image index
            let currentIndex = 0;

            // Function to change background image
            function changeBackgroundImage() {
                document.body.style.backgroundImage = `url(${images[currentIndex]})`;
                
                // Update index for next image
                currentIndex = (currentIndex + 1) % images.length;
            }

            // Change background image every 5 seconds
            setInterval(changeBackgroundImage, 10000);

            // Initial call to set the first image
            changeBackgroundImage();

      </script>