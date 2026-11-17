<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiary Details | 4Ps Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
<style>
    body {
        background: #f7f3ef;
        font-family: Arial, sans-serif;
    }

    .navbar {
        background: #6f4e37;
    }

    .main-container {
        max-width: 1000px;
        margin: 35px auto;
    }

    .content-card {
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
        margin-top: 25px;
        margin-bottom: 20px;
    }

    .detail-label {
        color: #777;
        font-size: 13px;
        margin-bottom: 5px;
    }

    .detail-value {
        font-weight: 600;
        margin-bottom: 18px;
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


.btn-secondary {
    background-color: #B08968 !important;
    border-color: #B08968 !important;
    color: white !important;
}

.btn-secondary:hover {
    background-color: #8D6E53 !important;
    border-color: #8D6E53 !important;
    color: white !important;
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

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold">Beneficiary Details</h3>
                <p class="text-muted mb-0">Complete household information</p>
            </div>

            <a href="{{ route('beneficiaries.index') }}" class="btn btn-secondary">
                Back to Records
            </a>
        </div>

        <h5 class="section-title">1. Personal Information</h5>

        <div class="row">
            <div class="col-md-4">
                <p class="detail-label">First Name</p>
                <p class="detail-value">{{ $beneficiary->first_name }}</p>
            </div>

            <div class="col-md-4">
                <p class="detail-label">Middle Name</p>
                <p class="detail-value">{{ $beneficiary->middle_name ?: 'N/A' }}</p>
            </div>

            <div class="col-md-4">
                <p class="detail-label">Last Name</p>
                <p class="detail-value">{{ $beneficiary->last_name }}</p>
            </div>

            <div class="col-md-4">
                <p class="detail-label">Suffix</p>
                <p class="detail-value">{{ $beneficiary->suffix ?: 'N/A' }}</p>
            </div>

            <div class="col-md-4">
                <p class="detail-label">Birth Date</p>
                <p class="detail-value">{{ $beneficiary->birth_date->format('F d, Y') }}</p>
            </div>

            <div class="col-md-4">
                <p class="detail-label">Gender</p>
                <p class="detail-value">{{ $beneficiary->gender }}</p>
            </div>

            <div class="col-md-4">
                <p class="detail-label">Civil Status</p>
                <p class="detail-value">{{ $beneficiary->civil_status }}</p>
            </div>
        </div>

        <h5 class="section-title">2. Contact Information</h5>

        <div class="row">
            <div class="col-md-6">
                <p class="detail-label">Contact Number</p>
                <p class="detail-value">{{ $beneficiary->contact_number ?: 'N/A' }}</p>
            </div>

            <div class="col-md-6">
                <p class="detail-label">Email Address</p>
                <p class="detail-value">{{ $beneficiary->email ?: 'N/A' }}</p>
            </div>
        </div>

        <h5 class="section-title">3. Address Information</h5>

        <div class="row">
            <div class="col-md-4">
                <p class="detail-label">House Number</p>
                <p class="detail-value">{{ $beneficiary->house_number ?: 'N/A' }}</p>
            </div>

            <div class="col-md-4">
                <p class="detail-label">Street</p>
                <p class="detail-value">{{ $beneficiary->street ?: 'N/A' }}</p>
            </div>

            <div class="col-md-4">
                <p class="detail-label">Purok</p>
                <p class="detail-value">{{ $beneficiary->purok }}</p>
            </div>

            <div class="col-md-4">
                <p class="detail-label">Barangay</p>
                <p class="detail-value">{{ $beneficiary->barangay }}</p>
            </div>

            <div class="col-md-4">
                <p class="detail-label">Municipality</p>
                <p class="detail-value">{{ $beneficiary->municipality }}</p>
            </div>

            <div class="col-md-4">
                <p class="detail-label">Province</p>
                <p class="detail-value">{{ $beneficiary->province }}</p>
            </div>
        </div>

        <h5 class="section-title">4. 4Ps Household Information</h5>

        <div class="row">
            <div class="col-md-6">
                <p class="detail-label">Household ID</p>
                <p class="detail-value">{{ $beneficiary->household_id }}</p>
            </div>

            <div class="col-md-6">
                <p class="detail-label">Household Head</p>
                <p class="detail-value">{{ $beneficiary->household_head }}</p>
            </div>

            <div class="col-md-4">
                <p class="detail-label">Relationship to Household Head</p>
                <p class="detail-value">{{ $beneficiary->relationship_to_household_head }}</p>
            </div>

            <div class="col-md-4">
                <p class="detail-label">Date Registered</p>
                <p class="detail-value">
                    {{ $beneficiary->date_registered?->format('F d, Y') ?? 'N/A' }}
                </p>
            </div>

            <div class="col-md-4">
                <p class="detail-label">Beneficiary Status</p>
                <p class="detail-value">{{ $beneficiary->beneficiary_status }}</p>
            </div>
        </div>

    </div>

</div>

</body>
</html>
