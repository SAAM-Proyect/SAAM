function loadStyleSheet(src) {
    if (document.createStyleSheet){
        document.createStyleSheet(src);
    }
    else {
        if( src == "style.css" )
        {
            var fileref=document.createElement("link");
            fileref.setAttribute("rel", "stylesheet");
            fileref.setAttribute("type", "text/css");
            fileref.setAttribute("href", "public/css/"+src);
            document.getElementsByTagName("head")[0].appendChild(fileref);
        }
        else if(src=="materialize.css")
        { 
            var fileref=document.createElement("link");
            fileref.setAttribute("rel", "stylesheet");
            fileref.setAttribute("type", "text/css");
            fileref.setAttribute("media", "screen,projection");
            fileref.setAttribute("href", "public/css/"+src);
            document.getElementsByTagName("head")[0].appendChild(fileref);
        }
        else
        {
            var fileref=document.createElement("link");
            fileref.setAttribute("rel", "stylesheet");
            fileref.setAttribute("type", "text/css");
            fileref.setAttribute("href", src);
            document.getElementsByTagName("head")[0].appendChild(fileref);
        }
    }
};
function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}
function loadScript(src) {
    if (document.createStyleSheet){
        document.createStyleSheet(src);
    }
    else {        
        var fileref=document.createElement('script');
        fileref.setAttribute("type","text/javascript");
        fileref.setAttribute("async", "true");
        fileref.setAttribute("src", src);
        document.getElementsByTagName("head")[0].appendChild(fileref);
    }
};


//<script async src="public/js/script.js" type="text/javascript"></script>
