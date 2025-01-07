<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <title>Customer Complaints</title>
    <style>
        .loading {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Customer Complaints</h2>
        <div class="loading" id="loading">Loading data...</div>
        <table class="table table-bordered table-striped mt-4" id="complaints-table" style="display: none;">
            <thead class="table-dark">
                <tr id="table-headers"></tr>
            </thead>
            <tbody id="table-body"></tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Fetch data from the API
            $.ajax({
                url: '/customerComplaints',
                method: 'GET',
                success: function (data) {
                    // Check if data is not empty
                    if (data.length > 0) {
                        // Generate table headers dynamically
                        let headers = Object.keys(data[0]);
                        let headerRow = '';
                        headers.forEach(header => {
                            headerRow += `<th>${header.replace(/_/g, ' ').toUpperCase()}</th>`;
                        });
                        $('#table-headers').html(headerRow);

                        // Populate table rows dynamically
                        let bodyRows = '';
                        data.forEach(item => {
                            let row = '<tr>';
                            headers.forEach(header => {
                                row += `<td>${item[header] ? item[header] : ''}</td>`;
                            });
                            row += '</tr>';
                            bodyRows += row;
                        });
                        $('#table-body').html(bodyRows);

                        // Show the table and hide the loading message
                        $('#loading').hide();
                        $('#complaints-table').show();
                    } else {
                        $('#loading').text('No complaints found.');
                    }
                },
                error: function () {
                    $('#loading').text('Failed to load data.');
                }
            });
        });
    </script>
</body>
</html>
