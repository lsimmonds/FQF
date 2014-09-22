<?php include 'fw_open.html'; ?>
<?php include 'fw_top_nav.php'; ?> 

<link rel='stylesheet' href='assets/calendar/fullcalendar.css' />
<script src='assets/calendar/jquery.min.js'></script>
<script src='assets/calendar/moment.min.js'></script>
<script src='assets/calendar/fullcalendar.js'></script>
<script src='assets/calendar/gcal.js'></script>

<script type='text/javascript'>

$(document).ready(function() {
    $('#calendar').fullCalendar({
      header: {
        left:   'title',
        center: 'month, agendaWeek, agendaDay',
        right:  'today prev,next'
      },
      //events: 'https://www.google.com/calendar/feeds/lng9ki0qhrmre1roanmips13gc%40group.calendar.google.com/public/basic'
      eventRender: function (event, element) {
        element.attr('href', 'javascript:void(0);');
        element.click(function() {
          $("#startTime").html(moment(event.start).format('MMM Do h:mm A'));
          $("#endTime").html(moment(event.end).format('MMM Do h:mm A'));
          $("#eventInfo").html(event.description);
          $("#eventLink").attr('href', event.url);
          $("#eventContent").dialog({ modal: true, title: event.title, width:350});
        });
      },
      dayClick: function(date, jsEvent, view) {
        console.log('Clicked on: ' + date.format());
        console.log('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
        console.log('$(jsEvent.delegateTarget): ' + JSON.stringify($(jsEvent.delegateTarget)));
        console.log('Current view: ' + view.name);
        console.log('view: ' + JSON.stringify(view));
        // change the day's background color just for fun
        //$(this).css('background-color', 'red');
      }
    });
});

</script>

<div id="eventContent" title="Event Details" style="display:none;">
    Start: <span id="startTime"></span><br>
    End: <span id="endTime"></span><br><br>
    <p id="eventInfo"></p>
    <p><strong><a id="eventLink" href="" target="_blank">Read More</a></strong></p>
</div>

<div class="container">
     <div class="panel">
		<div class="panel-body">
            <!-- Begin content here -->
            
            <div class="page-header">
                <h1>Calendar Test</h1>
            </div>
            <div>&nbsp</div>        
            <div id='calendar'></div>
            

            <!-- End content here -->
		</div>
	</div>
</div>
<?php include 'fw_footer.html'; ?>
<?php include 'fw_close.html'; ?>
