<?php
/*
 * Plugin Name: Book appointment
 * Descripti
 * Version: 1.0
 * Author: Srean Lita
 */

  
add_action('admin_menu', 'doctor_appointment_menu');

function doctor_appointment_menu() {
    add_menu_page(
        'Doctor Appointment Settings',   // Page title
        'DoctorAppointment',             // Menu name
        'manage_options',                // Capability
        'doctor-appointment',            // Slug
        'doctor_appointment_page_html',  // Callback function
        'dashicons-calendar-alt',        // Icon
        6                                // Position
    );
}

/* ===== Submenu ===== */
add_action('admin_menu', 'doctor_appointment_submenu');

function doctor_appointment_submenu() {

    // Create Patient
    add_submenu_page(
        'doctor-appointment',
        'Create Patient',
        'Create Patient',
        'manage_options',
        'create-patient',
        'create_patient_page'
    );

    // Create Doctor
    add_submenu_page(
        'doctor-appointment',
        'Create Doctor',
        'Create Doctor',
        'manage_options',
        'create-doctor',
        'create_doctor_page'
    );

    // Create Appointment
    add_submenu_page(
        'doctor-appointment',
        'Create Appointment',
        'Create Appointment',
        'manage_options',
        'create-appointment',
        'create_appointment_page'
    );
}

/* ===== Dashboard Page ===== */
function doctor_appointment_dashboard() {
    echo "<h1>Doctor Appointment Dashboard</h1>";
}

/* ===== Create Patient Page ===== */
function create_patient_page() {
    ?>
    <h1>Create Patient</h1>
    <form method="post">
        <table class="form-table">
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><input type="number" name="age" required></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><input type="text" name="phone" required></td>
            </tr>
        </table>
        <p class="submit">
            <input type="submit" class="button button-primary" value="Save Patient">
        </p>
    </form>
    <?php
}

/* ===== Create Doctor Page ===== */
function create_doctor_page() {
    ?>
    <h1>Create Doctor</h1>
    <form method="post">
        <table class="form-table">
            <tr>
                <th>Doctor Name</th>
                <td><input type="text" required></td>
            </tr>
            <tr>
                <th>Specialty</th>
                <td><input type="text" required></td>
            </tr>
        </table>
        <p class="submit">
            <input type="submit" class="button button-primary" value="Save Doctor">
        </p>
    </form>
    <?php
}

/* ===== Create Appointment Page ===== */
function create_appointment_page() {
    ?>
    <h1>Create Appointment</h1>
    <form method="post">
        <table class="form-table">
            <tr>
                <th>Patient Name</th>
                <td><input type="text" required></td>
            </tr>
            <tr>
                <th>Doctor Name</th>
                <td><input type="text" required></td>
            </tr>
            <tr>
                <th>Date</th>
                <td><input type="date" required></td>
            </tr>
        </table>
        <p class="submit">
            <input type="submit" class="button button-primary" value="Save Appointment">
        </p>
    </form>
    <?php
}