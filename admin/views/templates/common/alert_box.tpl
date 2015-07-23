{if $alert_status}
    {if $alert_msg}
        <div class="alert {if $alert_type == TRUE}alert-success{else}alert-danger{/if} alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong><span class="glyphicon glyphicon {if $alert_type == TRUE}glyphicon-ok-circle {else} glyphicon-remove-circle{/if}" aria-hidden="true"></span></strong> {$alert_msg}
        </div>
    {/if}
{/if}
