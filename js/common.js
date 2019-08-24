
/**父窗口 加载iframe  url*/
function loadIframe(url){
    $('#mainiframe').attr('src',url);
}

/**子窗口 加载iframe  url*/
function childloadIframe(url){
    $(parent.document.getElementById('mainiframe')).attr('src',url);
}



function showfullscreenimg(title,url){
    layer.photos({
        photos: {"data": [{"alt": title, "src": url}]}
        ,anim: 5
    });
}
