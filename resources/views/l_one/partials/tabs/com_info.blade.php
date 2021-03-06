<div class="row">
    <div class="col-xl-12">
        <div class="table-responsive">
            <table class="table table-editable table-nowrap align-middle table-edits">
                <thead>
                <tr>
                    <th>IP Address</th>
                    <th>MAC Address</th>
                    <th>NIC</th>
                    <th>Default Gateway</th>
                    <th>Network</th>
                    <th>SubNetMask</th>
                    {{--<th>DHCP Enabled</th>--}}
                    <th>DHCP Server</th>
                </tr>
                </thead>
                <tbody>
                @include('assets_shared.table_row')
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('script')
    <script>
        $(document).ready(function () {
            $('.table-editable-edit-button').click();
        });
    </script>
@endsection