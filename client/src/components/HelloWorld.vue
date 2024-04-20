<script >
import AddProduct from './AddProduct.vue'
import DeleteConfirmation from './DeleteConfirmation.vue'
import EditProduct from './EditProduct.vue'


export default {
  name: "HelloWorld",
  components: {
    AddProduct,
    EditProduct,
    DeleteConfirmation
  }
}
</script>
<template>
  <div class="flex flex-col gap-5 items-center mt-32">
    <div class="overflow-x-auto w-[90%]">
      <table class="table table-zebra">
        <!-- head -->
        <thead>
          <tr>
            <th></th>
            <th>Name</th>
            <th>Desc</th>
            <th>Price</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td>Cy Ganderton</td>
            <td>Quality Control Specialist</td>
            <td>23$</td>
            <td>Blue</td>

            <td class="flex flex-row gap-3">
              <font-awesome-icon icon="fa-solid fa-trash" onclick="dc_form.showModal()" />
              <font-awesome-icon icon="fa-solid fa-eye" />
              <font-awesome-icon icon="fa-solid fa-pen" onclick="edit_form.showModal()" />
            </td>
          </tr>

          <tr>
            <th>1</th>
            <td>Cy Ganderton</td>
            <td>Quality Control Specialist</td>
            <td>23$</td>
            <td>Blue</td>

            <td class="flex flex-row gap-3">
              <font-awesome-icon icon="fa-solid fa-trash" />
              <font-awesome-icon icon="fa-solid fa-eye" />
              <font-awesome-icon icon="fa-solid fa-pen" onclick="edit_form.showModal()" />
            </td>
          </tr>
          <tr>
            <th>1</th>
            <td>Cy Ganderton</td>
            <td>Quality Control Specialist</td>
            <td>23$</td>
            <td>Blue</td>

            <td class="flex flex-row gap-3">
              <font-awesome-icon icon="fa-solid fa-trash" />
              <font-awesome-icon icon="fa-solid fa-eye" />
              <font-awesome-icon icon="fa-solid fa-pen" />
            </td>
          </tr>
          <tr>
            <th>1</th>
            <td>Cy Ganderton</td>
            <td>Quality Control Specialist</td>
            <td>23$</td>
            <td>Blue</td>

            <td class="flex flex-row gap-3">
              <font-awesome-icon icon="fa-solid fa-trash" />
              <font-awesome-icon icon="fa-solid fa-eye" />
              <font-awesome-icon icon="fa-solid fa-pen" />
            </td>
          </tr>
          <tr>
            <th>1</th>
            <td>Cy Ganderton</td>
            <td>Quality Control Specialist</td>
            <td>23$</td>
            <td>Blue</td>

            <td class="flex flex-row gap-3">
              <font-awesome-icon icon="fa-solid fa-trash" />
              <font-awesome-icon icon="fa-solid fa-eye" />
              <font-awesome-icon icon="fa-solid fa-pen" />
            </td>
          </tr>
          <!-- row 2 -->
          <tr>
            <th>2</th>
            <td>Hart Hagerty</td>
            <td>Desktop Support Technician</td>
            <td>22$</td>
            <td>Purple</td>
            <td class="flex flex-row gap-3">
              <font-awesome-icon icon="fa-solid fa-trash" />
              <font-awesome-icon icon="fa-solid fa-eye" />
              <font-awesome-icon icon="fa-solid fa-pen" />
            </td>
          </tr>
          <!-- row 3 -->
          <tr>
            <th>3</th>
            <td>Brice Swyre</td>
            <td>Tax Accountant</td>
            <td>12$</td>
            <td>Red</td>
            <td class="flex flex-row gap-3">
              <font-awesome-icon icon="fa-solid fa-trash" />
              <font-awesome-icon icon="fa-solid fa-eye" />
              <font-awesome-icon icon="fa-solid fa-pen" />
            </td>
          </tr>
          <tr>
            <th>3</th>
            <td>Brice Swyre</td>
            <td>Tax Accountant</td>
            <td>89$</td>
            <td>Red</td>
            <td class="flex flex-row gap-3">
              <font-awesome-icon icon="fa-solid fa-trash" class=" hover:cursor-pointer" />
              <font-awesome-icon icon="fa-solid fa-eye" class=" hover:cursor-pointer" />
              <font-awesome-icon icon="fa-solid fa-pen" class=" hover:cursor-pointer" />
            </td>
          </tr>
          <tr>
            <th>3</th>
            <td>Brice Swyre</td>
            <td>Tax Accountant</td>
            <td>56$</td>
            <td>Red</td>
            <td class="flex flex-row gap-3">
              <font-awesome-icon icon="fa-solid fa-trash" />
              <font-awesome-icon icon="fa-solid fa-eye" />
              <font-awesome-icon icon="fa-solid fa-pen" />
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <button class="btn btn-success mx-auto" onclick="add_form.showModal()"><font-awesome-icon icon="fa-solid fa-plus w-[20px]"/>Add product</button>

    <dialog id="add_form" class="modal">
      <AddProduct />
    </dialog>
    
    <dialog id="edit_form" class="modal">
      <EditProduct />
    </dialog>

    <dialog id="dc_form" class="modal">
      <DeleteConfirmation />
    </dialog>

  </div>
</template>

