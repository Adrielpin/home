point = 0;
index =0;

function firstSlide(array) 
{
    if(point == index){
        index = Math.floor((Math.random() * (array.length - 1)) + 1);
    }

    point = index;
    var image = '/storage/home/'+ array[index].name;
    jQuery('.firstSlide').css({'background-image': 'url(' + image + ')'});
}