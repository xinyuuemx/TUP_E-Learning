<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
 
    <!-- Include external CSS. -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/codemirror.min.css">
 
    <!-- Include Editor style. -->
    <link href="<?php echo base_url(); ?>assets/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/froala_style.min.css" rel="stylesheet" type="text/css" />
  </head>
 
  <body>
    <!-- Create a tag that we will use as the editable area. -->
    <!-- You can use a div tag as well. -->
    <textarea></textarea>
 
    <!-- Include external JS libs. -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/codemirror.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/xml.min.js"></script>
 
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/froala_editor.pkgd.min.js"></script>
 
    <!-- Initialize the editor. -->
    <script> $(function() { $('textarea').froalaEditor() }); </script>
  </body>
</html>