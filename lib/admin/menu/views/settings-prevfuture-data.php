<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<table class="form-table">
    <tr>
        <th scope="row"><label for="timepad_previous_events"><?php _e( 'Previous events', 'timepad' ) ?>:</label></th>
        <td colspan="2">
            <select name="timepad_previous_events" id="timepad_previous_events">
                <option value="ignore"<?php selected( 'ignore', isset( $data['previous_events'] ) ? $data['previous_events'] : '' ); ?>><?php _e( 'Ignore previous events', 'timepad' ); ?></option>
                <option value="accept"<?php selected( 'accept', isset( $data['previous_events'] ) ? $data['previous_events'] : '' ); ?>><?php _e( 'Import previous events', 'timepad' ); ?></option>
            </select>
        </td>
        <td></td>
    </tr>
    <tr>
        <th scope="row"><label for="timepad_future_event_date"><?php _e( 'Future event date and time', 'timepad' ) ?>:</label></th>
        <td colspan="2">
            <select name="timepad_future_event_date" id="timepad_future_event_date">
                <option value="current"<?php selected( 'current', isset( $data['future_event_date'] ) ? $data['future_event_date'] : '' ); ?>><?php _e( 'Current time', 'timepad' ); ?></option>
                <option value="natural"<?php selected( 'natural', isset( $data['future_event_date'] ) ? $data['future_event_date'] : '' ); ?>><?php _e( 'Natural TimePad event date and time', 'timepad' ); ?></option>
            </select>
        </td>
        <td></td>
    </tr>
</table>
<input type="submit" class="button button-primary" name="save_changes" value="<?php _e( 'Save changes', 'timepad' ); ?>" />