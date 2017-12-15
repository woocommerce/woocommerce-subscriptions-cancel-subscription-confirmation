jQuery(document).ready(function($) {
  $('.button.cancel').click(function(e) {
    var confirmDelete = window.confirm("Are you sure you want to cancel your subscription?")
    if (!confirmDelete) {
      e.preventDefault()
    }
  });
})
