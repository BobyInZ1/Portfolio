const template = document.createElement('template');
template.innerHTML = `
<header>
    <a href="#division0"></a>
    <div class="drop">
        <a class="sm2" href="index.php">[<span class="vert">S</span>M]</class=></a>
        <div class="menulist">
            <a class="liensmenu" href="index.php">Accueil</a>
            <a class="liensmenu" href="#division2">Projets</a>
            <a class="liensmenu" href="index.php#division3">Parcours</a>
            <a class="liensmenu" href="index.php#division4">Contact</a>
    </div>
</header>
`
document.body.appendChild(template.content);
