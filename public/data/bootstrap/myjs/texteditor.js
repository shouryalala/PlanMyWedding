function iframeon() {
    richtext.document.designMode = "On";
}
function iBold() {
    richtext.document.execCommand('bold',false,null);
}
function iUnderline() {
    richtext.document.execCommand('underline', false, null);
}
function iItalic() {
    richtext.document.execCommand('italic', false, null);
}
function iFontSize() {
    var size = prompt('Enter a Size 1-7','')
    richtext.document.execCommand('FontSize', false, size);
}
function iForeColor() {
    var color = prompt('Define a basic color or apply a hexadecimal color code for advanced color:','')
    richtext.document.execCommand('ForeColor', false, color);
}
function iHorizontalRule() {
    richtext.document.execCommand('inserthorizontalrule', false, null);
}
function iUnorderedList() {
    richtext.document.execCommand("InsertUnorderedList", false, "newOL");
}
function iOrderedList() {
    richtext.document.execCommand("InsertOrderedList", false, "newUL");
}
function iLink() {
    var linkurl = prompt('Enter the URL for this Link: ','http://')
    richtext.document.execCommand("CreateLink", false, linkURL);    
}
function iUnLink() {
    richtext.document.execCommand("Unlink", false, null);
}