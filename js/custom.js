(function($){
    $(document).on('click','#ccblog_btn',function(){
        alert();
        let c = wp.media(
            {
                title : 'Select a Photo',
                button : {
                    text : 'Insert Photo'
                }
            }
        ).open();


        c.on('select', function(){
           let media = c.state().get('selection').first().toJSON();

           $('#blog_cpinput').val(media.url)
           $('#blog_photo').attr('src',media.url)


        })



        return false;
    })
})(jQuery)