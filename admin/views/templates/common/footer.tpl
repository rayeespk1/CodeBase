    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <script src="{base_url()}../assets/admin/lib/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script> 
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{base_url()}../assets/admin/lib/morris/morris.min.js" type="text/javascript"></script>

    <!-- jQuery Knob Chart -->
    <script src="{base_url()}../assets/admin/lib/knob/jquery.knob.js" type="text/javascript"></script>
    
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{base_url()}../assets/admin/lib/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <script src="{base_url()}../assets/admin/lib/iCheck/icheck.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{base_url()}../assets/admin/js/app.min.js" type="text/javascript"></script>
    <script src='{base_url()}../assets/admin/lib/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE dashboard  -->
    <script src="{base_url()}../assets/admin/js/pages/dashboard.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{base_url()}../assets/admin/js/demo.js" type="text/javascript"></script>
  </body>
</html>
{if isset($scripts)}
    {foreach from=$scripts item=script}
        <script type="text/javascript" src="{base_url()}../assets/admin/{$script.src}" /></script>
    {/foreach}
{/if}
</body>
</html>