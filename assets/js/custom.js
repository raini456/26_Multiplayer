var positions;
$(document).ready(function(){
    
    console.log("READY !!!");
    // Globale Variablen Startwere setzen
    basics();   
});//ready End
function basics(){
    $(".mBtn").click(function(){        
        var nr = parseInt( $(this).attr("data-nr") );
        if(nr==0){
            $('.wrapper').css({width:'200px'}); 
        }
        else{
            $('.wrapper').animate({width:'670px'});
        }        
        var xp = 200*nr*-1;
        $(".moveBox").css({left:xp+'px'});
    });
    $.post("db.php?flag=0",                    
        function(data, status){
            positions = JSON.parse(data);            
            $.each(positions,function(index,item){                     
            console.log(index,item);
            $('.field').append("<div class='gamer' id='gamer"+item.rid+"' style='position:absolute; left:"+item.x+"; \n\
             top:"+item.y+"; background-color:"+item.color+";' gamer-nr='"+item.rid+"'>"+item.rid+"</div>");                       
            });
            
    });
    $('#field').append(
    
            );
}