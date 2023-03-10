<!-- include Select2 library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<!-- create a select field with search using Select2 -->
<label for="search-select">Search for a fruit:</label>
<select id="search-select" name="fruit">
  <option value="apple">Apple</option>
  <option value="banana">Banana</option>
  <option value="orange">Orange</option>
</select>

<script>
$(document).ready(function() {
  $('#search-select').select2();
});
</script>
