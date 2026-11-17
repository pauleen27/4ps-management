<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4Ps Beneficiary Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f8f5;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #6f4e37;
        }

        .main-container {
            max-width: 1200px;
            margin: 40px auto;
        }

        .content-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);
        }

        .btn-green {
            background: #795548;
            color: white;
        }

        .btn-green:hover {
            background: #f7f3ef;
            color: white;
        }

        .table thead {
            background: #e8f2eb;
        }

        .empty-state {
            padding: 45px 15px;
            color: #777;
        }


        .alert-success {
            background-color: #e8ddd3 !important;
            border-color: #d6c0ad !important;
            color: #5d4037 !important;
        }

        .btn-green,
        .btn-green:focus,
        .btn-green:active,
        .btn-green:focus-visible {
            background-color: #795548 !important;
            border-color: #795548 !important;
            color: #ffffff !important;
            box-shadow: none !important;
        }


        .btn-green:hover {
            background-color: #5d4037 !important;
            border-color: #5d4037 !important;
            color: #ffffff !important;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark">
        <div class="container">
            <span class="navbar-brand fw-bold">
                4Ps Beneficiary Management System
            </span>
        </div>
    </nav>

    <div class="container main-container">

        <div class="content-card">

        @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}

        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close">
        </button>
    </div>
@endif

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="fw-bold mb-1">Beneficiary Records</h3>
                    <p class="text-muted mb-0">
                        Manage registered 4Ps beneficiary information.
                    </p>
                </div>

                <a href="{{ route('beneficiaries.create') }}" class="btn btn-green">
                    + Add Beneficiary
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Household ID</th>
                            <th>Full Name</th>
                            <th>Gender</th>
                            <th>Barangay</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    
<tbody>
    @forelse ($beneficiaries as $beneficiary)
        <tr>
            <td>{{ $loop->iteration }}</td>

            <td>{{ $beneficiary->household_id }}</td>

            <td>
                {{ $beneficiary->first_name }}
                {{ $beneficiary->middle_name }}
                {{ $beneficiary->last_name }}
                {{ $beneficiary->suffix }}
            </td>

            <td>{{ $beneficiary->gender }}</td>

            <td>{{ $beneficiary->barangay }}</td>

            <td>
                @if ($beneficiary->beneficiary_status == 'Active')
                    <span class="badge bg-success">Active</span>
                @elseif ($beneficiary->beneficiary_status == 'Inactive')
                    <span class="badge bg-secondary">Inactive</span>
                @else
                    <span class="badge bg-warning text-dark">
                        Pending Verification
                    </span>
                @endif
            </td>

            <td>
            <a href="{{ route('beneficiaries.show', $beneficiary->id) }}"
               class="btn btn-sm btn-info text-white">
               View
            </a>

            <a href="{{ route('beneficiaries.edit', $beneficiary->id) }}"
                class="btn btn-sm btn-warning">
                 Edit
              </a>   

              <form action="{{ route('beneficiaries.destroy', $beneficiary->id) }}"
                    method="POST"
                    style="display: inline;"
                    onsubmit="return confirm('Are you sure you want to delete this beneficiary?');">

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-sm btn-danger">
                  Delete
                </button>
            </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="7" class="text-center empty-state">
                No beneficiary records available yet.
                <br>
                Click "Add Beneficiary" to register a record.
            </td>
        </tr>
    @endforelse
</tbody>

                </table>
            </div>

        </div>

    </div>

</body>
</html>
