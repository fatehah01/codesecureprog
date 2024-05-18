<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <?php echo e(__("You're logged in!")); ?>

                </div>
            </div>
        </div>
    </div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram-like Gallery</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>/* styles.css */

        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            background-color: #0056b3;
        }

        body, html {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fafafa; /* Instagram uses a very light gray background */
}

.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    grid-gap: 10px;
    width: 90vw; /* Responsive width */
    padding: 10px;
}

.gallery-item {
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden; /* Ensures the images do not break the layout */
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures images cover the area well without stretching */
}

        </style>
    <div class="gallery">
        <div class="gallery-item">
            <img src="https://hips.hearstapps.com/hmg-prod/images/2024-toyota-camry-102-64cbc4858e198.jpg?crop=0.469xw:0.527xh;0.332xw,0.190xh&resize=768:*" alt="Description of photo 1">
            <div>

            </div>
        </div>
        <div class="gallery-item">
            <img src="https://hips.hearstapps.com/hmg-prod/images/img-0455-1-jpg-654e494b04e6b.jpg?crop=0.752xw:1.00xh;0.206xw,0&resize=640:*" alt="Description of photo 2">
        </div>
        <!-- More images can be added similarly -->
        <div class="gallery-item">
            <img src="https://soyacincau.com/wp-content/uploads/2022/07/220722-2022-Perodua-Alza-feature-e1658460700302.jpg" alt="Description of photo 3">
        </div>
        <div class="gallery-item">
            <img src="https://paultan.org/image/2021/12/2022-Perodua-Myvi-1.5-AV_Ext-2.jpg" alt="Description of photo 3">
        </div>
        <div class="gallery-item">
            <img src="https://www.perodua.com.my/assets/images/CarSpec/Axia/Axia-SE.jpg" alt="Description of photo 3">
        </div> <div class="gallery-item">
            <img src="" alt="Description of photo 3">
            <img src="https://www.hondadreamcar.com/wp-content/uploads/2021/01/LOAD-YOUR-BIG-DREAM.png" alt="Description of photo 3">
        </div> <div class="gallery-item">
            <div class="container">
                <h1>Book Your Car</h1>
                <form action="/submit-booking" method="POST">
                    <div class="form-group">
                        <label for="car">Choose a Car:</label>
                        <select id="car" name="car_id" required>
                            <option value="1">Toyota Camry</option>
                            <option value="2">Honda Accord</option>
                            <option value="3">Ford Mustang</option>
                            <option value="4">Honda Jazz</option>
                            <option value="5">Perodua Axia</option>
                            <option value="6">Ferari Morque </option>
                            <!-- Add more car options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pickup_date">Pick-up Date:</label>
                        <input type="date" id="pickup_date" name="pickup_date" required>
                    </div>
                    <div class="form-group">
                        <label for="dropoff_date">Drop-off Date:</label>
                        <input type="date" id="dropoff_date" name="dropoff_date" required>
                    </div>
                    <button type="submit">Book Now</button>
                </form>

                <div id="popupModal" class="modal" style="display:none;">
                    <div class="modal-content">
                        <p>Done Booking!</p>
                        <button id="closeModal">Close</button>
                    </div>
                </div>

    </div>
    
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#bookingForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    success: function(response) {
                        if(response.success) {
                            $('#popupModal').show(); // Show the popup
                        }
                    }
                });
            });

            $('#closeModal').on('click', function() {
                $('#popupModal').hide(); // Hide the popup
            });
        });
    </script>


</body>
</html>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\carBookingSystem\resources\views/dashboard.blade.php ENDPATH**/ ?>