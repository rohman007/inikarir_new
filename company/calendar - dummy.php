<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
</head>
<body>

<div id="calendar"></div>

<div id="dateClickModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dateClickModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dateClickModalLabel">Event Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="dateClickModalBody">
                <!-- Konten modal di sini -->
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            header: {
                left: '',
                center: 'title',
                right: ''
            },
            events: [
                {
                    title: 'Meeting',
                    start: '2024-01-10T10:00:00',
                    end: '2024-01-10T12:00:00'
                },
                {
                    title: 'Event with Popup',
                    start: '2024-01-10T14:00:00',
                    end: '2024-01-10T16:00:00'
                }
                // Add more events as needed
            ],
            dayClick: function (date, jsEvent, view) {
    var clickedCell = jsEvent.currentTarget;
    var rect = clickedCell.getBoundingClientRect();
    var clickedCellLeft = rect.left + window.scrollX;
    var clickedCellTop = rect.top + window.scrollY;

    var hasEvent = $('#calendar').fullCalendar('clientEvents', function (event) {
        return moment(event.start).isSame(date, 'day');
    }).length > 0;

    if (hasEvent) {
        // Set properti style modal sesuai posisi
        $('#dateClickModal').css({
            'top': clickedCellTop,
            'left': clickedCellLeft + clickedCell.offsetWidth + 10,
            'margin-left': 0,
            'margin-right': 'auto'
        });

        // Tampilkan modal
        $('#dateClickModal').modal('show');
    }
}

        });
    });
</script>

</body>
</html>
