function CopyToClipboard(mail)
{
var r = document.createRange();
r.selectNode(document.getElementById(mail));
window.getSelection().removeAllRanges();
window.getSelection().addRange(r);
document.execCommand('copy');
window.getSelection().removeAllRanges();
}