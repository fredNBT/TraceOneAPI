
class StatsViewer {

    Test() {
        return '<h1>big</h1>';
    }

    FormatedHtml(ResponceText) {

        let TextToReturn = '<div class="stats">';


        let responceobj = JSON.parse(ResponceText);
        let i = 0;
        $.each(responceobj, function (index, value, ) {

            if (value >= 0) {
                circles[i].update(value),
                    circles[i].updateColors(['rgba(10, 84, 114, 0.5)', 'rgba(56, 175, 8, 01)']),
                    i++;
            }
            else {
                circles[i].update(value - value - value),
                    circles[i].updateColors(['rgba(10, 84, 114, 0.5)', 'rgba(198, 35, 35, 1)']),
                    i++;
            }
        });
        TextToReturn += ' </div>';
        return TextToReturn;

    }

    FormatedSolarHtml(ResponceText) {
        let TextToReturn = '<h4>Solar Panels</h4><div class="Solar">';


        let responceobj = JSON.parse(ResponceText);
        let i = 0;
        $.each(responceobj, function (index, value, ) {
            //  TextToReturn = '<div class="SolarBoxes" style="display:flex;" >';

            TextToReturn += '<div class="SolarBoxes" style="display:flex;  margin:10px;" >';
            $.each(value, function (index, value, ) {

                if (index === 'House') {
                    TextToReturn += '<button style="color:white; background-color: Transparent;" onclick="MinusSolarPanel(this.value)"value="' + value + '">-</button>';
                    TextToReturn += '<button style="color:white; background-color: Transparent;"onclick="PlusSolarPanel(this.value)"value="' + value + '" >+</button>';
                    TextToReturn += '<p style="padding-right: 20px;color:  #6B6F73;">' + value + '</p>';
                }
                if (index === 'SolarPannels') {
                    TextToReturn += '<p style="color: #38AF08;">' + value + '</p>';
                }
            });
            TextToReturn += ' </div>';
        });

        TextToReturn += ' </div>';

        return TextToReturn;

    }


    FormatedSunHtml(ResponceText) {
        let TextToReturn = '';
        let responceobj = JSON.parse(ResponceText);
        let i = 0;

        $.each(responceobj, function (index, value, ) {
            $.each(value, function (index, value, ) {
               
                if (index === 'Power_MW_') {

                    if(value > 10){
                    TextToReturn += '<div style="display:flex;"><img src="../public/img/sun.png"><h3 style="color:white;">' + value + '</h3></div>';
                }else if (value <10 && value > 2){
                    TextToReturn += '<div style="display:flex;"><img src="../public/img/cloud.png"><h3 style="color:white;">' + value + '</h3></div>';
                }
                else if (value < 2){
                    TextToReturn += '<div style="display:flex;"><img src="../public/img/moon.png"><h3 style="color:white;">' + value + '</h3></div>';
                }
                }      
            });
        
        });

     
        return TextToReturn;

    }

    FormatedPriceHtml(ResponceText) {
        let TextToReturn = '';
        let responceobj = JSON.parse(ResponceText);
        let i = 1;

        $.each(responceobj, function (index, value, ) {

            
            TextToReturn += '<div ><h3> House' + i + '</h3>';
            i +=1;
           
            $.each(value, function (index, value, ) {
               
             TextToReturn += '<div><p style="padding:1px">' + index + '</p>' + '<p style="padding:1px">' + value + '</p></div>';
            });

            TextToReturn += '</div>'
        
        });

     
        return TextToReturn;

    }




}