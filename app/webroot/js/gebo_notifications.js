/* [ ---- Gebo Admin Panel - notifications ---- ] */

	$(document).ready(function() {
		gebo_notifications.sticky();
		gebo_notifications.smoke_js();
	});

    gebo_notifications = {
        sticky: function() {
            $('#sticky_a').click(function(e){
                $.sticky("Lorem ipsum dolor sit&hellip;.", {autoclose : 5000, position: "top-right", type: "st-error" });
            });
            $('#sticky_b').click(function(e){
                $.sticky("Lorem ipsum dolor sit&hellip;", {autoclose : 5000, position: "top-right", type: "st-success" });
            });
            $('#sticky_c').click(function(e){
                $.sticky("Lorem ipsum dolor sit&hellip;", {autoclose : 5000, position: "top-right", type: "st-info" });
            });
            $('#sticky_d').click(function(e){
                $.sticky("Lorem ipsum dolor sit&hellip;", {autoclose : 5000, position: "top-right" });
            });
            $('#sticky_d_st').click(function(e){
                $.sticky("Lorem ipsum dolor sit&hellip;", {autoclose : false, position: "top-right" });
            });
            $('#sticky_e').click(function(e){
                $.sticky("Lorem ipsum dolor sit&hellip;", {autoclose : 5000, position: "top-right" });
            });
            $('#sticky_f').click(function(e){
                $.sticky("Lorem ipsum dolor sit&hellip;", {autoclose : 5000, position: "top-center" });
            });
            $('#sticky_g').click(function(e){
                $.sticky("Lorem ipsum dolor sit&hellip;", {autoclose : 5000, position: "top-left" });
            });
            $('#sticky_h').click(function(e){
                $.sticky("ทดสอบการตั้ง Notification&hellip;", {autoclose : false, position: "bottom-right" });
            });
            $('#sticky_i').click(function(e){
                $.sticky("Lorem ipsum dolor sit&hellip;", {autoclose : 5000, position: "bottom-left" });
            });
            $('#pnotify_aoi').click(function(e){
                $.pnotify({
                    title: 'jQuery UI Icon Error',
                    text: 'Oh no. Something\'s wrong with your network, and I\'m showing you visually using an appropriate icon to indicate the type of error that has occured. You know, network.',
                    type: 'error',
                    icon: 'ui-icon ui-icon-signal-diag',
                    icon: false,
                    hide: false,
                    closer: false,
                    sticker: false,
                    title_escape: true,
                    text_escape : true
                });
            });
//            pnotify_remove
            $('#pnotify_remove').click(function(e){
                $.pnotify_remove_all();
            });
        },
		smoke_js: function() {
			$('#smoke_signal').click(function(e){
                smoke.signal('This goes away after a few seconds...5 seconds, in fact.');
				e.preventDefault();
            });
			$('#smoke_alert').click(function(e){
                smoke.alert('This is a normal alert screen...nothing too fancy.');
				e.preventDefault();
            });
			$('#smoke_confirm').click(function(e){
                tstconfirm();
				e.preventDefault();
            });
			$('#smoke_prompt').click(function(e){
                tstprompt();
				e.preventDefault();
            });
			
			function tstconfirm(){
				smoke.confirm('This is still cool, yeah?',function(e){
					if (e){
						smoke.alert('"yeah it is" pressed', {ok:"close"});
					}else{
						smoke.alert('"no way" pressed', {ok:"close"});
					}
				}, {ok:"yeah it is", cancel:"no way"});
			}
			
			function tstprompt(){
				smoke.prompt('What\'s your name?',function(e){
					if (e){
						smoke.alert('Your name is '+e);
					}else{
						smoke.alert('no');
					}
				},{value:"your name"});
			}		
			
		}
    };
    
    
    function show_stack_bottomright(type) {
        alert(type);
    var opts = {
        title: "Over Here",
        text: "Check me out. I'm in a different stack.",
        addclass: "stack-bottomright",
        stack: stack_bottomright
    };
    switch (type) {
    case 'error':
        opts.title = "Oh No";
        opts.text = "Watch out for that water tower!";
        opts.type = "error";
        break;
    case 'info':
        opts.title = "Breaking News";
        opts.text = "Have you met Ted?";
        opts.type = "info";
        break;
    case 'success':
        opts.title = "Good News Everyone";
        opts.text = "I've invented a device that bites shiny metal asses.";
        opts.type = "success";
        break;
    }
    $.pnotify(opts);
}