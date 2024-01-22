<!-- ajax_script.php -->
<script>
    function updateStatus(userId, action) {
        $.post('update_status.php', { userId: userId, action: action }, function (data) {
            if (data.status) {
                // Update the displayed status for the corresponding user
                $('#form_' + userId).find('button').eq(0).text(data.status);
            } else if (data.error) {
                // Handle errors or provide feedback
                alert('Error: ' + data.error);
            }
        });
    }

    function systemUpdate() {
        $.post('update_status.php', { action: 'system_update' }, function (data) {
            if (data.success) {
                // Optionally, you can provide feedback or update the UI here
                alert('System update successful!');
                location.reload(); // Refresh the page after successful system update
            } else {
                // Handle errors or provide feedback
                alert('System update failed! ' + data.error);
            }
        });
    }

    function removeUser(userId) {
        $.ajax({
            type: 'POST',
            url: 'update_status.php',
            data: {
                action: 'toggle_remove',
                userId: userId
            },
            success: function(response) {
                // Handle the response, if needed
                console.log(response);

                // Optionally, you can reload the page or update the user interface
                // For example, you can remove the user details from the UI after successful removal
                $('#form_' + userId).remove();
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
    }
</script>
