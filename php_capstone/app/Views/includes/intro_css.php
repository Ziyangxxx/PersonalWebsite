<style>
      
    div.section1{
    display: block;
    position: relative;
    width: 960px;
    max-width: 100%;
    top: 50px;
    }
    
    div.line1{
    display: block;
    background-color: #5d48c8;
    width: 100%;
    height: 2px;
    }
    
    div img{
    float: left;
    }
    
    div.section1 p{
    color: #fff;
    font-family: Raleway, sans-serif;
    font-weight: 700;
    display: block;
    max-width: 432px;
    height: 100%;
    margin: 0 0 26px 265px;
    }
    
    div.section1 p span{
    display: inline-block;
    color: #e2d300;
    margin-right: 15px;
    }
    
    div.line2{
    display: block;
    background-color: #5d48c8;
    width: 100%;
    height: 2px;
    clear: both;
    }
    
    div.section2{
    display: block;
    color: #fff;
    position: relative;
    width: 960px;
    max-width: 100%;
    top: 70px;
    }
    
    div.section2 p.title{
    float: left;
    display: block;
    font-weight: 700;
    font-size: 1.2em;
    text-align: center;
    margin: 50px;
    }
    
    div.section2 p span{
    color: #e2d300;
    }
    
    div.section2 p.content{
    font-family: Raleway, sans-serif;
    font-weight: 700;
    display: block;
    width: 690px;
    max-width: 62%;
    height: 100%;
    margin: 60px 0 26px 265px;
    }
    
    div.line3{
    display: block;
    background-color: #5d48c8;
    width: 100%;
    height: 2px;
    clear: both;
    }
    
    div.section3{
    display: block;
    color: #fff;
    position: relative;
    width: 960px;
    max-width: 100%;
    top: 60px;
    height: 370px;
    }
    
    div.section3 div#bars{
    position: relative;
    left: -10px;
    }
    
    /* styling percent bar */
    #photoshop{
    position: absolute;
    top: 45px;
    left: 277px;
    width: 589px;
    max-width: 62%;
    height: 9px;
    background-color: #bbb452;
    z-index: 2;
    }

    #photoshop_bg{
    position: absolute;
    top: 45px;
    left: 277px;
    width: 653px;
    max-width: 68%;
    height: 9px;
    background-color: #1d264f;
    z-index: 1;
    }

    #autocad{
    position: absolute;
    top: 85px;
    left: 277px;
    width: 495px;
    max-width: 52%;
    height: 9px;
    background-color: #bbb452;
    z-index: 2;
    }

    #autocad_bg{
    position: absolute;
    top: 85px;
    left: 277px;
    width: 653px;
    max-width: 68%;
    height: 9px;
    background-color: #1d264f;
    z-index: 1;
    }

    #sketchup{
    position: absolute;
    top: 125px;
    left: 277px;
    width: 488px;
    max-width: 51%;
    height: 9px;
    background-color: #bbb452;
    z-index: 2;
    }

    #sketchup_bg{
    position: absolute;
    top: 125px;
    left: 277px;
    width: 653px;
    max-width: 68%;
    height: 9px;
    background-color: #1d264f;
    z-index: 1;
    }

    #illustrator{
    position: absolute;
    top: 165px;
    left: 277px;
    width: 455px;
    max-width: 47%;
    height: 9px;
    background-color: #bbb452;
    z-index: 2;
    }

    #illustrator_bg{
    position: absolute;
    top: 165px;
    left: 277px;
    width: 653px;
    max-width: 68%;
    height: 9px;
    background-color: #1d264f;
    z-index: 1;
    }

    #lumion{
    position: absolute;
    top: 205px;
    left: 277px;
    width: 361px;
    max-width: 37%;
    height: 9px;
    background-color: #bbb452;
    z-index: 2;
    }

    #lumion_bg{
    position: absolute;
    top: 205px;
    left: 277px;
    width: 653px;
    max-width: 68%;
    height: 9px;
    background-color: #1d264f;
    z-index: 1;
    }

    #office{
    position: absolute;
    top: 243px;
    left: 277px;
    width: 522px;
    max-width: 55%;
    height: 9px;
    background-color: #bbb452;
    z-index: 2;
    }

    #office_bg{
    position: absolute;
    top: 243px;
    left: 277px;
    width: 653px;
    max-width: 68%;
    height: 9px;
    background-color: #1d264f;
    z-index: 1;
    }

    @media all and (max-width: 977px){
    p#percent{
        position: absolute;
        top: 26px;
        right: 5%;
        z-index: 3;
        }

    #photoshop_bg,
    #autocad_bg,
    #sketchup_bg,
    #illustrator_bg,
    #lumion_bg,
    #office_bg{
        display: none;
    }
    }/* responsive styling after 977px wide */
    
    div p#software{
    width: auto;
    height: 200px;
    color: #fff;
    font-size: 1.2em;
    font-weight: 700;
    position: absolute;
    top: 60px;
    left: 50px;
    text-align: center;
    }/* styling the box of software */

    div p#software span{
    display: block;
    padding-bottom: 18px;
    }/* styling the software content */

    div p#percent{
    width: auto;
    height: 200px;
    color: #fff;
    font-size: 0.8em;
    font-weight: 700;
    position: absolute;
    top: 65px;
    right: 1%;
    z-index: 3;
    }/* styling the box of percent */
    
    div p#percent span{
    display: block;
    padding-bottom: 17.5px;
    }
    
    @media all and (max-width: 768px){
    div p#percent{
        position: absolute;
        left: 265px;
    }
    
    div.section3 div#bars{
        position: relative;
        left: 20px;
        width: 90%
    }
    }
    
</style>