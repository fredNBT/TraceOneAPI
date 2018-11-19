
class StatsViewer {

    Test() {
        return '<h1>big</h1>';
    }

    FormatedHtml(ResponceText) {

        let TextToReturn = '<div class="stats">';


         let responceobj = JSON.parse(ResponceText);


        
         $.each(responceobj, function (index, value) {
           //console.log(value);

           if (value >= 0 ){
                TextToReturn +=   '<div class="Combo"><p>' + index + '</p><div class="Pos">' + '+' + value +'</div></div>';
           }
           else{
            TextToReturn +=   '<div class="Combo"><p>' + index + '</p><div class="Neg">'+ value+'</div></div>';
           }
         });


         
         TextToReturn += ' </div>';
        

   
      

        return  TextToReturn ;

    }

    


}