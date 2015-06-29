$.fn.toggleAttr = function(attr,val){
    return this.each(function(){
        var $this = $(this);
        if ($this.is("[" + attr + "]")) {
            $this.removeAttr(attr);
        }
        else {
            $this.attr(attr,val);            
        }
    });
}

function disableThis() {
   var that = this;
   $(function(){
       $( that ).parent().siblings().children(".text").toggleClass("disabled");
	   //$( that ).parent().siblings().children(".text").toggleAttr("disabled", "disabled");
	   $( that ).parent().siblings().children(".text").toggleAttr("readonly", "readonly");
	   $( that ).siblings(".btn").toggleAttr("disabled", "disabled");
   });
}

//$('#nav').affix({});
