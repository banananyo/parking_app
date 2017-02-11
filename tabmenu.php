<!--<hr/>-->
<div class="row">
    <div class="col-xs-12">
    <div class="btn-group btn-group-justified">
        <a id="btnListView" class="btn btn-success">List View</a>
        <a id="btnCardView" class="btn btn-info">Card View</a>
    </div>
    </div>
</div>
<hr/>

<!--<div class="row">-->
    <div class="col-xs-12">
    <div id="listView">
        <div class="row history-list-header">
            <div class="col-xs-4">sensor name</div>
            <div class="col-xs-4">status</div>
            <div class="col-xs-4" >time</div>
        </div>
            <!--<tbody id="tbody_item_insert" class="table_body"></tbody>-->
        <div class="row">
            <div id="tbody_item_insert" class="table_body col-xs-12"></div>
        </div>
    </div>
    </div>
<!--</div>-->

<div id="cardView">
    <div class="row">
        <div class="col-sm-4 col-xs-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title" id="s1_card">Sensor 1</h3>
                </div>
                <div class="panel-body">
                    <font id="s1_status_id"></font><br/><hr/><font id="s1_time_id"></font>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-6 ">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title" id="s2_card">Sensor 2</h3>
                </div>
                <div class="panel-body">
                    <font id="s2_status_id"></font><br/><hr/><font id="s2_time_id"></font>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-6">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title" id="s3_card">Sensor 3</h3>
                </div>
                <div class="panel-body">
                    <font id="s3_status_id"></font><br/><hr/><font id="s3_time_id"></font>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#listView').hide();
    $('#btnListView').click(function(){
        $('#cardView').hide();
        $('#listView').show();
    });

    // $('#cardView').hide();
    $('#btnCardView').click(function(){
        $('#listView').hide();
        $('#cardView').show();
    });
</script>
