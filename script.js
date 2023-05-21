// Track partial entries
document.addEventListener('input', function(event) {
  var input = event.target;
  var form = input.form;
  var formData = new FormData(form);
  
  // Convert form data to JSON
  var json = {};
  for (var pair of formData.entries()) {
    json[pair[0]] = pair[1];
  }

  // Send JSON data to the server
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'track.php', true);
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.send(JSON.stringify(json));
});
