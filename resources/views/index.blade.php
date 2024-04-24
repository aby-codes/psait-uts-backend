<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades</title>
</head>
<body>
    <h1>Student Grades</h1>
    <div id="grades-list"></div>
    <form id="add-grade-form">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim">
        <label for="kode_mk">Kode MK:</label>
        <input type="text" id="kode_mk" name="kode_mk">
        <label for="nilai">Nilai:</label>
        <input type="text" id="nilai" name="nilai">
        <button type="submit">Add Grade</button>
    </form>
    <script src="app.js"></script>
</body>
</html>