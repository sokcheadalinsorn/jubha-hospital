<?php 
/**
 * Plugin Name: Book Appointment
 * Description: Create appointment
 * Author: Doctor linlin
 * Version: 1.0.0
 */

add_action('admin_menu', 'doctor_appointment_menu');
add_action('admin_menu', 'doctor_appointment_submenu');

// Create tables on plugin activation
register_activation_hook(__FILE__, 'doctor_appointment_create_tables');

function doctor_appointment_create_tables() {
    global $wpdb;

    $table_patient = $wpdb->prefix . 'doctor_patient';
    $table_doctor  = $wpdb->prefix . 'doctor_doctor';
    $table_appointment = $wpdb->prefix . 'doctor_appointment';

    $charset_collate = $wpdb->get_charset_collate();

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    // Patient table
    $sql1 = "CREATE TABLE $table_patient (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        age int NOT NULL,
        time time NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    // Doctor table
    $sql2 = "CREATE TABLE $table_doctor (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        age int NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    // Appointment table
    $sql3 = "CREATE TABLE $table_appointment (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        patient_id int NOT NULL,
        doctor_id int NOT NULL,
        appointment_date date NOT NULL,
        appointment_time time NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    dbDelta($sql1);
    dbDelta($sql2);
    dbDelta($sql3);
}

// Main menu
function doctor_appointment_menu() {
    add_menu_page(
        'Book Appointment',
        'Book Appointment',
        'manage_options',
        'doctor-appointment',
        'doctor_appointment_page_html',
        'dashicons-calendar-alt',
        6
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

// Submenu
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


// Patient page
function doctor_appointment_patient_page() {
    global $wpdb;
    $table_patient = $wpdb->prefix . 'doctor_patient';

    // Save data
    if (isset($_POST['patient_name'])) {
        $wpdb->insert(
            $table_patient,
            array(
                'name' => sanitize_text_field($_POST['patient_name']),
                'age'  => intval($_POST['patient_age']),
                'time' => sanitize_text_field($_POST['patient_time']),
            )
        );

        echo '<div class="notice notice-success is-dismissible">
                <p>Patient saved successfully!</p>
              </div>';
    }
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


// Doctor page
function doctor_appointment_doctor_page() {
    global $wpdb;
    $table_doctor = $wpdb->prefix . 'doctor_doctor';

    // Save data
    if (isset($_POST['doctor_name'])) {
        $wpdb->insert(
            $table_doctor,
            array(
                'name' => sanitize_text_field($_POST['doctor_name']),
                'age'  => intval($_POST['doctor_age']),
            )
        );

        echo '<div class="notice notice-success is-dismissible">
                <p>Doctor saved successfully!</p>
              </div>';
    }
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


// Appointment page
function doctor_appointment_appointment_page() {
    global $wpdb;

    $table_patient = $wpdb->prefix . 'doctor_patient';
    $table_doctor  = $wpdb->prefix . 'doctor_doctor';
    $table_appointment = $wpdb->prefix . 'doctor_appointment';

    // Get patients and doctors
    $patients = $wpdb->get_results("SELECT id, name FROM $table_patient");
    $doctors  = $wpdb->get_results("SELECT id, name FROM $table_doctor");

    // Save data
    if (isset($_POST['patient_id'])) {
        $wpdb->insert(
            $table_appointment,
            array(
                'patient_id' => intval($_POST['patient_id']),
                'doctor_id'  => intval($_POST['doctor_id']),
                'appointment_date' => sanitize_text_field($_POST['appointment_date']),
                'appointment_time' => sanitize_text_field($_POST['appointment_time']),
            )
        );

        echo '<div class="notice notice-success is-dismissible">
                <p>Appointment saved successfully!</p>
              </div>';
    }
    ?>
    <div class="wrap">
        <h2>Appointment</h2>

        <form method="post" action="">
            <table class="form-table">
                <tr>
                    <th><label for="patient_id">Patient</label></th>
                    <td>
                        <select id="patient_id" name="patient_id" required>
                            <?php foreach ($patients as $patient) : ?>
                                <option value="<?php echo $patient->id; ?>">
                                    <?php echo $patient->name; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th><label for="doctor_id">Doctor</label></th>
                    <td>
                        <select id="doctor_id" name="doctor_id" required>
                            <?php foreach ($doctors as $doctor) : ?>
                                <option value="<?php echo $doctor->id; ?>">
                                    <?php echo $doctor->name; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th><label for="appointment_date">Date</label></th>
                    <td><input type="date" id="appointment_date" name="appointment_date" required></td>
                </tr>

                <tr>
                    <th><label for="appointment_time">Time</label></th>
                    <td><input type="time" id="appointment_time" name="appointment_time" required></td>
                </tr>
            </table>

            <p class="submit">
                <input type="submit" class="button button-primary" value="Save">
            </p>
        </form>
    </div>
    <?php
}

