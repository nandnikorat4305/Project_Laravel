

<?php $__env->startSection('content'); ?>
<div class="container my-5">

    <h2 class="fw-bold mb-4">➕ Add New Recipe</h2>

    <form action="<?php echo e(route('recipes.store')); ?>" method="POST" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label class="form-label">Recipe Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category" class="form-select" required>
                <option>Italian</option>
                <option>Mexican</option>
                <option>South Indian</option>
                <option>Gujarati</option>
                <option>Dessert</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Image URL</label>
            <input type="text" name="image" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" rows="4" class="form-control" required></textarea>
        </div>

        <div class="d-flex gap-3 mt-3">
            <button type="submit" class="btn btn-success">
                Save Recipe
            </button>

            <a href="<?php echo e(route('recipes.index')); ?>" class="btn btn-success">
                Back to Recipes
            </a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\sem 6\LARAVEL\project\resources\views/recipes/create.blade.php ENDPATH**/ ?>