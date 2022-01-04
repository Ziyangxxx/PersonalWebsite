<style>
    div.line1{
        display: block;
        background-color: #5d48c8;
        width: 100%;
        height: 2px;
    }

    div.line2{
        display: block;
        background-color: #5d48c8;
        width: 100%;
        height: 2px;
    }

    h1{
        font-family: Sen, serif;
        font-size: 1.7em;
        font-weight: 700;
        color: #e2d300;
        position: relative;
        left: 15px;
    }

    .required:after {
        content: '*';
        color: #900;
        font-size: 1.5rem;
    }

    form.styled_form p:first-of-type{
        padding-top: 10px;
    }
    
    form.styled_form legend{
        color: #5d48c8;
        font-weight: 700;
    }

    form div{
        padding-top: 50px;
        font-size: 14px;
    }

    form div a{
        color: #e2d300;
        font-size: 15px;
        text-decoration: none;
        font-weight: bold;
    }

    form div a:hover{
        color: #5d48c8;
    }

    form.styled_form fieldset{
        width: 935px;
        max-width: 97%;
        border-top: 2px solid #5d48c8;
        border-left: 0;
        border-right: 0;
        border-bottom: 0;
        color: #fff;
        margin: 0;
        padding-bottom: 172px;
    }
    
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
    }

    form.styled_form input[type="email"],
    form.styled_form input[type="password"]{
        width: 250px;
        background-color: #fff;
        padding: 2px;
        font-size: 1.1em;
        font-weight: 400;
        font-family: Raleway, serif;
    }
    
    form.styled_form input[type="email"]:hover,
    form.styled_form input[type="password"]:hover{
        border: 2px solid #5d48c8;
        box-shadow: 0 0 13px rgba(160,100,255,1);
    }/* hover effect for form field */
    
    form.styled_form input[type="email"]:focus,
    form.styled_form input[type="password"]:focus{
        border: 2px solid #ff0;
        background-color: #ccc;
    }
</style>
