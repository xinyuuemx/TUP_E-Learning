 <div class="main">

<textarea></textarea>

    <!-- Include external JS libs. -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/codemirror.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/xml.min.js"></script>
 
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/froala_editor.pkgd.min.js"></script>
 
    <!-- Initialize the editor. -->
    <script> $(function() { $('textarea').froalaEditor() }); </script>
    </div>
