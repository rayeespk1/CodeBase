<script src="{base_url()}../assets/admin/lib/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
{if isset($scripts)}
    {foreach from=$scripts item=script}
        <script type="text/javascript" src="{base_url()}../assets/admin/{$script.src}" /></script>
    {/foreach}
{/if}
</body>
</html>