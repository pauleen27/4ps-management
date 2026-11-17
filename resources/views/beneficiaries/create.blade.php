<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Beneficiary | 4Ps Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
<style>
    body {
        background: #f7f3ef;
        font-family: Arial, sans-serif;
    }

    .navbar {
        background: #6f4e37;
    }

    .form-container {
        max-width: 1100px;
        margin: 35px auto;
    }

    .form-card {
        background: white;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 3px 12px rgba(0,0,0,0.06);
    }

    .section-title {
        color: #6f4e37;
        font-weight: bold;
        border-bottom: 2px solid #e8ddd3;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .btn-green {
        background: #795548;
        color: white;
        border: none;
    }

    .btn-green:hover {
        background: #5d4037;
        color: white;
    }

    .form-label {
        font-weight: 600;
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

<div class="container form-container">

    <div class="form-card">

        <div class="mb-4">
            <h3 class="fw-bold">Add New Beneficiary</h3>
            <p class="text-muted">Enter the household and beneficiary information.</p>
        </div>

            <form action="{{ route('beneficiaries.store') }}" method="POST">
    @csrf

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Please fix the following errors:</strong>

        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" placeholder="Enter first name">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Middle Name</label>
                    <input type="text" name="middle_name" class="form-control" placeholder="Enter middle name">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Enter last name">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">Suffix</label>
                    <select name="suffix" class="form-select">
                        <option value="">None</option>
                        <option>Jr.</option>
                        <option>Sr.</option>
                        <option>II</option>
                        <option>III</option>
                        <option>IV</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Birth Date</label>
                    <input type="date" name="birth_date" class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-select">
                        <option value="">Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <label class="form-label">Civil Status</label>
                    <select name="civil_status" class="form-select">
                        <option value="">Select Civil Status</option>
                        <option>Single</option>
                        <option>Married</option>
                        <option>Widowed</option>
                        <option>Separated</option>
                        <option>Divorced</option>
                    </select>
                </div>
            </div>

            <h5 class="section-title">2. Contact Information</h5>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label class="form-label">Contact Number</label>
                    <input type="text" name="contact_number" class="form-control" placeholder="09XXXXXXXXX">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="example@email.com">
                </div>
            </div>

            <h5 class="section-title">3. Address Information</h5>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">House Number</label>
                    <input type="text" name="house_number" class="form-control" placeholder="House number">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Street</label>
                    <input type="text" name="street" class="form-control" placeholder="Street">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Purok</label>
                    <input type="text" name="purok" class="form-control" placeholder="Purok">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <label class="form-label">Barangay</label>
                    <input type="text" name="barangay" class="form-control" placeholder="Barangay">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Municipality</label>
                    <input type="text" name="municipality" class="form-control" placeholder="Municipality">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Province</label>
                    <input type="text" name="province" class="form-control" placeholder="Province">
                </div>
            </div>

            <h5 class="section-title">4. 4Ps Household Information</h5>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Household ID</label>
                    <input type="text" name="household_id" class="form-control" placeholder="Enter unique Household ID">

                <div class="col-md-6">
                    <label class="form-label">Household Head</label>
                    <input type="text" name="household_head" class="form-control" placeholder="Full name of household head">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <label class="form-label">Relationship to Household Head</label>
                    <select name="relationship_to_household_head" class="form-select">
                        <option value="">Select Relationship</option>
                        <option>Self</option>
                        <option>Spouse</option>
                        <option>Parent</option>
                        <option>Child</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Date Registered</label>
                    <input type="date" class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Beneficiary Status</label>
                    <select name="beneficiary_status" class="form-select">
                        <option>Active</option>
                        <option>Inactive</option>
                        <option>Pending Verification</option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('beneficiaries.index') }}" class="btn btn-secondary">
                    Cancel
                </a>

                <button type="submit" class="btn btn-green">
                    Save Beneficiary
                </button>
            </div>

        </form>

    </div>

</div>

</body>
</html>
