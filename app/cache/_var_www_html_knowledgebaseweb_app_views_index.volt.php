<!DOCTYPE html>
<!-- moved scripts to top of html - ben -->
<script src="/KnowledgeBaseWeb/public/js/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<html>
  <head>
    <title>KnowledgeBaseWeb</title>

    <!-- Viewport mobile tag for sensible mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    
    <!--  
        Stylesheets and Preprocessors
        ==============================

        You can always bring in CSS files manually with `<link>` tags, or asynchronously
        using a solution like AMD (RequireJS).  Or, if you like, you can take advantage 
        of Sails' conventional asset pipeline (boilerplate Gruntfile).

        By default, stylesheets from your `assets/styles` folder are included
        here automatically (between STYLES and STYLES END). Both CSS (.css) and LESS (.less)
        are supported. In production, your styles will be minified and concatenated into
        a single file.
        
        To customize any part of the built-in behavior, just edit `tasks/pipeline.js`.
        For example, here are a few things you could do:
            
            + Change the order of your CSS files
            + Import stylesheets from other directories
            + Use a different or additional preprocessor, like SASS, SCSS or Stylus
    -->

    <!--STYLES-->
    <!-- <link rel="stylesheet" href="/styles/importer.css">-->
    <!--STYLES END-->
<!-- Default home page -->

<style>
    /* Styles included inline since you'll probably be deleting this page anyway */
    html,body{text-align:left;font-size:1em}html,body,img,form,textarea,input,fieldset,div,p,div,ul,li,ol,dl,dt,dd,h1,h2,h3,h4,h5,h6,pre,code{margin:0;padding:0}ul,li{list-style:none}img{display:block}a img{border:0}a{text-decoration:none;font-weight:normal;font-family:inherit}*:active,*:focus{outline:0;-moz-outline-style:none}h1,h2,h3,h4,h5,h6{font-weight:normal}div.clear{clear:both}.clearfix:after{clear:both;content:".";display:block;font-size:0;height:0;line-height:0;visibility:hidden}body{font-family:"Open Sans",Arial,sans-serif;font-weight:300;}.top-bar {width: 100%; background-color: #e4f0f1; padding: 15px 0;}.top-bar .container img {float: left;}.top-bar .container ul {float: right; padding-top: 25px;}.top-bar .container li {float: left; width: 125px; text-align: center; font-size: 15px; color:#000; font-weight: 600;}.top-bar .container a li:hover {color: #118798; -webkit-transition:color 200ms; -moz-transition:color 200ms; -o-transition:color 200ms;transition:color 200ms;}.container{width: 80%; max-width: 1200px; margin: auto;}div.header {-webkit-transition: 6s; -moz-transition: 6s; -o-transition: 6s;transition: 6s; background: rgba(4, 36, 41, 0.89) url(http://sailsjs.org/images/img_sailsShadow.png) no-repeat 42% bottom; padding: 100px 0 65px;}.header h1#main-title{color: #fff; font-weight: 300; font-size: 2.5em;}.header h3{color: #b1eef7; font-style: italic; font-weight: 300;}.header h3 code{font-style: normal!important; background-color: rgba(255,255,255,0.5); font-weight: 300; color:#0e6471; margin: 0px 5px;}div.main.container{padding: 50px 0;}h1 {color: #118798; font-weight: 300;}code {font-size: inherit; font-family: 'Consolas', 'Monaco', monospace; padding:4px 5px 1px; background-color: #f3f5f7}a{color: #118798; font-weight: 300; text-decoration: underline;}a:hover {color: #0e6471; -webkit-transition:color 200ms; -moz-transition:color 200ms; -o-transition:color 200ms;transition:color 200ms;}p{line-height: 1.5em;}blockquote{background-color: #e4f0f1; padding: 25px; line-height: 1.5em; margin: 15px 0;}blockquote span{font-weight: 600; padding-right: 5px;}ul.getting-started{padding: 25px 75px 25px 0; width: 70%; float: left; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;}ul.getting-started li{padding: 25px 0;}ul.getting-started li h3 {padding-bottom: 10px; font-size: 25px; font-weight: 300;}.sprite{background:url(http://sailsjs.org/images/newapp.sprite.png) no-repeat; position: absolute; left: 0; top:0;}.getting-started .sprite{margin-left:10px;padding-left:60px;height:42px;width:0; float: left;}.getting-started .one{background-position:0 0}.getting-started .two{background-position:0 -42px}.getting-started .three{background-position:0 -83px}div.step {position: relative; padding-left: 70px; opacity: 0.9;}div.step:hover{ opacity: 1;}div.links {float: left; width: 30%; max-width: 325px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; background-color: #f3f5f7; border: 1px solid #ebebeb; padding: 25px 45px 35px;}div.links h3 {color: #727272; text-align: center; font-size: 28px; font-weight: 300;}div.links h4 {color: #727272; font-size: 17px; font-weight: 600; padding: 15px 0 10px;}div.links .link-list a {text-decoration: none; font-weight: 400;}div.links .link-list a li {padding: 0px 0px 5px 10px;}div.default-page{min-width: 1200px;}.pocket{display:none;}
</style>
<script type="text/javascript">
setTimeout(function sunrise () {
    document.getElementsByClassName('header')[0].style.backgroundColor = '#118798';
}, 0);
</script>
</head>
<body>
        <?php echo $this->getContent(); ?>

    <!--
        Client-side Templates
        ========================

        HTML templates are important prerequisites of modern, rich client applications.
        To work their magic, frameworks like Backbone, Angular, Ember, and Knockout require
        that you load these templates client-side.

        By default, your Gruntfile is configured to automatically load and precompile
        client-side JST templates in your `assets/templates` folder, then
        include them here automatically (between TEMPLATES and TEMPLATES END).
        
        To customize this behavior to fit your needs, just edit `tasks/pipeline.js`.
        For example, here are a few things you could do:

            + Import templates from other directories
            + Use a different template engine (handlebars, jade, dust, etc.)
            + Internationalize your client-side templates using a server-side
              stringfile before they're served.
    -->

    <!--TEMPLATES-->
    
    <!--TEMPLATES END-->


    <!--

      Client-side Javascript
      ========================

      You can always bring in JS files manually with `script` tags, or asynchronously
      on the client using a solution like AMD (RequireJS).  Or, if you like, you can 
      take advantage of Sails' conventional asset pipeline (boilerplate Gruntfile).

      By default, files in your `assets/js` folder are included here
      automatically (between SCRIPTS and SCRIPTS END).  Both JavaScript (.js) and
      CoffeeScript (.coffee) are supported. In production, your scripts will be minified
      and concatenated into a single file.
      
      To customize any part of the built-in behavior, just edit `tasks/pipeline.js`.
      For example, here are a few things you could do:
          
          + Change the order of your scripts
          + Import scripts from other directories
          + Use a different preprocessor, like TypeScript

    -->

    <!--SCRIPTS-->

    <!--SCRIPTS END-->
  </body>
</html>
