(()=> {
    fetch('./data/AboutData.json')
    .then(res => res.json())
    .then(data => {

        aboutpage(data);
        debugger;
    })

    function aboutpage(data){
        let aboutTitle = document.querySelector('.AboutmeTitle p'),
            aboutText = document.querySelector('.AboutmeText p');

            aboutTitle.innerHTML = data.title;
            aboutText.innerHTML = data.text[0] + "<br><br>" + data.text[1];
    }


})();