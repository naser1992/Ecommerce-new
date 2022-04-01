
// setInterval(function(){
//     if(document.getElementsByClassName('slide-remote')[0].classList.contains("active")){
//         document.getElementsByClassName('slide-remote')[1].classList.add("active");
//         document.getElementsByClassName('slide-remote')[0].classList.remove("active");
//     }
//     else if(document.getElementsByClassName('slide-remote')[1].classList.contains("active"))
//     {
//         document.getElementsByClassName('slide-remote')[2].classList.add("active");
//         document.getElementsByClassName('slide-remote')[1].classList.remove("active");
//     }
//     else if(document.getElementsByClassName('slide-remote')[2].classList.contains("active"))
//     {
//         document.getElementsByClassName('slide-remote')[0].classList.add("active");
//         document.getElementsByClassName('slide-remote')[2].classList.remove("active");
//     }
// },2000);


function next() {
    if(document.getElementsByClassName('slide-remote')[0].classList.contains("active")){
        document.getElementsByClassName('slide-remote')[1].classList.add("active");
        document.getElementsByClassName('slide-remote')[0].classList.remove("active");
    }
    else if(document.getElementsByClassName('slide-remote')[1].classList.contains("active"))
    {
        document.getElementsByClassName('slide-remote')[2].classList.add("active");
        document.getElementsByClassName('slide-remote')[1].classList.remove("active");
    }
    else if(document.getElementsByClassName('slide-remote')[2].classList.contains("active"))
    {
        document.getElementsByClassName('slide-remote')[0].classList.add("active");
        document.getElementsByClassName('slide-remote')[2].classList.remove("active");
    }
}
function prev() {
    if(document.getElementsByClassName('slide-remote')[0].classList.contains("active")){
        document.getElementsByClassName('slide-remote')[2].classList.add("active");
        document.getElementsByClassName('slide-remote')[0].classList.remove("active");
    }
    else if(document.getElementsByClassName('slide-remote')[2].classList.contains("active"))
    {
        document.getElementsByClassName('slide-remote')[1].classList.add("active");
        document.getElementsByClassName('slide-remote')[2].classList.remove("active");
    }
    else if(document.getElementsByClassName('slide-remote')[1].classList.contains("active"))
    {
        document.getElementsByClassName('slide-remote')[0].classList.add("active");
        document.getElementsByClassName('slide-remote')[1].classList.remove("active");
    }
}



let span = document.getElementsByClassName('move');
let prodect = document.getElementsByClassName('latest-box');
let l = 0;
let mob = document.querySelector('.latest').offsetWidth;
if(resizeBy( mob <'399px')){   
        span[1].onclick = ()=>{
            l++;
            for(const i of prodect){
                if(l==0) {i.style.left = "0px";}
                if(l==1) {i.style.left = "-375px";}
                if(l==2) {i.style.left = "-750px";}
                if(l==3) {i.style.left = "-1025px";}
                if(l==4) {i.style.left = "-1400px";}
                if(l==5) {i.style.left = "-1775px";}
                if(l==6) {i.style.left = "-2150px";}
                if(l>6){l=6;}
            }
        }
        span[0].onclick = ()=>{
            l--;
            for(const i of prodect){
                if(l==0) {i.style.left = "0px";}
                if(l==1) {i.style.left = "-375px";}
                if(l==2) {i.style.left = "-750px";}
                if(l==3) {i.style.left = "-1025px";}
                if(l==4) {i.style.left = "-1400px";}
                if(l==5) {i.style.left = "-1775px";}
                if(l==6) {i.style.left = "-2150px";}
                if(l>0){l=0;}
            }
        }
} else {

    span[1].onclick = ()=>{
        l++;
        for(const i of prodect){
            if(l==0) {i.style.left = "0px";}
            if(l==1) {i.style.left = "-680px";}
            if(l==2) {i.style.left = "-1480px";}
            if(l==3) {i.style.left = "-1920px";}
            if(l>4){l=4;}
        }
    }
    span[0].onclick = ()=>{
        l--;
        for(const i of prodect){
            if(l==0) {i.style.left = "0px";}
            if(l==1) {i.style.left = "-740px";}
            if(l==2) {i.style.left = "-1480px";}
            if(l==3) {i.style.left = "-1920px";}
            if(l<0){l=0;}
        }
    }
}



    // spans[0].onclick = ()=>{
    //     m--;
    //     for(const i of prodects){
    //         if(m==0) {i.style.left = "0px";}
    //         if(m==1) {i.style.left = "-740px";}
    //         if(m==2) {i.style.left = "-1480px";}
    //         if(m==3) {i.style.left = "-1920px";}
    //         if(m<0){m=0;}
    //     }
    // }


// slider two



let spans = document.getElementsByClassName('make');
let prodects = document.getElementsByClassName('featured-box');
let m = 0;

spans[1].onclick = ()=>{
    m++;
    for(const i of prodects){
        if(m==0) {i.style.left = "0px";}
        if(m==1) {i.style.left = "-680px";}
        if(m==2) {i.style.left = "-1480px";}
        if(m==3) {i.style.left = "-1920px";}
        if(m>4){m=4;}
    }
}
spans[0].onclick = ()=>{
    m--;
    for(const i of prodects){
        if(m==0) {i.style.left = "0px";}
        if(m==1) {i.style.left = "-740px";}
        if(m==2) {i.style.left = "-1480px";}
        if(m==3) {i.style.left = "-1920px";}
        if(m<0){m=0;}
    }
}
