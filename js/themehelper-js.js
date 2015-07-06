jQuery(document).ready(function($){
    $('#upload-btn').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var themehelper_logo = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#themehelper_logo').val(themehelper_logo);
        });
    });
});
jQuery(document).ready(function($){
    $('#upload-second-btn').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var themehelper_secondary_logo = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#themehelper_secondary_logo').val(themehelper_secondary_logo);
        });
    });
});
jQuery(document).ready(function($){
    $('#upload-sm-icon1').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var th_sm_icon1 = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#th_sm_icon1').val(th_sm_icon1);
        });
    });
});
jQuery(document).ready(function($){
    $('#upload-sm-icon2').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var th_sm_icon2 = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#th_sm_icon2').val(th_sm_icon2);
        });
    });
});
jQuery(document).ready(function($){
    $('#upload-sm-icon3').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var th_sm_icon3 = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#th_sm_icon3').val(th_sm_icon3);
        });
    });
});
jQuery(document).ready(function($){
    $('#upload-sm-icon4').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var th_sm_icon4 = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#th_sm_icon4').val(th_sm_icon4);
        });
    });
});
jQuery(document).ready(function($){
    $('#upload-sm-icon5').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var th_sm_icon5 = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#th_sm_icon5').val(th_sm_icon5);
        });
    });
});
jQuery(document).ready(function($){
    $('#upload-banner-btn1').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var themehelper_banner1 = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#themehelper_banner1').val(themehelper_banner1);
        });
    });
});
jQuery(document).ready(function($){
    $('#upload-banner-btn2').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var themehelper_banner2 = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#themehelper_banner2').val(themehelper_banner2);
        });
    });
});
