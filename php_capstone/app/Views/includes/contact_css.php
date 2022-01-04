<style>
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
    
    h1{
        font-family: Sen, serif;
        font-size: 1.7em;
        font-weight: 700;
        color: #e2d300;
        position: relative;
        left: 15px;
    }/* styling the first heading */

    .required:after {
        content: '*';
        color: #900;
        font-size: 1.5rem;
    }
    
    form.styled_form legend{
        color: #5d48c8;
        font-weight: 700;
    }/* styling form legend */
    
    form.styled_form fieldset{
        width: 935px;
        max-width: 97%;
        border-top: 2px solid #5d48c8;
        border-left: 0;
        border-right: 0;
        border-bottom: 0;
        color: #fff;
        margin: 0;
    }/* styling form fieldset */
    
    fieldset#fs1{
        background-image: url(../images/Contact/bg.jpg);
        background-repeat: no-repeat;
        background-position: right top;
    }
    
    form.styled_form label{
        width: 190px;
        display: block;
        clear: both;
        float: left;
    }/* styling form label */
    
    form.styled_form input[type="text"],
    form.styled_form input[type="email"],
    form.styled_form input[type="tel"],
    form.styled_form input[type="url"],
    form.styled_form input[type="password"]{
        width: 250px;
        background-color: #fff;
        padding: 2px;
        font-size: 1.1em;
        font-weight: 400;
        font-family: Raleway, serif;
    }/* styling form field */
    
    form.styled_form input[type="text"]:hover,
    form.styled_form input[type="email"]:hover,
    form.styled_form input[type="tel"]:hover,
    form.styled_form input[type="url"]:hover,
    form.styled_form input[type="password"]:hover{
        border: 2px solid #5d48c8;
        box-shadow: 0 0 13px rgba(160,100,255,1);
    }/* hover effect for form field */
    
    form.styled_form input[type="text"]:focus,
    form.styled_form input[type="email"]:focus,
    form.styled_form input[type="tel"]:focus,
    form.styled_form input[type="url"]:focus,
    form.styled_form input[type="password"]:focus{
        border: 2px solid #ff0;
        background-color: #ccc;
    }/* focus effect fot form field */
    
    table{
        border: 1px solid #666;
        width: 700px;
        max-width: 700px;
        border-spacing: 0;
        padding: 5px;
        background-color: #171b1c;
        border-collapse: collapse;
    }/* styling table box */
    
    th.title{
        text-align: left;
        padding-left: 12px;
        border: 1px solid #666;
        border-top: 1px solid #171b1c;
        border-left: 1px solid #171b1c;
        border-right: 1px solid #171b1c;
        border-spacing: 0;
    }
    
    tr th{
        border: 1px solid #666;
        padding: 5px;
        text-align: left;
        padding-left: 12px;
    }/* targeting all the header cell */
    
    tr td{
        border: 1px solid #666;
        text-align: center;
    }
    
    th.time{
        text-align: center;
    }
    
    p#button{
        text-align: center;
    }

    .errors {
        position: absolute;
        top: 135px;
        left: 530px;
        display: inline-block;
        color: #fff;
        padding: 0 20px 0 20px;
        border: 1px solid #900;
        margin: 30px 0;
    }
    
    @media print{
        nav{
        display: none;
        }
    }
</style>