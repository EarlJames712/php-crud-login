<script>
    $(function () {
        $(".record").submit(function (e){
            e.preventDefault();

            let firstName = $("#first-name").val();
            let lastName = $("#last-name").val();
            let department = $("#department").val();

            $.ajax({
                type: 'POST',
                url: 'insertData.php',
                data: {
                    fn: firstName,
                    ln: lastName,
                    d: department
                },
                success: function() {
                    alert("Form Data Added! Please refresh the page to see results.");
                }
            });
        });
    });
</script>
</body>
</html>