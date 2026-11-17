<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Beneficiary | 4Ps Management System</title>

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

        <h3 class="fw-bold">Edit Beneficiary</h3>
        <p class="text-muted mb-4">Update the household information below.</p>

        <form action="{{ route('beneficiaries.update', $beneficiary->id) }}" method="POST">
            @csrf
            @method('PUT')

            <h5 class="section-title">1. Personal Information</h5>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control"
                           value="{{ $beneficiary->first_name }}">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Middle Name</label>
                    <input type="text" name="middle_name" class="form-control"
                           value="{{ $beneficiary->middle_name }}">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control"
                           value="{{ $beneficiary->last_name }}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">Suffix</label>
                    <select name="suffix" class="form-select">
                        <option value="">None</option>
                        @foreach (['Jr.', 'Sr.', 'II', 'III', 'IV'] as $suffix)
                            <option value="{{ $suffix }}" @selected($beneficiary->suffix == $suffix)>
                                {{ $suffix }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Birth Date</label>
                    <input type="date" name="birth_date" class="form-control"
                           value="{{ $beneficiary->birth_date->format('Y-m-d') }}">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-select">
                        <option value="Male" @selected($beneficiary->gender == 'Male')>Male</option>
                        <option value="Female" @selected($beneficiary->gender == 'Female')>Female</option>
                    </select>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <label class="form-label">Civil Status</label>
                    <select name="civil_status" class="form-select">
                        @foreach (['Single', 'Married', 'Widowed', 'Separated', 'Divorced'] as $status)
                            <option value="{{ $status }}" @selected($beneficiary->civil_status == $status)>
                                {{ $status }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <h5 class="section-title">2. Contact Information</h5>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label class="form-label">Contact Number</label>
                    <input type="text" name="contact_number" class="form-control"
                           value="{{ $beneficiary->contact_number }}">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control"
                           value="{{ $beneficiary->email }}">
                </div>
            </div>

            <h5 class="section-title">3. Address Information</h5>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">House Number</label>
                    <input type="text" name="house_number" class="form-control"
                           value="{{ $beneficiary->house_number }}">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Street</label>
                    <input type="text" name="street" class="form-control"
                           value="{{ $beneficiary->street }}">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Purok</label>
                    <input type="text" name="purok" class="form-control"
                           value="{{ $beneficiary->purok }}">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <label class="form-label">Barangay</label>
                    <input type="text" name="barangay" class="form-control"
                           value="{{ $beneficiary->barangay }}">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Municipality</label>
                    <input type="text" name="municipality" class="form-control"
                           value="{{ $beneficiary->municipality }}">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Province</label>
                    <input type="text" name="province" class="form-control"
                           value="{{ $beneficiary->province }}">
                </div>
            </div>

            <h5 class="section-title">4. 4Ps Household Information</h5>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Household ID</label>
                    <input type="text" name="household_id" class="form-control"
                           value="{{ $beneficiary->household_id }}">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Household Head</label>
                    <input type="text" name="household_head" class="form-control"
                           value="{{ $beneficiary->household_head }}">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <label class="form-label">Relationship to Household Head</label>
                    <select name="relationship_to_household_head" class="form-select">
                        @foreach (['Self', 'Spouse', 'Parent', 'Child', 'Other'] as $relationship)
                            <option value="{{ $relationship }}"
                                @selected($beneficiary->relationship_to_household_head == $relationship)>
                                {{ $relationship }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Date Registered</label>
                    <input type="date" name="date_registered" class="form-control"
                           value="{{ $beneficiary->date_registered?->format('Y-m-d') }}">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Beneficiary Status</label>
                    <select name="beneficiary_status" class="form-select">
                        @foreach (['Active', 'Inactive', 'Pending Verification'] as $status)
                            <option value="{{ $status }}"
                                @selected($beneficiary->beneficiary_status == $status)>
                                {{ $status }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('beneficiaries.index') }}" class="btn btn-secondary">
                    Cancel
                </a>

                <button type="submit" class="btn btn-green">
                    Update Beneficiary
                </button>
            </div>

        </form>

    </div>
</div>

</body>
</html>
