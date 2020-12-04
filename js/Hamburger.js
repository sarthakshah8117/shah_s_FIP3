const navToogle = document.querySelector('.nav-toggle');
const navLinks = document.querySelectorAll('.nav_link')

navToogle.addEventListener('click', () => {
    document.body.classList.toggle('nav-open');
});

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        document.body.classList.remove('nav-open');
    })
})
















// (()=> {
//     fetch('./data/AboutData.json')
//     .then(res => res.json())
//     .then(data => {

//         aboutpage(data);
//         debugger;
//     })

//     function aboutpage(data){
//         let aboutTitle = document.querySelector('.AboutmeTitle p'),
//             aboutText = document.querySelector('.AboutmeText p');

//             aboutTitle.innerHTML = data.title;
//             aboutText.innerHTML = data.text[0] + "<br><br>" + data.text[1];
//     }


// })();