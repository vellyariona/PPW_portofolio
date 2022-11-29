$(document).ready(function(){
    console.log("document loaded");

    $.ajax({
        type: "GET",
        url: 'http://localhost:8000/api/gallery',
        success: function(response) {
            // console.log(response['galleries'])
            var gal ='';

            response['data']['galleries'].forEach(element => {
                gal += '<div> <a class="example-image-link" href="" data-lightbox="roadtrip" data-title=""><img class="example-image img-fluid mb-2" src="http://localhost:8000/storage/posts_image/"' + element['picture'] +  '"alt="image-1"/></a></div>';
            
            });

            // var gallery = response['galleries'];

            // for (let index = 0; index <  gallery.length; index++) {
            //     // const element =  response['galleries'][index];
            //     console.log(gallery[index]['picture']);
            //     gal += '<div> <a class="example-image-link" href="http://localhost:8000/storage/projects_image/' + gallery[index]['picture']['picture'] +  '" data-lightbox="roadtrip" data-title=""><img class="example-image img-fluid mb-2" src="http://localhost:8000/storage/projects_image/' + gallery[index]['picture'] +  '"alt="image-1"/></a></div>';
            
                
            
            
            $('#gallery-api').html(gal);
            console.log(gal)
        }
        
    });
});

$(window).on("load", function(){
    console.log("window loaded");
});

