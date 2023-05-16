<!DOCTYPE html>
<html>
    <head>
        <title>Lilac</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <style>
    table {
			border-collapse: collapse;
			width: 50%;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border: 1px solid black;
			width: 10%; 
		}

    .toggle {
    position: relative;
    display: inline-block;
    width: 40px;
    height: 16px;
    }

    .toggle-input {
        display: none;
    }

    .toggle-slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        
        border-radius: 10px;
    }

    .toggle-slider:before {
        position: absolute;
        content: "";
        height: 15px;
        width: 13px;
        left: 2px;
        /* bottom: 1px;
        top: 1px; */
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 50%;
    }

    input:checked + .toggle-slider {
        background-color: #2196F3;
    }

    input:checked + .toggle-slider:before {
        -webkit-transform: translateX(24px);
        -ms-transform: translateX(24px);
        transform: translateX(24px);
    }

    .toggle-slider:after {
        display: block;
        position: absolute;
        padding: 2px 5px;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: white;
        font-size: 14px;
        font-weight: bold;
        text-transform: uppercase;
    }

    input:checked + .toggle-slider:after {
        left: 0;
        right: 5px;
        text-align: right;
    }

    </style>
    <body>
        <h4>Student Details</h4>
        <table>
            <thead>
                <tr>
                    <th>Name of Student</th>
                    <th>Parent Name</th>
                    <th>Opted Courses</th>
                    <th>Enable or Disable</th>
                </tr>
            </thead>  
            <tbody>
                @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->student_name }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->course_name }}</td>
                    <td>
                    <label class="toggle">
                    <input type="checkbox" class="toggle-input" data-id="{{ $data->id }}" {{ $data->is_active ? 'checked' : '' }}>
                    <span class="toggle-slider"></span>
                </label>
            </td>
                </tr>
                @endforeach
            </tbody>  
        </table>

        <script>
        $(document).ready(function() {
            $('.toggle-input').on('change', function() {
                var checkboxElem = this;
                var studentId = $(this).data('id');
                var statusChangeValue = checkboxElem.checked ? 1 : 0;
                statusChange(checkboxElem, studentId, statusChangeValue);
            });
        });

        function statusChange(checkboxElem, studentId, statusChangeValue) {
            $.ajax({
                type: 'POST',
                url: '/student_active',
                data: {
                    _token: "{{csrf_token()}}",
                    is_active: statusChangeValue, // Send the statusChangeValue as 'is_active'
                    student_id: studentId
                },
                success: function(data) {
                    console.log('Status changed successfully');
                },
                error: function(xhr, status, error) {
                    console.log('Error changing status:', error);
                }
            });
        }
        </script>
    </body>
</html>
