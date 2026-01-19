<?php 
/**
 * Plugin Name: Book Appointment
 * Description: Create appoinment
 * Author: Doctor linlin
 * version: 1.0.0
 */

add_action('admin_menu', 'doctor_appointment_menu');

function doctor_appointment_menu() {
    add_menu_page(
        'Book Appointment',   // Page title
        'Book Appointment',   // Menu name
        'manage_options',     // Capability
        'doctor-appointment', // Slug
        'doctor_appointment_page_html',  // Callback function
        'dashicons-calendar-alt',        // Icon
        6                                // Position
    );
}

// Main page content
function doctor_appointment_page_html() {
    ?>
    <div class="wrap">
        <h1>Welcome to Doctor Appointment Plugin</h1>
        <p>This is your doctor appointment management system.</p>
    </div>
    <?php
}

// Add submenu
add_action('admin_menu', 'doctor_appointment_submenu');

function doctor_appointment_submenu() {
    add_submenu_page(
        'doctor-appointment',
        'Patient',
        'Patient',
        'manage_options',
        'doctor-appointment-patient',
        'doctor_appointment_patient_page'
    );

    add_submenu_page(
        'doctor-appointment',
        'Doctor',
        'Doctor',
        'manage_options',
        'doctor-appointment-doctor',
        'doctor_appointment_doctor_page'
    );

    add_submenu_page(
        'doctor-appointment',
        'Appointment',
        'Appointment',
        'manage_options',
        'doctor-appointment-appointment',
        'doctor_appointment_appointment_page'
    );
}

// Patient page (with Name + Age + Time input box)
function doctor_appointment_patient_page() {
    ?>
    <div class="wrap">
        <h2>Patient</h2>

        <form method="post" action="">
            <table class="form-table">
                <tr>
                    <th><label for="patient_name">Name</label></th>
                    <td><input type="text" id="patient_name" name="patient_name" required></td>
                </tr>
                <tr>
                    <th><label for="patient_age">Age</label></th>
                    <td><input type="number" id="patient_age" name="patient_age" required></td>
                </tr>
                <tr>
                    <th><label for="patient_time">Time</label></th>
                    <td><input type="time" id="patient_time" name="patient_time" required></td>
                </tr>
            </table>

            <p class="submit">
                <input type="submit" class="button button-primary" value="Save">
            </p>
        </form>
    </div>
    <?php
}



// Doctor page (with Name + Age input box)
function doctor_appointment_doctor_page() {
    ?>
    <div class="wrap">
        <h2>Doctor</h2>

        <form method="post" action="">
            <table class="form-table">
                <tr>
                    <th><label for="doctor_name">Name</label></th>
                    <td><input type="text" id="doctor_name" name="doctor_name" required></td>
                </tr>
                <tr>
                    <th><label for="doctor_age">Age</label></th>
                    <td><input type="number" id="doctor_age" name="doctor_age" required></td>
                </tr>
            </table>

            <p class="submit">
                <input type="submit" class="button button-primary" value="Save">
            </p>
        </form>
    </div>
    <?php
}


// Appointment page (with Name + Age input box)
function doctor_appointment_appointment_page() {
    ?>
    <div class="wrap">
        <h2>Appointment</h2>

        <form method="post" action="">
            <table class="form-table">
                <tr>
                    <th><label for="appointment_name">Name</label></th>
                    <td><input type="text" id="appointment_name" name="appointment_name" required></td>
                </tr>
                <tr>
                    <th><label for="appointment_age">Age</label></th>
                    <td><input type="number" id="appointment_age" name="appointment_age" required></td>
                </tr>
            </table>

            <p class="submit">
                <input type="submit" class="button button-primary" value="Save">
            </p>
        </form>
    </div>
    <?php
}
