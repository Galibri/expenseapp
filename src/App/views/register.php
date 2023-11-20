<?php include $this->resolve('partials/_header.php'); ?>
<section class="max-w-2xl mx-auto mt-12 p-4 bg-white shadow-md border border-gray-200 rounded">
    <form class="grid grid-cols-1 gap-6" action="/register" method="POST">
        <!-- Email -->
        <label class="block">
            <span class="text-gray-700">Email address</span>
            <input
                    type="email"
                    name="email"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    placeholder="john@example.com"
                    value="<?php echo e($oldFormData['email'] ?? ''); ?>"
            />
            <?php echo array_key_exists('email', $errors) ? "<div class='bg-gray-100 mt-2 p-2 text-red-500'>{$errors['email'][0]}</div>" : ""; ?>
        </label>
        <!-- Age -->
        <label class="block">
            <span class="text-gray-700">Age</span>
            <input
                    type="number"
                    name="age"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    placeholder=""
                    value="<?php echo e($oldFormData['age'] ?? ''); ?>"
            />
            <?php echo array_key_exists('age', $errors) ? "<div class='bg-gray-100 mt-2 p-2 text-red-500'>{$errors['age'][0]}</div>" : ""; ?>
        </label>
        <!-- Country -->
        <label class="block">
            <span class="text-gray-700">Country</span>
            <select
                    name="country"
                    class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            >
                <option value="">Select Country</option>
                <option value="USA" <?php selected('USA', $oldFormData['country']); ?>>USA</option>
                <option value="Canada" <?php selected('Canada', $oldFormData['country']); ?>>Canada</option>
                <option value="Mexico" <?php selected('Mexico', $oldFormData['country']); ?>>Mexico</option>
            </select>
            <?php echo array_key_exists('country', $errors) ? "<div class='bg-gray-100 mt-2 p-2 text-red-500'>{$errors['country'][0]}</div>" : ""; ?>
        </label>
        <!-- Social Media URL -->
        <label class="block">
            <span class="text-gray-700">Social Media URL</span>
            <input
                    type="text"
                    name="social_media_url"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    placeholder=""
                    value="<?php echo e($oldFormData['social_media_url'] ?? ''); ?>"
            />
            <?php echo array_key_exists('social_media_url', $errors) ? "<div class='bg-gray-100 mt-2 p-2 text-red-500'>{$errors['social_media_url'][0]}</div>" : ""; ?>
        </label>
        <!-- Password -->
        <label class="block">
            <span class="text-gray-700">Password</span>
            <input
                    type="password"
                    name="password"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    placeholder=""
            />
            <?php echo array_key_exists('password', $errors) ? "<div class='bg-gray-100 mt-2 p-2 text-red-500'>{$errors['password'][0]}</div>" : ""; ?>
        </label>
        <!-- Confirm Password -->
        <label class="block">
            <span class="text-gray-700">Confirm Password</span>
            <input
                    type="password"
                    name="confirm_password"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    placeholder=""
            />
            <?php echo array_key_exists('confirm_password', $errors) ? "<div class='bg-gray-100 mt-2 p-2 text-red-500'>{$errors['confirm_password'][0]}</div>" : ""; ?>
        </label>
        <!-- Terms of Service -->
        <div class="block">
            <div class="mt-2">
                <div>
                    <label class="inline-flex items-center">
                        <input
                                name="tos"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50"
                                type="checkbox"
                            <?php echo $oldFormData['tos'] ?? false ? 'checked' : ''; ?>
                        />
                        <span class="ml-2">I accept the terms of service.</span>
                    </label>
                    <?php echo array_key_exists('tos', $errors) ? "<div class='bg-gray-100 mt-2 p-2 text-red-500'>{$errors['tos'][0]}</div>" : ""; ?>
                </div>
            </div>
        </div>
        <button
                type="submit"
                name="submit"
                class="block w-full py-2 bg-indigo-600 text-white rounded"
        >
            Submit
        </button>
    </form>
</section>
<?php include $this->resolve('partials/_footer.php'); ?>
