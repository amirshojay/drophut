function updateQuantity(){
    quantity_container = document.getElementById('quantity_container');
    const updatedQuantity = document.getElementById('updatedQuantity');
    const iframe = document.getElementById('iframe');
    iframe.src = iframe.src;
}
function newFunction(){
    iframe_document = iframe.contentDocument;
    heading = iframe_document.getElementById('first');
    updatedQuantity.innerHTML = heading.innerHTML;
}
function delay(){
    myVar=setTimeout(newFunction,500);
}