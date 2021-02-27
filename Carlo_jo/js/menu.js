
window.onload = function(){
    var toggleButton = document.getElementById('toggle-button')
    var naviList = document.getElementById('navi-list')
    
    toggleButton.addEventListener('click', () => {
        naviList.classList.toggle('active');
    })
}