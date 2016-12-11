<div id="@yield('form-id')" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">@yield('form-title')</h4>
            </div>
            <div class="modal-body">
                @yield('form-body')
            </div>
            <div class="modal-footer">
                @yield('form-footer')
            </div>
        </div>
    </div>
</div>