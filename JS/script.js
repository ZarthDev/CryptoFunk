const divisor = document.getElementsByClassName('divisor')[0];
let isOpenDivisor = true;

function closeDivisor ( ) {
    if (isOpenDivisor) {
        divisor.classList.remove('divisor');
        isOpenDivisor = false;
    }else{
        divisor.classList.add('divisor');
        isOpenDivisor = true;
    }
}