<html>
    <head>
        <title>Làm việc với ajax</title>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="js/app.js" type="text/javascript"></script>
    </head>
    <body>
        <h1>Tính toán bằng Ajax</h1>
        <form action="">
            <p>Giá: <span id="price">10</span></p>
            <label>Số lượng</label>
            <input type="number" min="0" max="20" name="num_order" id="num_order" value="0"/>
            <hr/>
            <p>Tổng: <span id="total">0</span></p>
        </form>
    </body>
</html>