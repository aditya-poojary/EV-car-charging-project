const button=document.getElementById('Mode');

function toggleBackgroundColor(){

const contain=document.getElementById('container');
   const anchor= document.querySelectorAll('a');
   const moon=document.querySelector('#Moon');
   const sun=document.querySelector('#Sun');
   const about=document.querySelector('.describe');
   const offer=document.querySelector('.facilities');
   const cards=document.querySelectorAll('.cards');
   const contact=document.querySelector('.contactUs');
   const aboutUs=document.querySelector('.Aboutdiv');
       const bar = document.getElementById('bars');

if(contain.style.backgroundColor=='white'){
contain.style.background='url("download - Copy.jpeg") center/cover no-repeat';
for(let i=0;i<anchor.length;i++){
    anchor[i].style.color='white';
} moon.style.transform='rotate(360deg) scale(0)';
        sun.style.transform='rotate(0) scale(1)';
        about.style.color='white';
        offer.style.color='white';
        contact.style.color='white';
        aboutUs.style.color='white';
        bar.style.color='white';
        
        for (let i = 0; i < cards.length; i++) {
           cards[i].style.backgroundColor='black';
            
        }
       

}
else{
    contain.style.background = 'white';

        for ( let i= 0; i < anchor.length; i++) {
            
           anchor[i].style.color='black';
       }
moon.style.transform='rotate(0) scale(1)';
sun.style.transform='rotate(360deg) scale(0)';
about.style.color='black';
offer.style.color='black';
for (let i = 0; i < cards.length; i++) {
   cards[i].style.backgroundColor=' rgb(50, 221, 164)';
    
}
contact.style.color='black';
aboutUs.style.color='black';
bar.style.color='black';

}
}
function showbar() {
    const menu = document.querySelector('.sidebar');
    menu.style.display='flex';
    menu.style.transform='transition(0.5s)'
}

function closebar(){
    const menu=document.querySelector('.sidebar');
    menu.style.display='none';
}

function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    if (section) {
       section.scrollIntoView({ behavior: 'smooth' });
    }
 }
 