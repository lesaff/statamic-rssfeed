<div class="card">
    <div class="card-header">
        <h2 style="display: inline; vertical-align: middle;">{!! $title !!}</h2>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th class="text-center"></th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $entry)
                    <tr>
                        <td>{!! $entry['title'] !!}</td>
                        <td>{!! $entry['date'] !!}</td>
                        <td class="text-center">
                            <a href="{!! $entry['permalink'] !!}" target="_blank">
                                <span class="icon icon-eye"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
