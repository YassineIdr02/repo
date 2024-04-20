<template>
  <div class="modal-box flex flex-col gap-3">
        <h3 class="font-bold text-lg">Are you sure you want to delete!!</h3>
        <div class="modal-action">
            <form method="dialog" class="inline-flex justify-end gap-4">
                <button class="btn btn-error">Delete</button>
                <button class="btn">Cancel</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "DeleteConfirmation"
}
</script>

<style>

</style>