startTime();

// Initialize Firebase
var config = {
    apiKey: "AIzaSyAsYWXXfxdXeutTA9AhA3JziT-QPQqla0U",
    authDomain: "parking-d58ad.firebaseapp.com",
    databaseURL: "https://parking-d58ad.firebaseio.com",
    storageBucket: "parking-d58ad.appspot.com",
    messagingSenderId: "681963744097"
};
firebase.initializeApp(config);

var sensor = {
    s1: { name: "sensor_1", stat: ''},
    s2: { name: "sensor_2", stat: ''},
    s3: { name: "sensor_3", stat: ''},
    active : '1'
}

const dbRefObject = firebase.database().ref('parking');
const listContainer = $('#tbody_item_insert');

// $('#form').submit(function (e) {
//     e.preventDefault();
//     return false;
// });

// $('#s1').hide();
$('#choose_s1').click(function (){
    toggleInput(1);
});

$('#s2').hide();
$('#choose_s2').click(function (){
    toggleInput(2);
});

$('#s3').hide();
$('#choose_s3').click(function (){
    toggleInput(3);
});

function toggleInput(elementId){
    for(var i=1 ; i<=3 ; i++){
        $('#s'+i).val("");
        $('#s'+i).hide();
    }
    $('#s'+elementId).show();
    $('#btnSend').html('send sensor '+elementId);
    sensor.active = elementId;
}

$('#btnSend').click(function(){
    stat = $('#s'+sensor.active).val();
    if(stat != "" && stat != undefined){
        dbRefObject.push({
            sensorName: 'sensor_'+sensor.active,
            sensorStatus: stat,
            time: moment().format('YYYY/DD/MM h:mm a')
        });
    }
});

var parkIcon = '<span class="label label-success iconStatus">free</span>';
var noParkIcon = '<span class="label label-danger iconStatus">Parking</span>';

// $('#tabListButton').is(":visible")
dbRefObject.orderByChild('sensorName').on('child_added', snap => {
    console.log(snap.val());

    // list add
    $('#tbody_item_insert').append('<div class="active row history-list-row"><div class="col-xs-4 history-list">'+snap.val().sensorName+
    '</div><div class="col-xs-4 history-list">'+snap.val().sensorStatus+'</div><div class="col-xs-4 history-list">'+snap.val().time+'</div></div>');
    var statusToUpload='';
    if(snap.val().sensorStatus == 1){
        statusToUpload = noParkIcon;
    }else{
        statusToUpload = parkIcon;
    }

    // card add
    if(snap.val().sensorName == 'sensor_1'){
        $('#s1_status_id').html(statusToUpload);
        $('#s1_time_id').html(snap.val().time);
    }else if(snap.val().sensorName == 'sensor_2'){
        $('#s2_status_id').html(statusToUpload);
        $('#s2_time_id').html(snap.val().time);
    }else if(snap.val().sensorName == 'sensor_3'){
        $('#s3_status_id').html(statusToUpload);
        $('#s3_time_id').html(snap.val().time);
    }

    //scroll bottom
    listContainer.animate({ scrollTop: listContainer.prop("scrollHeight")}, 100);
});


// digital clock
function startTime() {
    var today = new Date();
    // console.log(today)
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var day = today.getDate();
    var month = today.getMonth();
    var year = today.getFullYear();
    m = checkTime(m);
    s = checkTime(s);
    $('#digitalClock').html(day+'/'+month+'/'+year+' ' + h + ":" + m + ":" + s);
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}