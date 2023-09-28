<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>


</head>

<body style="background-color: black">
    <nav class="navbar navbar-dark bg-black">
        <div class="container-fluid">
            <a class="navbar-brand">
                <a class="nav-link" href="/home2">
                    <font style="font-size:22px;" color="darkyellow">Home</font>
                    <img src="img/pngtree-clink-glasses-to-celebrate-beer-toasts-png-image_5768200.png.jpeg"
                        alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                </a>
            </a>
        </div>
    </nav>

    <br>
    <h1>
        <center>
            <font color="darkyellow">Alcoholism</font>
        </center>
    </h1>
    <br>
    <center>
        <button type="button" style="width:270px; height:115px; font-size:25px; color:warning"
            class="btn btn-outline-warning" disabled>เวที</button>
        <br>
    </center>


    <section class="row">
        <aside class="col-2 col-xl-2 bg-pr full-height-overflow" style="border: 5px dashed black;">
        </aside>
        <main class="col-10 col-xl-10 bg-gray-100 border-min full-height-overflow" style="border: 5px solid black;">
            <div class="container">
                <center>
                    <div class="col-12">
                        <div class="row col-12 row-gap-4">
                            <div class="row col-3 row-gap-1">
                                <div>
                                    <ul>
                                        <button type="button"
                                            style="width:180px; height:250px; font-size:30px; color:warning; margin: 5px 5px;"
                                            class="btn btn-outline-warning" disabled>บาร์</button>
                                        <br>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 row-gap-2">
                                <form action="/booking" method="get">
                                    @foreach ($tables as $table)
                                    @if ($table->id <= 16)
                                        <!-- หรือเงื่อนไขอื่น ๆ ตามที่คุณต้องการ -->
                                        <button type="button"
                                            style="width:115px; height:50px; font-size:15px; margin: 5px 2px;"
                                            class="btn btn-outline-warning"
                                            data-bs-toggle="button"
                                            onclick="toggleTable({{ $table->id }})">{{ $table->id }}</button>
                                    @endif
                                    @endforeach
                                    <br>
                                    @for ($i = 1; $i <= count($tables); $i++)
                                        @if ($i >= 17 && $i <= 36)
                                            <!-- ปุ่ม id 17-22 -->
                                            <button type="button" style="font-size:15px; margin: 5px 2px;"
                                                class="btn btn-outline-warning"
                                                data-bs-toggle="button"
                                                onclick="toggleTable({{ $tables[$i - 1]->id }})">{{ $tables[$i - 1]->id }}</button>
                                        @endif
                                    @endfor
                                    <br>


                                    <br>
                                    <!-- ส่งข้อมูลโต๊ะที่ถูกเลือกไปยังหน้า "Booking" -->
                                    <input type="hidden" name="selectedTables" id="selected-tables-input">
                                    <input id="submit-button" class="btn btn-outline-warning" type="submit" value="Submit" onclick="updateSelectedTablesInput()">
                                </form>
                            </div>
                            <br> <br><br>
                            <h6><font color="darkyello">มัดจำโต๊ะละ 300 บาท<br>** ทางร้านขอแจ้งให้ทราบว่า โต๊ะใหญ่สามารถนั่งได้สูงสุด 8 คน ส่วนโต๊ะเล็กนั่งได้สูงสุด 5 คน **
                            </font></h6>
                                {{-- /
                                <div class="col-6 row-gap-2">
                                <form action="/booking" method="get">
                                    @foreach ($tables as $table)
                                    @if ($table->id <= 16)
                                            <!-- หรือเงื่อนไขอื่นๆ ตามที่คุณต้องการ -->
                                            <button type="button"
                                                style="width:115px; height:50px; font-size:15px; margin: 5px 2px;"
                                                class="btn btn-outline-warning"
                                                data-bs-toggle="button">{{ $table->id }}</button>
                                        @endif
                                    @endforeach
                                    <br>
                                    @for ($i = 1; $i <= count($tables); $i++)
                                        @if ($i >= 17 && $i <= 36)
                                            <!-- ปุ่ม id 17-22 -->
                                            <button type="button" style="font-size:15px; margin: 5px 2px;"
                                                class="btn btn-outline-warning"
                                                data-bs-toggle="button">{{ $tables[$i - 1]->id }}</button>
                                        @endif
                                    @endfor <br>
                                    <br>
                                    <input id="submit-button" class="btn btn-outline-warning" type="submit"
                                        value="Submit">
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </center>
            </div>
        </main>
    </section>
    <script>
        var selectedTables = [];

        function toggleTable(tableId) {
            var index = selectedTables.indexOf(tableId);
            if (index === -1) {
                if (selectedTables.length < 3) {
                    selectedTables.push(tableId);
                } else {
                    alert("คุณสามารถเลือกโต๊ะได้สูงสุด 3 โต๊ะ");
                    location.reload();

                }
            } else {
                selectedTables.splice(index, 1);
            }
            updateSelectedTables();
        }

        function updateSelectedTables() {
            var selectedTablesElement = document.getElementById("selected-tables");
            selectedTablesElement.textContent = "Table Number: " + selectedTables.join(", ");
        }

        function updateSelectedTablesInput() {
            var selectedTablesInput = document.getElementById("selected-tables-input");
            selectedTablesInput.value = selectedTables.join(",");
        }
    </script>
    {{-- <script>
        // Function to handle the "Submit" button click
        document.getElementById('submit-button').addEventListener('click', function(event) {
            // Get all the table buttons
            var tableButtons = document.querySelectorAll('.btn-outline-warning[data-bs-toggle="button"]');

            // Initialize a counter for selected tables
            var selectedCount = 0;

            // Loop through the table buttons and count the selected ones
            tableButtons.forEach(function(button) {
                if (button.classList.contains('active')) {
                    selectedCount++;
                }
            });

            // Check if the number of selected tables is 0
            if (selectedCount === 0) {
                // Display an alert message
                alert("กรุณาเลือกโต๊ะ");

                // Prevent the form from submitting
                event.preventDefault();
            } else if (selectedCount > 3) {
                // Display an alert message if more than 3 tables are selected
                alert("จองโต๊ะได้ไม่เกิน 3 โต๊ะ");
                location.reload();

                // Prevent the form from submitting
                event.preventDefault();
            }
        });
    </script> --}}

    <br><br><br>

    <div class="card border-warning bg-transparent">
        <br>
        <h5 class="card-header text-warning">About us</h5>
        <div class="card-body">
            <h5 class="card-title text-warning">
                เว็บสำหรับการจองโต๊ะเหมาะสำหรับบุคคลที่ต้องการให้แอลกอฮอล์ไหลเข้าสู่ร่างกาย </h5>
            <p class="card-title text-warning">With supporting text below as a natural lead-in to additional content.
            </p>
        </div>
    </div>


</body>

</html>
