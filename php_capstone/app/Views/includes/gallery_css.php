<style>
      
    div.line1{
    display: block;
    background-color: #5d48c8;
    margin-top: 25px;
    width: 100%;
    height: 2px;
    }

    div.line2{
    display: block;
    background-color: #5d48c8;
    width: 100%;
    height: 2px;
    float: right;
    }

    .line3{
    display: block;
    background-color: #5d48c8;
    margin-top: 60px;
    width: 100%;
    height: 2px;
    }

    h2{
        color: #e2d300;
        font-size: 1.3em;
        padding-left: 10px;
        margin-top: 33px;
    }

    h2.stitle{
        margin-top: -5px;
        margin-left: 15px;
    }

 
    div.sidenav{
        background: linear-gradient(#0c0e0f, 80%, #1f2426);
        width: 159px;
        height: 525px;
        /* border-right: 1px solid #5d48c8; */
        position: absolute;
    }

    div.sidenav ul{
        color: #fff;
        margin: 20px 0 30px 0;
        padding-left: 30px;
    }

    div.sidenav ul li{
        padding: 10px 0 10px 0;
    }

    div.sidenav li a{
        font-size: 1.2em;
        font-weight: bold;
        color: #999;
    }

    form input#search{
        width: 130px;
        height: 35px;
        margin-left: 10px;
        background-color: #999;
        border-radius: 5px;
    }

    form input:last-of-type{
        margin-top: 10px;
        margin-left: 10px;
    }

    .nosearch{
        font-size: 1.7em;
        position: absolute;
        top: 90px;
        left: 60px;
    }

    div.section1{
    display: block;
    width: 800px;
    max-width: 100%;
    min-height: 525px;
    background-color: #171b1c;
    display: grid;
    padding: 36px 0 0 0;
    float: right;
    }/* styling section1 box */
    
    div.section1 img{
    border: 0.5px solid rgba(60,0,255,0.6);
    box-shadow: -5px -5px 12px rgba(60,0,255,0.4), 
                5px 5px 12px rgba(60,0,255,0.4), 
                -5px 5px 12px rgba(60,0,255,0.4), 
                5px -5px 12px rgba(60,0,255,0.4);
    width: 320px;
    height: 180px;
    float: left;
    margin-left: 25px;
    }/* styling section1 img box*/

    div.section1 p{
        color: #fff;
        font-family: Raleway, sans-serif;
        font-weight: 700;
        display: block;
        max-width: 800px;
        padding-left: 380px;
    }

    div.section1 p span{
        display: inline-block;
        color: #e2d300;
        margin-right: 15px;
    }

    div.info{
        padding-bottom: 30px;
    }

    div.section4{
        float: right;
    }

    footer{
        float: right;
        width: 960px;
    }
    
    @media all and (max-width: 889px){
    
    div.section1{
        display: block;
        width: 960px;
        max-width: 100%;
        height: 1165px;
        background-color: #171b1c;
        display: grid;
        padding: 50px 0 50px 0;
    }
    
    img.pic1,
    div.mask1{
        grid-row: 1;
        grid-column: 1;
        margin-left: 85px;
    }
    img.pic2,
    div.mask2{
        grid-row: 1;
        grid-column: 2;
    }
    img.pic3,
    div.mask3{
        grid-row: 2;
        grid-column: 1;
        margin: 30px 0 0 85px;
    }
    img.pic4,
    div.mask4{
        grid-row: 3;
        grid-column: 1;
        margin: 30px 0 0 85px;
    }
    img.pic5,
    div.mask5{
        grid-row: 2;
        grid-column: 2;
        margin: 30px 0 0 0;
    }
    img.pic6,
    div.mask6{
        grid-row: 3;
        grid-column: 2;
        margin: 30px 0 0 0;
    }
    }
    
    @media print{
    div.section1 img{
        box-shadow: none;
    }
    
    div.mask1,
    div.mask2,
    div.mask3,
    div.mask4,
    div.mask5,
    div.mask6{
        display: none;
    }
    
    nav{
        display: none;
    }
    }

</style>