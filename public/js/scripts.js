var typed = new Typed('.typing', {
    strings: ['', 'Web Designer', 'Web Developer', 'Graphic Designer', 'Video Editor'],
    typeSpeed: 100,
    BackSpeed: 80,
    loop: true
});

const nav = document.querySelectorAll('.nav'),
    navList = document.querySelectorAll('li'),
    totalNavList = navList.length,
    allSection = document.querySelectorAll('.section'),
    totalSection = allSection.length;

for (let i = 0; i < totalNavList; i++) {
    const a = navList[i].querySelector('a');
    a.addEventListener('click', function() {

        for (let i = 0; i < totalSection; i++) {
            allSection[i].classList.remove('back-section');
        }

        for (let j = 0; j < totalNavList; j++) {
            if (navList[j].querySelector('a').classList.contains('active')) {
                allSection[j].classList.add('back-section');
            }
            navList[j].querySelector('a').classList.remove('active');
        }
        this.classList.add('active');
        showSection(this);
        if (window.innerWidth < 1299) {
            assideSectionTogglerBtn();
        }
    });
}

function showSection(element) {

    for (let i = 0; i < totalSection; i++) {
        allSection[i].classList.remove('active');
    }

    const target = element.getAttribute('href').split('#')[1];
    document.querySelector("#" + target).classList.add('active');

}

const navTogglerBtn = document.querySelector('.nav-toggler'),
    asside = document.querySelector('.asside');
navTogglerBtn.addEventListener('click', () => {
    assideSectionTogglerBtn();
});

function assideSectionTogglerBtn() {
    asside.classList.toggle('open');
    navTogglerBtn.classList.toggle('open');
    for (let i = 0; i < totalSection; i++) {
        allSection[i].classList.toggle('open');
    }
}