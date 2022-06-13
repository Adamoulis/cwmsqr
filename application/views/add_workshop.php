<div class='add-workshop-section'>


    <?php if(isset($error)){echo $error;}?>
    <h2>Workshop Event Creation</h2>

    <?php echo form_open_multipart('add_workshop_to_database');?>
        <input type="file" name="userfile" value="Upload Event Poster" size="20" />
        <label for="workshop_name">Workshop name:</label>
        <input type="text" name="workshop_name">

        <label for="workshop_description">Workshop description:</label>
        <input type="text" name="workshop_description">

        <label for="venue">Venue:</label>
        <input type="text" name="venue">

        <label for="start_date">Start date:</label>
        <input type="date" name="start_date">

        <label for="end_date">End date:</label>
        <input type="date" name="end_date">

        <label for="start_time">Start time:</label>
        <input type="time" name="start_time">

        <label for="end_time">End time:</label>
        <input type="time" name="end_time">

        <input type="hidden" name="form_submitted" value="1" />
        <input type="submit" name="submit" value="Add Workshop">
    </form>
    
    
</div>