<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: DejaVu Sans; font-size: 12px; }
        h2 { text-align: center; margin-bottom: 15px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 6px; }
        th { background: #f1f1f1; }
    </style>
</head>
<body>

<h2>Eye Camp Appointments</h2>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Patient Name</th>
            <th>Phone</th>
            <th>Eye Camp</th>
            <th>Date</th>
            <th>Location</th>
            <th>Booked At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($appointments as $index => $appointment)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $appointment->name }}</td>
                <td>{{ $appointment->phone }}</td>
                <td>{{ $appointment->eyeCamp->title }}</td>
                <td>{{ \Carbon\Carbon::parse($appointment->eyeCamp->start_date)->format('d M Y') }}</td>
                <td>{{ $appointment->eyeCamp->location }}</td>
                <td>{{ $appointment->created_at->format('d M Y') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
