<div class="panel panel-info">
    <div class="panel-heading">
        <h3>Synonyms</h3>
    </div>
    <div class="panel-body">
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Name</th>
            </tr>
            </thead>
            @foreach($synonyms as $s)
                <tr>
                    <td>{{ $s->lhs->name}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

<div class="panel panel-warning">
    <div class="panel-heading">
        <h3>Children</h3>
    </div>
    <div class="panel-body">
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Name</th>
                <th>Relationship</th>
            </tr>
            </thead>
            @foreach($childRelationships as $r)
                <tr>
                    <td><a href="{{ url('/') }}/node/{{$r->lhs->id}}">{{ $r->lhs->name }}</a></td>
                    <td>{{ $r->relation->lhs_name }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3>Parents</h3>
    </div>
    <div class="panel-body">
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Name</th>
                <th>Relationship</th>
            </tr>
            </thead>
            @foreach($parentRelationships as $r)
                <tr>
                    <td><a href="{{ url('/') }}/node/{{$r->rhs->id}}">{{ $r->rhs->name }}</a></td>
                    <td>{{ $r->relation->rhs_name }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

