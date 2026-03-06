<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - School System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <h1 class="text-xl font-bold text-blue-600">School System</h1>
                    </div>
                </div>
                <div class="flex items-center">
                    <span class="text-gray-700 mr-4">Welcome, <?php echo e($user->name); ?></span>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="bg-white overflow-hidden shadow-xl rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">Student Dashboard</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                            <h3 class="text-lg font-semibold text-blue-800">Profile Information</h3>
                            <p class="mt-2 text-gray-600"><strong>Name:</strong> <?php echo e($user->name); ?></p>
                            <p class="mt-2 text-gray-600"><strong>Email:</strong> <?php echo e($user->email); ?></p>
                            <p class="mt-2 text-gray-600"><strong>Role:</strong> <?php echo e(ucfirst($user->role)); ?></p>
                        </div>
                        
                        <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                            <h3 class="text-lg font-semibold text-green-800">Quick Actions</h3>
                            <div class="mt-4 space-y-2">
                                <a href="<?php echo e(route('profile.edit')); ?>" class="block bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded text-center">
                                    Edit Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\school-system\resources\views/student/dashboard.blade.php ENDPATH**/ ?>