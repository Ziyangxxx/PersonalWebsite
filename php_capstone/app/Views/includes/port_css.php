<style>
      
    p.describe{
    background-color: #171b1c;
    color: #fff;
    display: block;
    padding: 0 30px 0 30px;
    margin: 0;
    text-align: justify;
    }
    
    p.describe2{
    background-color: #171b1c;
    color: #aaa;
    display: block;
    padding: 0 30px 40px 30px;
    margin: 0;
    text-align: center;
    font-weight: 700;
    }
    
    div.line1{
    display: block;
    background-color: #5d48c8;
    width: 100%;
    height: 2px;
    }/* styling line1 */
    div.line2{
    display: block;
    background-color: #5d48c8;
    width: 100%;
    height: 2px;
    }/* styling line2 */
    
    div.section1{
    display: block;
    width: 960px;
    max-width: 100%;
    height: 100%;
    background-color: #171b1c;
    display: grid;
    padding: 50px 0 25px 0;
    }/* styling section1 box */
    
    div.section2{
    display: block;
    width: 960px;
    max-width: 100%;
    height: 100%;
    background-color: #171b1c;
    display: grid;
    padding: 25px 0 50px 0;
    }/* styling section2 box */
    
    div.section1 img,
    div.section2 img{
    border: 0.5px solid rgba(60,0,255,0.6);
    box-shadow: -5px -5px 12px rgba(60,0,255,0.4), 
                5px 5px 12px rgba(60,0,255,0.4), 
                -5px 5px 12px rgba(60,0,255,0.4), 
                5px -5px 12px rgba(60,0,255,0.4);
    }/* styling section1 img box*/
    
    /* grid layout for pics & masks */
    img.pic1{
    grid-column: 1;
    margin: 0 0 0 50px;
    }
    img.pic2{
    grid-column: 2;
    }
    img.pic3{
    grid-column: 1;
    margin: 0 0 0 30px;
    }
    img.pic4{
    grid-column: 2;
    }
    img.pic5{
    grid-column: 3;
    }
    
    @media all and (max-width: 889px){
    p.describe{
        background-color: #171b1c;
        color: #fff;
        display: block;
        padding: 0 150px 0 150px;
        margin: 0;
        text-align: justify;
    }
    
    img.pic1{
        grid-row: 1;
        grid-column: 2;
        margin: 0 0 30px 0;
    }
    img.pic2{
        grid-row: 2;
        grid-column: 2;
        margin: 0;
    }
    img.pic3{
        grid-row: 1;
        grid-column: 2;
        margin: 0 0 30px 0;
    }
    img.pic4{
        grid-row: 2;
        grid-column: 2;
        margin: 0 0 30px 0;
    }
    img.pic5{
        grid-row: 3;
        grid-column: 2;
    }
    }
    
    @media print{
    div.section1,
    div.section2{
        box-shadow: none;
    }
    }
    
</style>