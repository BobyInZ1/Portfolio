function CopyToClipboard(mail) {
    var r = document.createRange();
    r.selectNode(document.getElementById(mail));
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(r);
    document.execCommand('copy');
    window.getSelection().removeAllRanges();
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
}

document.addEventListener("DOMContentLoaded", function () {
    // Circle text code
    const degreeToRadian = (angle) => angle * (Math.PI / 180);
    const radius = 200;
    const diameter = radius * 2;
    const circle = document.querySelector("#circle");
    if (circle) {
        circle.style.width = `${diameter}px`;
        circle.style.height = `${diameter}px`;
        const text = circle.dataset.text;
        const characters = text.split("");
        const deltaAngle = 360 / characters.length;
        const characterOffsetAngle = 1;
        let currentAngle = -90;
        characters.forEach((character, index) => {
            const span = document.createElement("span");
            span.innerText = character;
            const xPos = radius * (1 + Math.cos(degreeToRadian(currentAngle)));
            const yPos = radius * (1 + Math.sin(degreeToRadian(currentAngle)));
            const transform = `translate(${xPos}px, ${yPos}px)`;
            const rotate = `rotate(${(index * deltaAngle) + characterOffsetAngle}deg)`;
            span.style.transform = `${transform} ${rotate}`;
            currentAngle += deltaAngle;
            circle.appendChild(span);
        });
    }

    // Dropdown for all wrappers
    document.querySelectorAll('.wrapper').forEach(function(wrapper) {
        const clickText = wrapper.querySelector('.click-text');
        if (clickText) {
            clickText.addEventListener('click', function (e) {
                e.stopPropagation();
                wrapper.classList.toggle('active');
            });
        }
    });
});