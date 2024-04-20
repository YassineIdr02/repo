<template>
    <div class="modal-box flex flex-col gap-3">
        <h3 class="font-bold text-lg">Add a product</h3>
        <label class="input input-bordered flex items-center gap-2">
            Name
            <input type="text" class="grow" placeholder="Product" required />
        </label>
        <label class="input input-bordered flex items-center gap-2">
            Desc
            <input type="text" class="grow" placeholder="This a product" required />
        </label>
        <label class="input input-bordered flex items-center gap-2">
            Price
            <input type="number" class="grow" placeholder="9.99$" required />
        </label>
        
        <div class="modal-action">
            <form method="dialog" class="inline-flex justify-end gap-4">
                <button class="btn btn-info ">Add</button>
                <button class="btn">Close</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "AddProduct"
}
</script>

<style></style>