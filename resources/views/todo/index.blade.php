<!DOCTYPE html>
<html>
<head>
    <title>Todo Collection</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: #4CAF50; color: white; }
        .completed { text-decoration: line-through; color: #888; }
    </style>
</head>
<body>
    <h1>Todo Collection ({{ $todos->total() }} items)</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Title</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($todos as $todo)
            <tr class="{{ $todo->is_completed ? 'completed' : '' }}">
                <td>{{ $todo->id }}</td>
                <td>{{ $todo->user->name ?? 'Unknown' }}</td>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->is_completed ? '✅ Completed' : '🟡 Pending' }}</td>
                <td>{{ $todo->created_at->format('Y-m-d H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <div style="margin-top: 20px;">
        {{ $todos->links() }}
    </div>
</body>
</html>