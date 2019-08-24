/**设置外部iframe的高度 **/
$(function(){
    setIframeHeight();
    $(window).resize(function() {
        setIframeHeight();
    });
})

/**子页操作iframe的高度*/
function setIframeHeight(){
    $(parent.document.getElementById('mainiframe')).height(document.body.offsetHeight+10);
}