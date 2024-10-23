document.addEventListener('DOMContentLoaded',() => {
    const title = document.querySelector('#title h1');
    const titleKeyframes = {
        opacity:[0 ,1],
    };
    const titleOptions = {
        duration: 2000,
        easing: 'ease-in',
        fill: 'forwards',
    };
    title.animate(titleKeyframes, titleOptions);
    
    const blue = document.querySelector('#blue-screen');
    const bluekeyframes = {
        transform: ['translate(0, 100vh)' , 'translate(0, 0)', 'translate(0, -100vh)'],
    };
    const blueOptions = {
        duration: 2000,
        
        easing: 'ease',
        fill: 'forwards',
    };
    blue.animate(bluekeyframes, blueOptions);

    const gray = document.querySelector('#gray-screen');
    const graykeyframes = {
        transform: ['translate(100vw, 0)' , 'translate(0, 0)', 'translate(-100vw, 0)'],
    };
    const grayOptions = {
        duration: 2000,
        
        easing: 'ease',
        fill: 'forwards',
    };
    gray.animate(graykeyframes, grayOptions);
});
