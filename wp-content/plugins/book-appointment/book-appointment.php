<?php 
/**
 * Plugin name: Book Appointment
 * Author: Doctor
 * version: 1.0.0
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
        'Settings',
        'Settings',
        'manage_options',
        'doctor-appointment-settings',
        'doctor_appointment_settings_page'
    );
}

function doctor_appointment_settings_page() {
    echo '<h2>Doctor Appointment Settings</h2>';
}