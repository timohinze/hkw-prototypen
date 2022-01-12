document.addEventListener('DOMContentLoaded',function(){

  let imageContainers = document.querySelectorAll('.add-blurry-bg')
    // Loop through all containers
    imageContainers.forEach((container, i) => {
    // find the original image
    let image = container.querySelector('img')
    //create a wrapper
    var wrapper = document.createElement('div');
    wrapper.classList.add('blurry-bg-img')
    // insert wrapper
    image.parentNode.insertBefore(wrapper, image);
    wrapper.appendChild(image);

    //add bg div
    var bg = document.createElement('div');
    bg.classList.add('blurry-bg');
    //insert in wrapper
    wrapper.prepend(bg);

    // copy img src
    let bgSrc = image.src;
    // set bg image for bg div
    bg.style.backgroundImage = 'url('+ bgSrc + ')';

  })

})
