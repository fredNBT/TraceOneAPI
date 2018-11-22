
class StatsViewer {

    Test() {
        return '<h1>big</h1>';
    }

    FormatedHtml(ResponceText) {

        let TextToReturn = '<div class="stats">';


         let responceobj = JSON.parse(ResponceText);
        let i = 0;
                     

         $.each(responceobj, function (index, value, ) {

           if (value >= 0 ){
            circles[i].update(value),
            circles[i].updateColors(['rgba(10, 84, 114, 0.5)','rgba(56, 175, 8, 01)']),
            i++;
           }
           else{
            circles[i].update(value-value-value),
            circles[i].updateColors(['rgba(10, 84, 114, 0.5)','rgba(198, 35, 35, 1)']),
            i++;
           }
         });


         
         TextToReturn += ' </div>';
        

   
      

        return  TextToReturn ;


  
    }

    FormatedSolarHtml(ResponceText){
        let TextToReturn = '<div class="Solar">';


        let responceobj = JSON.parse(ResponceText);
       let i = 0;
                    

        $.each(responceobj, function (index, value, ) {
          //  TextToReturn = '<div class="SolarBoxes" style="display:flex;" >';
            
          TextToReturn += '<div class="SolarBoxes" style="display:flex;  margin:10px;" >';
         
            $.each(value, function (index, value, ) {

                
                
                if (index === 'House'){
                    TextToReturn += '<button style="color:white; background-color: Transparent;" onclick="MinusSolarPanel(this.value)"value="' + value+  '">-</button>'
                TextToReturn += '<p style="padding-right: 20px;color:  #6B6F73;">' + value + '</p>';
                }

                if (index === 'SolarPannels'){
                    TextToReturn += '<p style="color: #38AF08;">' + value + '</p>';
                    }
                   
                   
               
            });
            TextToReturn += '<button style="color:white; background-color: Transparent;" >+</button>'
            TextToReturn += ' </div>';
           
          //  TextToReturn += ' </div>';
           
         
        });


        
        TextToReturn += ' </div>';

        return TextToReturn;

    }

    


}