
class StatsViewer {

    Test() {
        return '<h1>big</h1>';
    }

    FormatedHtml(ResponceText) {

        let TextToReturn = '<div class="stats">';


         let responceobj = JSON.parse(ResponceText);

        // console.log( JSON.parse(ResponceText));
        // console.log(obj);

        
         $.each(responceobj, function (index, value) {
           //console.log(value);

           if (value >= 0 ){
                TextToReturn +=   '<div class="Combo"><h3>' + index + '</h3><div class="Pos">'+ value+'</div></div>';
              // TextToReturn += '<h1>' + value + '</h1>'
              // TextToReturn += '<h1>' + index + '</h1>'
           }
           else{
            TextToReturn +=   '<div class="Combo"><h3>' + index + '</h3><div class="Neg">'+ value+'</div></div>';
           // TextToReturn += '<h5>' + value + '</h5>'
           // TextToReturn += '<h1>' + index + '</h1>'
           }
         });


         
         TextToReturn += ' </div>';
        

   
      

        return  TextToReturn ;

    }

    


}